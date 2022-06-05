@extends('template')

@section('conteudo')
  <form class="container" action="{{url('usuario/send_mensagem')}}" method="post">
     @csrf
     <input type="hidden" class="form-control" id="id" name="id" value="{{$usuario->id}}">
     <div class="form-group">
       <label for="email">E-mail</label>
       <input readonly type="text" class="form-control" id="email" name="email" value="{{$usuario->email}}">
     </div>
     <div class="form-group">
       <label for="name">Nome</label>
       <input readonly type="text" class="form-control" id="name" name="name" value="{{$usuario->name}}">
     </div>
    <div class="form-group">
      <label for="assunto">Assunto</label>
      <input type="text" class="form-control" id="assunto" name="assunto">
    </div>
    <div class="form-group">
      <label for="mensagem">Mensagem</label>
      <textarea class="form-control" id="mensagem" name="mensagem" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
@endsection