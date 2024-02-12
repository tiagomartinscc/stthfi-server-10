<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\SedeRecreativa;

class SedeRecreativaFoto extends Model
{
    protected $table = 'sede_recreativa_foto';
    protected $primaryKey  = 'id_sede_recreativa_foto';

    public $timestamps = false;

    public function sede_recreativa()
    {
        return $this->belongsTo(SedeRecreativa::class, 'id_sede_recreativa', 'id_sede_recreativa');
    }
}
