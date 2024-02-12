<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SeusDireitos extends Model
{
    protected $table = 'seus_direitos';
    protected $primaryKey  = 'id_seus_direitos';

    public $timestamps = false;
}
