<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Noticia;
use App\Models\Categoria;


class NoticiaController extends Controller
{
    //
    function lista() {
      $noticias = Noticia::all();
      return view('noticia.listagem', compact('noticias'));
    }

    function novo() {
      $noticia = new Noticia();
      $noticia->id = 0;
      $noticia->data = now();
      $categorias = Categoria::all();
      return view('noticia.formulario', compact('noticia', 'categorias'));
    }

    function salvar(Request $request) {
      $id = $request->input('id');
      if ($id == 0) {
        $noticia = new Noticia();
      } else {
        $noticia = Noticia::find($id);
      }
      $noticia->titulo = $request->input('titulo');
      $noticia->descricao = $request->input('descricao');
      $noticia->data = $request->input('data');
      $noticia->autor = $request->input('autor');
      $noticia->categoria_id = $request->input('categoria_id');
      $noticia->save();
      return redirect('noticia/lista');
    }

    function editar($id) {
      $noticia = Noticia::find($id);
      $categorias = Categoria::all();
      return view('noticia.formulario', compact('noticia', 'categorias'));
    }

    function excluir($id) {
      $noticia = Noticia::find($id);
      $noticia->delete();
      return redirect('noticia/lista');
    }

}
