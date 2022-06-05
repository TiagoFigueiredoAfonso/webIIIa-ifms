<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem de Categorias</title>
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
    <h1>Listagem de Categorias</h1>
    <table>
        <thead>
            <tr>
                <th>#</th>                
                <th>Imagem</th>
                <th>Descrição</th>
             </tr>
             <tbody>
                @foreach ($categorias as $categoria)
                <tr>
                     <td>{{$categoria->id}}</td>
                    <td>
                        @if($categoria->imagem != "")
                        <img src='{{storage_path("app/public/imagens/$categoria->imagem")}}' style="width: 40px">
                        @endif
                    </td>
                    
                    <td>{{$categoria->descricao}}</td>
                </tr>
          @endforeach
             </tbody>   
    </table>
</body>
</html>