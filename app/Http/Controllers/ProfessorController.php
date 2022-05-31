<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Professor;

class ProfessorController extends Controller
{
    //
    function lista() {
      $professores = DB::select('SELECT professor.*, area.descricao as area_descricao FROM professor LEFT JOIN area ON area.id=professor.area_id ORDER BY professor.nome');
      return view('listagemProfessor',
      ['professores'=> $professores]);
    }

    function novo() {
      return view('formularioProfessor');
    }

    function salvar(Request $request) {
      $professor = new Professor();
      $professor->nome = $request->input('nome');
      $professor->email = $request->input('email');
      $professor->fone = $request->input('fone');
      $professor->area_id = $request->input('area_id');
      $professor->save();
      return redirect('professor/lista');
    }
}
