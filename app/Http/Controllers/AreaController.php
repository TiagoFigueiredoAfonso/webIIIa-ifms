<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Area;

class AreaController extends Controller
{
    function lista() {
        $areas = DB::table('area')->get();
        return view('area.listagem',  compact('areas'),
      );
      }
      function novo() {
        $area = new Area();
        $area->id = 0;
        $area->descricao = "";
        return view('area.formulario', compact('area'));
      }
  
      function salvar(Request $request) {
          $id = $request->input('id');
          if ($id == 0) {
            $area = new Area();
            $area->descricao = $request->input('descricao');
            $area->save();
          } else {
            $area = Area::find($id);
            $area->descricao = $request->input('descricao');
            $area->save();
          }
          
          return redirect('area/lista');
      }
  
      function editar($id) {
        $area = Area::find($id);
        return view('area.formulario', compact('area'));
      }
  
      function excluir($id) {
        $area = Area::find($id);
        $area->delete();
        return redirect('area/lista');
  
      }
  
      function url() {
        var_dump(url('area/salvar'));
      }
}
