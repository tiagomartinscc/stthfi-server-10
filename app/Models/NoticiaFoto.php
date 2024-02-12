<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Noticia;

class NoticiaFoto extends Model
{
    protected $table = 'noticia_foto';
    protected $primaryKey  = 'id_noticia_foto';

    public $timestamps = false;

    public function noticia()
    {
        return $this->belongsTo(Noticia::class, 'id_noticia', 'id_noticia');
    }
}
