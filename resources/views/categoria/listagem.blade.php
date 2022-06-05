@extends('template')

@section('conteudo')
  <h1>Listagem de Categorias</h1>
  <a href="novo" class="btn btn-primary">Novo</a>
  <a href="relatorio" class="btn btn-primary">Relatório</a>
  <table class="table table-striped table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Imagem</th>
        <th scope="col">Descrição</th>
        
      </tr>
    </thead>
    <tbody>
      @foreach($categorias as $categoria)
          <tr>
            <td scope='row'>{{$categoria->id}}</td>
            <td>
              @if($categoria->imagem != "")
              <img src="/storage/imagens/{{$categoria->imagem}}" style="width:40px">
              @endif
            </td>
            <td>{{$categoria->descricao}}</td>
            <td>
              <a href='editar/{{$categoria->id}}' class='btn btn-primary'>+</a>
              <a href='excluir/{{$categoria->id}}' class='btn btn-danger'>-</a>
            </td>
          </tr>
        @endforeach
    </tbody>
  </table>
@endsection
