@extends('template')

@section('conteudo')
  @if (session('mensagem'))
    <div class="alert alert-success">
      {{session('mensagem')}}
    </div>
  @endif

  <h1>Listagem de Usuários</h1>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($users as $user)
          <tr>
            <td scope='row'>{{$user->id}}</td>
            <td scope='row'>{{$user->name}}</td>
            <td scope='row'>{{$user->email}}</td>
            <td>
              <a href='mensagem/{{$user->id}}' class='btn btn-primary'>Mensagem</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>  
@endsection