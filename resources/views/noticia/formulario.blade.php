@extends('template')

@section('conteudo')
  
  <form class="container" action="{{url('noticia/salvar')}}" method="post" enctype="multipart/form-data">
     @csrf

     <input type="hidden" class="form-control" id="imagem" name="imagem" value={{$noticia->imagem}}>

     @if($noticia->imagem != "")
      <img src="/storage/imagens/{{$noticia->imagem}}" style="width:40px">
      @endif

    <h1>Cadastro de Notícia</h1>
    <div class="form-group">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control" id="id" name="id" value="{{$noticia->id}}">
    </div>


    @error('title')
        <div class="text-danger">{{ $message }}</div>
    @enderror


    <div class="form-group">
      <label for="titulo">Título</label>
      <input type="text" class="form-control @error('titulo') is-invalid @enderror" id="titulo" name="titulo" value="{{old('titulo', $noticia->titulo)}}">
      @error('titulo')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
  <input type="text" class="form-control" id="titulo" name="descricao" value="{{old('descricao', $noticia->descricao)}}">
    </div>
    <div class="form-group">
      <label for="data">Data</label>
      <input type="date" class="form-control @error('data') is-invalid @enderror" id="data" name="data" value="{{old('data', $noticia->data->format('Y-m-d'))}}">
      @error('data')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="autor">Autor</label>
      <input type="text" class="form-control" id="autor" name="autor" value="{{$noticia->autor}}">
    </div>
    <div class="form-group">
      <label for="categoria_id">Categoria</label>
      <select class="form-select @error('categoria_id') is-invalid @enderror" name="categoria_id">
        @foreach ($categorias as $categoria)
          <option value="{{$categoria->id}}" {{$categoria->id == $noticia->categoria_id?'selected':''}}>{{$categoria->descricao}}</option>
        @endforeach
      </select>
      @error('categoria_id')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="arquivo">Imagem</label>      
      <input type="file" class="form-control @error('arquivo') is-invalid @enderror" id="arquivo" name="arquivo">
      @error('arquivo')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Gravar</button>
  </form>
@endsection
