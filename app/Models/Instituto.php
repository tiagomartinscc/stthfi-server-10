<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\InstitutoFoto;

class Instituto extends Model
{
    protected $table = 'instituto';
    protected $primaryKey  = 'id_instituto';

    public $timestamps = false;

    public function fotos()
    {
        return $this->hasMany(InstitutoFoto::class, 'id_instituto', 'id_instituto');
    }
}
