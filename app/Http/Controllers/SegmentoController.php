<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Segmento;

class SegmentoController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    function lista() {
        $segmentos = DB::table('segmento')->get();
        return view('segmento.listagem',  compact('segmentos'),
      );
      }
        function novo() {
            $segmento = new Segmento();
            $segmento->id = 0;
            $segmento->nome = "";
            return view('segmento.formulario', compact('segmento'));
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
                return redirect('segmento/novo')
                        ->withErrors($validator)
                        ->withInput();
      
              } else {
                return redirect()
                        ->route('segmento/editar', ['id' => $request->input('id')])
                        ->withErrors($validator)
                        ->withInput();
              }
              }
            $id = $request->input('id');
            if ($id == 0) {
                $segmento = new Segmento();
                $segmento->nome = $request->input('nome');
                $segmento->save();
            } else {
                $segmento = Segmento::find($id);
                $segmento->nome = $request->input('nome');
                $segmento->save();
            }
            
            return redirect('segmento/lista');
        }
        function editar($id) {
            $segmento = Segmento::find($id);
            return view('segmento.formulario', compact('segmento'));
        }
        function excluir($id) {
            $segmento = Segmento::find($id);
            $segmento->delete();
            return redirect('segmento/lista');
      
        }
        function url() {
            var_dump(url('segmento/salvar'));
        }
}
