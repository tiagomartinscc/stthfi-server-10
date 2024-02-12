<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConvenioResumoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $arquivo = url('/_upload/convenio/convenio_'.$this->arquivo);
        return [
            'id_convenio' => $this->id_convenio,
            'nome' => trim($this->nome),
            'url' => trim($this->url),
            'arquivo' => $arquivo
        ];
    }
}
