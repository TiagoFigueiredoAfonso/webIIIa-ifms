<?php

namespace App\Http\Controllers;

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
        $id = $request->input('id');
        if ($id == 0) {
          $empresa = new Empresa();
        } else {
          $empresa = Empresa::find($id);
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
