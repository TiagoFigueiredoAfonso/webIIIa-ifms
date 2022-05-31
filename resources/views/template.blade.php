<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Consórcio MS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">



    <!-- Bootstrap core CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* Show it is fixed to the top */
      body {
        min-height: 75rem;
        padding-top: 4.5rem;
        background:url(https://tributarionosbastidores.com.br/wp-content/uploads/2022/02/empresa-inativa.jpg);
        background-repeat: no-repeat;
        background-size: 100%;
      }
      h1, h2, #titulo{
        text-align: center;        
      }
    

    </style>
  </head>
  <body>

<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-info">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Consórcio MS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('empresa/lista')}}">Empresa</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{url('area/lista')}}">Área</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  <div class="bg-light p-5 rounded">
    @yield('conteudo')
  </div>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>
