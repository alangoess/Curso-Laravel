<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yeld('title')</title>
        <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    
</head>
<body>

   <ul id='dropdown1' class='dropdown-content'>
    @foreach($categoriasMenu as $categoriaM) <!-- Pega um dado do loop categoriasMenu -->
    <li><a href="{{route('site.categoria', $categoriaM->id)}}">{{$categoriaM->nome}}</a></li> <!-- o dropdown exibe  -->
    @endforeach
 

  </ul>

    <nav>
    <div class="nav-wrapper container">
      <a href="#" class="brand-logo center">Curso</a>
      <ul id="nav-mobile" class="left">
        <li><a href="{{route('site.index')}}">Home</a></li> <!--direciona para a pagina principal-->
        <li><a href="">Carrinho</a></li>
        <li><a href="" class="dropdown-trigger" data-target='dropdown1'>Categorias <i class="material-icons right">expand_more</i></a></li>
      </ul>
    </div>
  </nav>

    @yield('conteudo')
   <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script>
    /* Dropdown */
  var elemDrop = document.querySelectorAll('.dropdown-trigger');
  var instanceDrop = M.Dropdown.init(elemDrop, {
    coverTrigger: false,
    constrainWidth: false
  });
    </script>
            
</body>
</html>