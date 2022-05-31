@extends ('template')

@section('conteudo')
<h1>Listagem de Notícias</h1>
<a href="novo" class="btn btn-primary">Novo</a>
<table class="table table-striped table-bordered ">
  <thead>
    <tr >
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Data</th>
      <th scope="col">Autor</th>
      <th scope="col">Categoria</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($noticias as $noticia)
      <tr>
        <td scope='row'>{{$noticia->id}}</td>
        <td>{{$noticia->titulo}}</td>
        <td>{{$noticia->data->format('d/m/Y')}}</td>
        <td>{{$noticia->autor}}</td>
        <td>{{$noticia->categoria->descricao}}</td>
        <td>
          <a href='editar/{{$noticia->id}}' class='btn btn-primary'>+</a>
          <a href='excluir/{{$noticia->id}}' class='btn btn-danger'>-</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
@endsection
