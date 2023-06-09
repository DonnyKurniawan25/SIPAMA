<?php

// app/Http/Controllers/CertaintyFactorController.php

namespace App\Http\Controllers;

use App\Models\Gejala;
use App\Models\KaidahProduksi;
use App\Models\Penyakit;
use App\Models\HasilCertaintyFactor;
use Illuminate\Http\Request;

class CertaintyFactorController extends Controller
{
    public function index()
    {
        $gejala = Gejala::all();

        return view('certainty-factor.index', compact('gejala'));
    }

    public function calculate(Request $request)
    {
        $gejalaInput = $request->input('gejala', []);
        $cfUserValues = $request->input('cf_user', []);
    
        $penyakit = Penyakit::all();
        $hasilPerhitungan = [];
    
        $highestCFFinal = 0; // Menyimpan nilai tertinggi dari CF Final
    
        foreach ($penyakit as $penyakitItem) {
            $cfPakar = 1;
            $cfUser = 1;
            $matchCount = 0;
    
            foreach ($gejalaInput as $gejalaId) {
                $kaidah = KaidahProduksi::where('penyakit_id', $penyakitItem->id)
                    ->where('gejala_id', $gejalaId)
                    ->first();
    
                if ($kaidah) {
                    $cfPakar *= $kaidah->mb;
                    if (isset($cfUserValues[$gejalaId])) {
                        $cfUser *= $cfUserValues[$gejalaId];
                    }
                    $matchCount++;
                }
            }
    
            if ($matchCount > 0) {
                $cfFinal = $cfPakar * $cfUser + (1 - $cfPakar) * (1 - $cfUser);
                if ($cfFinal > $highestCFFinal) {
                    $highestCFFinal = $cfFinal; // Memperbarui nilai tertinggi
                    $hasilPerhitungan = [
                        'penyakit' => $penyakitItem,
                        'cf_pakar' => $cfPakar,
                        'cf_user' => $cfUser,
                        'cf_final' => $cfFinal,
                    ];
                }
            }
        }
    
    // Simpan data hasil perhitungan dengan CF Final tertinggi ke dalam database
    $hasilCertaintyFactor = new HasilCertaintyFactor();
    $penyakit = Penyakit::find($hasilPerhitungan['penyakit']->id);
    $hasilCertaintyFactor->penyakit = $penyakit->nama;
    $hasilCertaintyFactor->cf_pakar = $hasilPerhitungan['cf_pakar'];
    $hasilCertaintyFactor->cf_user = $hasilPerhitungan['cf_user'];
    $hasilCertaintyFactor->cf_final = $hasilPerhitungan['cf_final'];
    $hasilCertaintyFactor->save();

        return view('certainty-factor.hasil', compact('hasilPerhitungan'));
    }
    
    
}
