@extends('template')

@section('conteudo')
  <form class="container" action="{{url('area/salvar')}}" method="post">
     @csrf
    <h2>Cadastro de Áreas</h2>
    <div class="form-group">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control" id="id" name="id" value="{{$area->id}}">
    </div>
    <div class="form-group">
      <label for="descricao">Descrição</label>
      <input type="text" class="form-control" id="descricao" name="descricao" value="{{$area->descricao}}">
    </div>
    <button type="submit" class="btn btn-outline-primary mt-2">Salvar</button>
  </form>
@endsection
