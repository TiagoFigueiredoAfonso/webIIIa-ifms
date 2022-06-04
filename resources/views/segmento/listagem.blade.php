@extends('template')

@section('conteudo')
  <h2>Lista de Segmentos</h2>
  
  <table class="table table-bordered table-hover mt-4">
    <thead>
      <tr class="table-info">
        <th scope="col">Nº</th>
        <th scope="col">Nome</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      @foreach($segmentos as $segmento)
          <tr>
            <td scope='row'>{{$segmento->id}}</td>
            <td>{{$segmento->nome}}</td>
            <td>
              <a href='editar/{{$segmento->id}}' class='btn btn-primary'>+</a>
              <a href='excluir/{{$segmento->id}}' class='btn btn-danger'>-</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
  <a href="novo" class="btn btn-outline-primary">Novo</a>
@endsection
