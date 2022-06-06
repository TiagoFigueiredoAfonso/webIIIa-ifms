<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Empresas</title>
    <style>
      table, h1 {
        width: 90%;
        margin: 0 auto;
      }
      table {
        border-collapse: collapse;
      }
      td, th {
        border: 1px solid black;
        padding: 0.25rem;
        font-size: 1.25rem;
      }
    </style>
</head>
<body>
    <h1>Listagem de Empresas</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>                
                <th>Imagem</th>
                <th>Nome</th>
                <th>Endereço</th>
                <th>Área</th>
                <th>Segmento</th>
                <th>Cidade</th>
             </tr>
             <tbody>
                @foreach ($empresas as $empresa)
                <tr>
                     <td>{{$empresa->id}}</td>
                    <td>
                        @if($empresa->imagem != "")
                        <img src='{{storage_path("app/public/imagens/$empresa->imagem")}}' style="width: 40px">
                        @endif
                    </td>
                    
                    <td>{{$empresa->nome}}</td>
                    <td>{{$empresa->endereco}}</td>
                    <td>{{$empresa->area->descricao}}</td>
                    <td>{{$empresa->segmento->nome}}</td>
                    <td>{{$empresa->cidade->nome}}</td>
                </tr>
          @endforeach
             </tbody>   
    </table>
</body>
</html>