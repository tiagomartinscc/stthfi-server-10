<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VagaEmprego extends Model
{
    protected $table = 'vaga_emprego';
    protected $primaryKey  = 'id_vaga_emprego';

    public $timestamps = false;
}
