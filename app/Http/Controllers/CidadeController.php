<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Cidade;


class CidadeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function lista() {
        $cidades = DB::table('cidade')->get();
        return view('cidade.listagem',  compact('cidades'),
      );
      }
      function novo() {
        $cidade = new Cidade();
        $cidade->id = 0;
        $cidade->nome = "";
        return view('cidade.formulario', compact('cidade'));
      }
      function salvar(Request $request) {
        $validator = Validator::make($request->all(), [
          'nome' => 'required|max:30',         
          
      ], [
        'required' => '*O :attribute é requerido.',              
        'max'=> 'Tamanho máximo de :max',
      ]);

        if ($validator->fails()) {
        if ($request->input('id')==0) {
          return redirect('cidade/novo')
                  ->withErrors($validator)
                  ->withInput();

        } else {
          return redirect()
                  ->route('cidade/editar', ['id' => $request->input('id')])
                  ->withErrors($validator)
                  ->withInput();
        }
        }
        $id = $request->input('id');
        if ($id == 0) {
          $cidade = new Cidade();
          $cidade->nome = $request->input('nome');
          $cidade->save();
        } else {
          $cidade = Cidade::find($id);
          $cidade->nome = $request->input('nome');
          $cidade->save();
        }
        
        return redirect('cidade/lista');
      }
      function editar($id) {
        $cidade = Cidade::find($id);
        return view('cidade.formulario', compact('cidade'));
      }
      function excluir($id) {
        $cidade = Cidade::find($id);
        $cidade->delete();
        return redirect('cidade/lista');
  
      }
      function url() {
        var_dump(url('cidade/salvar'));
      }
}
