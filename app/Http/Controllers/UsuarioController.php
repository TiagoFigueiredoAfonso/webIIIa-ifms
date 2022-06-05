<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\MensagemUsuario;
use Illuminate\Support\Facades\Mail;

class UsuarioController extends Controller
{
    function lista() {
        $users = User::all();
        return view('usuario.listagem', compact('users'));
    }

    function mensagem($usuario_id) {
        $usuario = User::find($usuario_id);
        return view("usuario.form_mensagem", compact('usuario'));
      }

    function send_mensagem(Request $request) {
    $usuario_id = $request->input('id');
    $usuario = User::find($usuario_id);
    $assunto = $request->input('assunto');
    $mensagem = $request->input('mensagem');

    Mail::to($usuario->email)
    ->send(new MensagemUsuario($mensagem, $usuario->name));

    return redirect('usuario/lista');

    }
}
