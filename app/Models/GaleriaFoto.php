<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Galeria;

class GaleriaFoto extends Model
{
    protected $table = 'galeria_foto';
    protected $primaryKey  = 'id_galeria_foto';

    public $timestamps = false;

    public function galeria()
    {
        return $this->belongsTo(Galeria::class, 'id_galeria', 'id_galeria');
    }
}
