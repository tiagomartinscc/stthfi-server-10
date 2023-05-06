<?php

namespace App\Models\Legado;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model { // extend changed

    protected $connection = 'mysql_legado';
    protected $table = 'usuario';
    protected $primaryKey  = 'id_usuario';

    public $timestamps = false;
}
