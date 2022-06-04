@extends('template')

@section('conteudo')

  
  <form class="container" action="{{url('empresa/salvar')}}" method="post" enctype="multipart/form-data">
     @csrf
     <input type="hidden" class="form-control" id="imagem" name="imagem" value={{$empresa->imagem}}>
    <h2>Cadastro de Empresas</h2>
    <div class="form-group ">
      <label for="Id">ID</label>
      <input readonly type="text" class="form-control " id="id" name="id" value="{{$empresa->id}}">
      
    </div>
    <div class="form-group">
      <label for="arquivo">Imagem</label>      
      <input type="file" class="form-control @error('arquivo') is-invalid @enderror" id="arquivo" name="arquivo">
      @error('arquivo')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>

    @error('title')
        <div class="text-danger">{{ $message }}</div>
    @enderror

    <div class="form-group">
      <label for="nome">Nome</label>
      <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome" value="{{$empresa->nome}}">
      @error('nome')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="endereco">Endereço</label>
  <input type="text" class="form-control @error('endereco') is-invalid @enderror" id="endereco" name="endereco" value="{{$empresa->endereco}}">
       @error('endereco')
            <div class="text-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
      <label for="area_id">Área</label>
      <select class="form-select" name="area_id">
        @foreach ($areas as $area)
          <option value="{{$area->id}}" {{$area->id == $empresa->area_id?'selected':''}}>{{$area->descricao}}</option>
        @endforeach
      </select>
    </div> 

    <div class="form-group">
      <label for="segmento_id">Segmento</label>
      <select class="form-select" name="segmento_id">
        @foreach ($segmentos as $segmento)
          <option value="{{$segmento->id}}" {{$segmento->id == $empresa->segmento_id?'selected':''}}>{{$segmento->nome}}</option>
        @endforeach
      </select>
    </div>
    
    <div class="form-group">
      <label for="cidade_id">Cidade</label>
      <select class="form-select" name="cidade_id">
        @foreach ($cidades as $cidade)
          <option value="{{$cidade->id}}" {{$cidade->id == $empresa->cidade_id?'selected':''}}>{{$cidade->nome}}</option>
        @endforeach
      </select>
    </div>
    
  
    <button type="submit" class="btn btn-outline-primary mt-2">Salvar</button>
  </form>
@endsection
