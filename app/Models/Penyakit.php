<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    protected $table = "penyakit";

    public $incrementing = false;

    protected $fillable = ['id','nama', 'deskripsi'];

    public function gejala()
    {
        return $this->belongsToMany(Gejala::class, 'kaidah_produksi', 'penyakit_id', 'gejala_id')
            ->withPivot('mb', 'md');
    }

    public function diagnosa()
    {
        return $this->hasMany(KaidahProduksi::class);
    }
}
