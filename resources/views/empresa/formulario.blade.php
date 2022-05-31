@extends('template')

@section('conteudo')
  <form class="container" action="{{url('empresa/salvar')}}" method="post">
     @csrf
    <h2>Cadastro de Empresas</h2>
    <div class="form-group ">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control" id="id" name="id" value="{{$empresa->id}}">
    </div>
    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control" id="nome" name="nome" value="{{$empresa->nome}}">
    </div>
    <div class="form-group">
      <label for="endereco">Endereço</label>
  <input type="text" class="form-control" id="endereco" name="endereco" value="{{$empresa->endereco}}">
   
    
    <div class="form-group">
      <label for="area_id">Área</label>
      <select class="form-select" name="area_id">
        @foreach ($areas as $area)
          <option value="{{$area->id}}" {{$area->id == $empresa->area_id?'selected':''}}>{{$area->descricao}}</option>
        @endforeach
      </select>
    </div>
    <button type="submit" class="btn btn-outline-primary mt-2">Salvar</button>
  </form>
@endsection
