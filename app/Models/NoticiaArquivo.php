<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Noticia;

class NoticiaArquivo extends Model
{
    protected $table = 'noticia_arquivo';
    protected $primaryKey  = 'id_noticia_arquivo';

    public $timestamps = false;

    public function noticia()
    {
        return $this->belongsTo(Noticia::class, 'id_noticia', 'id_noticia');
    }
}
