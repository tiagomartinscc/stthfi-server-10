<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Configuracao extends Model
{
    protected $table = 'configuracao';
    protected $primaryKey  = 'id_configuracao';

    public $timestamps = false;
}
