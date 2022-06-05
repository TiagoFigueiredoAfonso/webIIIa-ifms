<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MensagemUsuario extends Mailable
{
    use Queueable, SerializesModels;
    public $mensagem;
    public $usuario;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($mensagem, $usuario)
    {
        $this->mensagem = $mensagem;
        $this->usuario = $usuario;
    }
  

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('usuario.mensagem');
    }
}
