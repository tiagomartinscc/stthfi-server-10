<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proposta extends Model
{
    protected $table = 'proposta';
    protected $primaryKey  = 'id_proposta';

    public $timestamps = false;
}
