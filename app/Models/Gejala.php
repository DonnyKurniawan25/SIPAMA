<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    protected $table = "gejala";

    public $incrementing = false;

    protected $fillable = ['id','nama'];

    public function penyakit()
    {
        return $this->belongsToMany(Penyakit::class, 'kaidah_produksi', 'gejala_id', 'penyakit_id')
            ->withPivot('mb', 'md');
    }
}
