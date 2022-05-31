@extends('template')

@section('conteudo')
  <form class="container" action="{{url('noticia/salvar')}}" method="post">
     @csrf
    <h1>Cadastro de Notícia</h1>
    <div class="form-group">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control" id="id" name="id" value="{{$noticia->id}}">
    </div>
    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control" id="titulo" name="titulo" value="{{$noticia->titulo}}">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
  <input type="text" class="form-control" id="titulo" name="descricao" value="{{$noticia->descricao}}">
    </div>
    <div class="form-group">
      <label for="data">Data</label>
      <input type="date" class="form-control" id="data" name="data" value="{{$noticia->data->format('Y-m-d')}}">
    </div>
    <div class="form-group">
      <label for="autor">Autor</label>
      <input type="text" class="form-control" id="autor" name="autor" value="{{$noticia->autor}}">
    </div>
    <div class="form-group">
      <label for="categoria_id">Categoria</label>
      <select class="form-select" name="categoria_id">
        @foreach ($categorias as $categoria)
          <option value="{{$categoria->id}}" {{$categoria->id == $noticia->categoria_id?'selected':''}}>{{$categoria->descricao}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Gravar</button>
  </form>
@endsection
