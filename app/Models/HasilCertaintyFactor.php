<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HasilCertaintyFactor extends Model
{
    protected $table = 'hasil_certainty_factor'; // Nama tabel dalam database

    protected $fillable = [
        'penyakit', 'cf_pakar', 'cf_user', 'cf_final'
    ];

    // Tambahkan timestamp jika diperlukan
    public $timestamps = false;
}
