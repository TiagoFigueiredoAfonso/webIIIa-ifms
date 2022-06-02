<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
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
        $validator = Validator::make($request->all(), [
          'descricao' => 'required|max:100',         
          'arquivo' => 'image',
      ], [
        'required' => '*A :attribute é requerida.',
        'image' => 'Não é um arquivo de imagem',       
        'max'=> 'Tamanho máximo de :max',
      ]);

        if ($validator->fails()) {
        if ($request->input('id')==0) {
          return redirect('area/novo')
                  ->withErrors($validator)
                  ->withInput();

        } else {
          return redirect()
                  ->route('area/editar', ['id' => $request->input('id')])
                  ->withErrors($validator)
                  ->withInput();
        }
        }

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
