<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use App\Models\Noticia;
use App\Models\Convenio;
use App\Models\Categoria;
use App\Models\Convencao;
use App\Models\Video;
use App\Http\Resources\NoticiaResumoResource;
use App\Http\Resources\ConvenioResumoResource;
use App\Http\Resources\ConvencaoResumoResource;
use App\Http\Resources\VideosResumoResource;

class HomeController extends Controller
{
    public function __invoke(Request $request)
    {
        try {

            $noticias = $this->getNoticias(6);
            $convencoes = $this->getUltimasConvencoes();
            $convenios = $this->getConvenios();
            $videos = $this->getUltimosVideos(1);

            return compact(
                'noticias',
                'convencoes',
                'convenios',
                'videos'
            );

        } catch(\Exception $e) {
            Log::critical($e->getMessage());
            Log::critical($e->getTraceAsString());
        }
    }

    private function getNoticias(int $qtd)
    {
        $noticiasList = Noticia::select(
            'id_noticia',
            'titulo',
            'data_noticia',
            'resumo'
        )
        ->with('fotos')
        ->orderBy('id_noticia', 'desc')
        ->take($qtd)
        ->get();

        return NoticiaResumoResource::collection($noticiasList);
    }

    private function getUltimasConvencoes()
    {
        $resultado = [];
        $categorias = Categoria::all();
        foreach ($categorias as $categoria) {
            $resultado[] = ConvencaoResumoResource::collection(
                Convencao::where('id_categoria', '=', $categoria->id_categoria)
                     ->orderBy('data_base', 'desc')
                     ->with('categoria')
                     ->take(1)
                     ->get()
            );
        }
        return $resultado;
    }

    private function getConvenios()
    {
        return ConvenioResumoResource::collection(Convenio::select(
            'id_convenio',
            'arquivo',
            'nome',
            'url'
        )
        ->get());
    }

    private function getUltimosVideos(int $qtd)
    {
        return VideosResumoResource::collection(Video::take($qtd)->orderBy('id_video', 'desc')->get());
    }
}
