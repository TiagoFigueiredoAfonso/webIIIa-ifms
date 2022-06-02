<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Empresa;
use App\Models\Area;

class EmpresaController extends Controller
{
    function lista() {
        $empresas = Empresa::all();
        return view('empresa.listagem', compact('empresas'));
      }
  
      function novo() {
        $empresa = new Empresa();
        $empresa->id = 0;        
        $areas = Area::all();
        return view('empresa.formulario', compact('empresa', 'areas'));
      }
  
      function salvar(Request $request) {
        $validator = Validator::make($request->all(), [
          'nome' => 'required|max:100',
          'endereco' => 'required|max:100',
          
          'arquivo' => 'image',
      ], [
        'required' => '*O :attribute é requerido.',
        'image' => 'Não é um arquivo de imagem',       
        'max'=> 'Tamanho máximo de :max',
      ]);

        if ($validator->fails()) {
        if ($request->input('id')==0) {
          return redirect('empresa/novo')
                  ->withErrors($validator)
                  ->withInput();

        } else {
          return redirect()
                  ->route('empresa/editar', ['id' => $request->input('id')])
                  ->withErrors($validator)
                  ->withInput();
        }
        }

        $id = $request->input('id');
        if ($id == 0) {
          $empresa = new Empresa();
        } else {
          $empresa = Empresa::find($id);
        }
        $empresa->imagem = $request->input('imagem');
        if ($request->hasFile('arquivo')) {
        $path = $request->arquivo->store('public/imagens');
        $path = explode('/', $path);
        $len = count($path);
        $empresa->imagem = $path[$len-1];
        }
        $empresa->nome = $request->input('nome');
        $empresa->endereco = $request->input('endereco');        
        $empresa->area_id = $request->input('area_id');
        $empresa->save();
        return redirect('empresa/lista');
      }
  
      function editar($id) {
        $empresa = Empresa::find($id);
        $areas = Area::all();
        return view('empresa.formulario', compact('empresa', 'areas'));
      }
  
      function excluir($id) {
        $empresa = Empresa::find($id);
        $empresa->delete();
        return redirect('empresa/lista');
      }
}
