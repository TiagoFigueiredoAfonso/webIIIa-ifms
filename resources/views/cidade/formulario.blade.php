@extends('template')

@section('conteudo')
 
  <form class="container" action="{{url('cidade/salvar')}}" method="post">
     @csrf
    <h2>Cadastro de Cidades</h2>
    <div class="form-group">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control" id="id" name="id" value="{{$cidade->id}}">
    </div>

    @error('title')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{old('nome', $cidade->nome)}}">
      @error('nome')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-outline-primary mt-2">Salvar</button>
  </form>
@endsection
