<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\GaleriaFoto;

class Galeria extends Model
{
    protected $table = 'galeria';
    protected $primaryKey  = 'id_galeria';

    public $timestamps = false;

    public function fotos()
    {
        return $this->hasMany(GaleriaFoto::class, 'id_galeria', 'id_galeria');
    }
}
