@extends('template')

@section('conteudo')
  <h2>Listagem de Cidades</h2>
  
  <table class="table table-bordered table-hover mt-4">
    <thead>
      <tr class="table-info">
        <th scope="col">Nº</th>
        <th scope="col">Nome</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($cidades as $cidade)
          <tr>
            <td scope='row'>{{$cidade->id}}</td>
            <td>{{$cidade->nome}}</td>
            <td>
              <a href='editar/{{$cidade->id}}' class='btn btn-primary'>+</a>
              <a href='excluir/{{$cidade->id}}' class='btn btn-danger'>-</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  <a href="novo" class="btn btn-outline-primary">Novo</a>
@endsection
