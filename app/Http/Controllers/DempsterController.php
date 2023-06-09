<?php

namespace App\Http\Controllers;

use App\Models\Diagnosis;
use Illuminate\Http\Request;
use App\Models\Gejala;
use App\Models\Pasien;
use App\Models\Penyakit;
use App\Models\KaidahProduksi;

class DempsterController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();
        return view('demspter-shafer.index', compact('gejala'));
    }

    public function store(Request $request)
    {
    
    $pasien = new Pasien;
    $pasien->id = $request->input('id');
    $pasien->nama = $request->input('nama');
    $pasien->umur = $request->input('umur');
    $pasien->jenis_kelamin = $request->input('jenis_kelamin');
    $pasien->pekerjaan = $request->input('pekerjaan');
    $pasien->alamat = $request->input('alamat');
    $pasien->save();

    $data = [
        'pasien' => Pasien::all()
    ];

    return view('demspter-shafer.index')->with($data);
    }

    public function diagnosa(Request $request)
    {
    $gejala = Gejala::all();
    $gejala_pilihan = $request->gejala;
    $penyakit = Penyakit::all();
    $hasil_diagnosa = [];

    // Perhitungan Dempster Shafer
    foreach ($penyakit as $key => $penyakit) {
        $mb = 1;
        $md = 1;
        $relasi = KaidahProduksi::where('penyakit_id', $penyakit->id)->whereIn('gejala_id', $gejala_pilihan)->get();
        if ($relasi->count() > 0) {
            foreach ($relasi as $r) {
                $mb *= $r->mb;
                $md *= (1 - $r->mb);
            }
            $hasil = $mb / ($mb + $md);
            $hasil_diagnosa[$key] = [
                'penyakit' => $penyakit->nama,
                'hasil' => $hasil,
                'deskripsi' => $penyakit->deskripsi
            ];
        }
    }

    // Urutkan hasil diagnosa dari yang tertinggi ke terendah
    usort($hasil_diagnosa, function($a, $b) {
        return $b['hasil'] <=> $a['hasil'];
    });

    if (count($hasil_diagnosa) > 0) {
        $hasil_tertinggi = $hasil_diagnosa[0];
        $diagnosa = new Diagnosis();
        $diagnosa->penyakit = $hasil_tertinggi['penyakit'];
        $diagnosa->hasil = $hasil_tertinggi['hasil'];
        $diagnosa->save();

         // Ambil deskripsi dari penyakit tertinggi
         $deskripsi_penyakit_tertinggi = $hasil_tertinggi['deskripsi'];
        } else {
            $deskripsi_penyakit_tertinggi = null;
    }

    return view('demspter-shafer.hasil', compact('hasil_diagnosa', 'gejala'));

}

    
}
