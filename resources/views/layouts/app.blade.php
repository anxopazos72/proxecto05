<!DOCTYPE html>
<html lang="gl">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Anxo Pazos">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('titulo')</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/ekko-lightbox.css" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!-- Barra de navegación -->
  <?php $ruta= explode('/', url()->current()); ?>
  
  <nav class="navbar navbar-expand-sm navbar-dark bg-success">
    <div class="container">
      <a href="/" class="navbar-brand">Electrodomésticos Pazos</a>
      <button class="navbar-toggler" data-toggle="collapse" data-target="#barNavega"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="barNavega">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item {{$ruta[3] == 'home' ? 'active' : ''}}">
            <a href="/home" class="nav-link">Comezo</a>
          </li>
          <li class="nav-item {{$ruta[3] == 'nos' ? 'active' : ''}}">
            <a href="/nos" class="nav-link">Sobre nós</a>
          </li>
          <li class="nav-item {{$ruta[3] == 'produtos' ? 'active' : ''}}">
            <a href="/produtos" class="nav-link">Produtos</a>
          </li>
          <li class="nav-item {{$ruta[3] == 'contacto' ? 'active' : ''}}">
            <a href="/contacto" class="nav-link">Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  @yield('contido')
 
   <footer id="pe" class="bg-success text-white text-center p-4">
    <div class="container">
      <div class="row">
        <div class="col">
          <p>Copyright 2020 &copy; Electrodomésticos Pazos</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/ekko-lightbox.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
