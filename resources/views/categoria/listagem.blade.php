@extends('template')

@section('conteudo')
  <h1>Listagem de Áreas</h1>
  <a href="novo" class="btn btn-primary">Novo</a>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Descrição</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($areas as $area)
          <tr>
            <td scope='row'>{{$area->id}}</td>
            <td>{{$area->descricao}}</td>
            <td>
              <a href='editar/{{$area->id}}' class='btn btn-primary'>+</a>
              <a href='excluir/{{$area->id}}' class='btn btn-danger'>-</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
