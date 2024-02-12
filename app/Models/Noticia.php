<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\NoticiaFoto;
use App\Models\NoticiaArquivo;

class Noticia extends Model
{
    protected $table = 'noticia';
    protected $primaryKey  = 'id_noticia';

    public $timestamps = false;

    public function fotos()
    {
        return $this->hasMany(NoticiaFoto::class, 'id_noticia', 'id_noticia');
    }

    public function arquivos()
    {
        return $this->hasMany(NoticiaArquivo::class, 'id_noticia', 'id_noticia');
    }
}
