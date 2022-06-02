@extends('template')

@section('conteudo')
  <form class="container" action="{{url('categoria/salvar')}}" method="post" enctype="multipart/form-data">
     @csrf
     <input type="hidden" class="form-control" id="imagem" name="imagem" value={{$categoria->imagem}}>
     
     @if($categoria->imagem != "")
      <img src="/storage/imagens/{{$categoria->imagem}}" style="width:40px">
      @endif

    <h1>Cadastro de Categoria</h1>
    <div class="form-group">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control" id="id" name="id" value="{{$categoria->id}}">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" id="descricao" name="descricao" value="{{$categoria->descricao}}">
    </div>
    <div class="form-group">
      <label for="arquivo">Imagem</label>      
      <input type="file" class="form-control" id="arquivo" name="arquivo">
    </div>
    <button type="submit" class="btn btn-primary">Gravar</button>
  </form>
@endsection
