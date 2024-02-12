<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OfertaEmprego extends Model
{
    protected $table = 'oferta_emprego';
    protected $primaryKey  = 'id_oferta_emprego';

    public $timestamps = false;
}
