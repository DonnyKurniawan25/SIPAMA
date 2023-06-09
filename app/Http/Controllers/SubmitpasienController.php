<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class SubmitpasienController extends Controller
{
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

}
