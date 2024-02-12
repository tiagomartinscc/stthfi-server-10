<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoticiaResumoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $fotos = $this->fotos->count() > 0 ? url('/_upload/noticia/noticia-foto_'.$this->fotos->toArray()[0]['arquivo']) : '';
        return [
            'id_noticia' => $this->id_noticia,
            'data_noticia' => $this->data_noticia,
            'titulo' => trim($this->titulo),
            'resumo' => trim($this->resumo),
            'foto' => $fotos
        ];
    }
}


// "id_noticia": 1589,
// "titulo": "DIA DO TRABALHADOR ",
// "data_noticia": "2023-04-28",
// "resumo": "BdF Explica por que o 1º de maio é dia do trabalhador e da trabalhadora em mais de 80 países",
// "fotos": [
// {
// "id_noticia_foto": 2314,
// "id_noticia": 1589,
// "arquivo": "2023-04-28-15-41-53.jpg",
// "legenda": "",
// "ordem": 1,
// "nome_original": "maio.jpg"
// }
// ]
