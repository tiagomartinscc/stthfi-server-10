<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Convenio extends Model
{
    protected $table = 'convenio';
    protected $primaryKey  = 'id_convenio';

    public $timestamps = false;
}
