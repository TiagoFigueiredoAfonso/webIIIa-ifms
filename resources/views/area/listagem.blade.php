@extends('template')

@section('conteudo')
  <h2>Listagem de Áreas</h2>
  
  <table class="table table-bordered table-hover mt-4">
    <thead>
      <tr class="table-info">
        <th scope="col">Nº</th>
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
  <a href="novo" class="btn btn-outline-primary">Novo</a>
@endsection
