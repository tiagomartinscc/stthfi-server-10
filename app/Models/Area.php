<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Galeria;

class Area extends Model
{
    protected $table = 'area';
    protected $primaryKey  = 'id_area';

    public $timestamps = false;

    public function galerias()
    {
        return $this->hasMany(Galeria::class, 'id_area', 'id_area');
    }
}
