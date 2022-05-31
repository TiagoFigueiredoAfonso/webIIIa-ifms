@extends('template')

@section('conteudo')
  <form class="container" action="{{url('area/salvar')}}" method="post">
     @csrf
    <h1>Cadastro de Áreas</h1>
    <div class="form-group">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control" id="id" name="id" value="{{$area->id}}">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" id="descricao" name="descricao" value="{{$area->descricao}}">
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
  </form>
@endsection
