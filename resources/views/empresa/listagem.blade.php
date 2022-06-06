@extends ('template')

@section('conteudo')
<h2>Listagem de Empresas</h2>

<table class="table table-bordered table-hover mt-4">
  <thead>
    <tr class="table-info">
      <th scope="col">Nº</th>
      <th scope="col">Imagem</th>
      <th scope="col">Nome</th>
      <th scope="col">Endereço</th>
      <th scope="col">Área</th>      
      <th scope="col">Segmento</th>  
      <th scope="col">Cidade</th>      
      <th scope="col">Editar</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($empresas as $empresa)
      <tr>
        <td scope='row'>{{$empresa->id}}</td>
        <td>
            @if($empresa->imagem != "")
            <img src="/storage/imagens/{{$empresa->imagem}}" style="width:40px">
            @endif
        </td>
        <td>{{$empresa->nome}}</td>        
        <td>{{$empresa->endereco}}</td>
        <td>{{$empresa->area->descricao}}</td>        
        <td>{{$empresa->segmento->nome}}</td>
        <td>{{$empresa->cidade->nome}}</td>
        <td>
          <a href='editar/{{$empresa->id}}' class='btn btn-primary'>+</a>
          <a href='excluir/{{$empresa->id}}' class='btn btn-danger'>-</a>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $empresas->links() }}
<a href="novo" class="btn btn-outline-primary">Novo</a>
<a href="relatorio" class="btn btn-outline-primary">Relatório</a>

@endsection
