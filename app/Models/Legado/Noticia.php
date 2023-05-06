<?php

namespace App\Models\Legado;
use Illuminate\Database\Eloquent\Model;

class Noticia extends Model {

    protected $connection = 'mysql_legado';
    protected $table = 'noticia';
    protected $primaryKey  = 'id_noticia';

    public $timestamps = false;
}
