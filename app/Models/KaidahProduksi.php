<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KaidahProduksi extends Model
{
    public $timestamps=false;
    public $incrementing = false;
    protected $table="kaidah_produksi";
    protected $fillable=['penyakit_id', 'gejala_id', 'mb', 'md'];

    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'gejala_id');
    }

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class, 'penyakit_id');
    }

}
