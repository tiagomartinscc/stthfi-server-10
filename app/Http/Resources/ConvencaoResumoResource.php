<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ConvencaoResumoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id_convencao' => $this->id_convencao,
            'id_categoria' => $this->id_categoria,
            'nome_categoria' => $this->categoria->nome_abrev,
            'convencao_pdf' => $this->toUrl($this->convencao_pdf, 'convencao-pdf'),
            'convencao_zip' => $this->toUrl($this->convencao_zip, 'convencao-zip'),
            'convencao_cir' => $this->toUrl($this->convencao_cir, 'convencao-cir'),
            'convencao_ta' => $this->toUrl($this->convencao_ta, 'convencao-ta'),
        ];
    }

    private function toUrl($component, $tipo) {
        if (empty($component)) {
            return '';
        }
        return url('_upload/'.$tipo.'_'.$component);
    }
}
