<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
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
          $validator = Validator::make($request->all(), [
            'titulo' => 'required|max:100',
            'data' => 'required|date',
            'categoria_id' => 'required|exists:categoria,id',
            'arquivo' => 'image',
        ], [
          'required' => 'O :attribute é requerido.',
          'image' => 'Não é um arquivo de imagem',
          'date' => 'Não é uma data válida',
          'categoria_id.exists'=> 'Não foi encontrado na tabela categoria',
          'max'=> 'Tamanho máximo de :max'
        ]);

          if ($validator->fails()) {
          if ($request->input('id')==0) {
            return redirect('noticia/novo')
                    ->withErrors($validator)
                    ->withInput();

          } else {
            return redirect()
                    ->route('noticia/editar', ['id' => $request->input('id')])
                    ->withErrors($validator)
                    ->withInput();
          }
        }


      $id = $request->input('id');
      if ($id == 0) {
        $noticia = new Noticia();
      } else {
        $noticia = Noticia::find($id);
      }
      $noticia->imagem = $request->input('imagem');
      if ($request->hasFile('arquivo')) {
        $path = $request->arquivo->store('public/imagens');
        $path = explode('/', $path);
        $len = count($path);
        $noticia->imagem = $path[$len-1];
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
