<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SedeRecreativaFoto;

class SedeRecreativa extends Model
{
    protected $table = 'sede_recreativa';
    protected $primaryKey  = 'id_sede_recreativa';

    public $timestamps = false;

    public function fotos()
    {
        return $this->hasMany(SedeRecreativaFoto::class, 'id_sede_recreativa', 'id_sede_recreativa');
    }
}
