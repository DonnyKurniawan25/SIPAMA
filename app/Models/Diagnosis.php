<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnosis extends Model
{
    public $timestamps=false;
    public $incrementing = false;
    protected $table="diagnosis";
    protected $fillable=['penyakit','hasil'];

    public function penyakit()
    {
        return $this->belongsTo(Penyakit::class);
    }
}
