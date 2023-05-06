<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;

use App\Models\User;
use App\Models\Legado\Usuario;

use App\Models\Posts;
use App\Models\Legado\Noticia;

class CopyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // deleta todos os users da base;
        User::truncate();
        //copy users
        $usuarios = Usuario::all()->toArray();
        foreach ($usuarios as $usuario) {
            User::create([
                'name' => $usuario['nome'],
                'email' => $usuario['email'],
                'password' => $usuario['senha'],
            ]);
        }

        return Usuario::all();
    }

    public function posts()
    {
        // deleta todos os users da base;
        Posts::truncate();
        //copy posts
        $noticias = Noticia::all()->toArray();
        foreach ($noticias as $noticia) {
            Posts::create([
                'title' => $noticia['titulo'],
                'slug' => Str::slug($noticia['titulo'], '-'),
                'video' => $noticia['video'],
                'description' => $noticia['resumo'],
                'content' => $noticia['texto'],
                'source_name' => $noticia['nome_fonte'],
                'source_url' => $noticia['url_fonte'],
                'created_at' => $noticia['data_noticia'],
                'updated_at' => $noticia['data_noticia']
            ]);
        }

        return Posts::all();
    }    

}
