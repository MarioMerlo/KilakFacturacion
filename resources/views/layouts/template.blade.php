<!doctype html>
<html class="h-100" lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kilak Facturador</title>
    <link rel="shortcut icon" href="{{asset('img/isotipo.png')}}">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sticky-footer-navbar/">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}"">
  </head>
  <body class="d-flex flex-column h-100">
  
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="{{asset('img/kilak-logo.png')}}" alt="Kilak Design Studio">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ingresos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Egresos</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Contactos
              </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">Listar</a></li>
                <li><a class="dropdown-item" href="#">Alta</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <main class="flex-shrink-0">
      <div class="container">
        <h1>@yield('h1')</h1>
        @yield('content')
      </div>
    </main>

    <footer class="footer mt-auto p-3 bg-dark">
      <div class="container text-light text-end">
        Copyright Kilak 2024 <i class="bi bi-globe"></i> <a href="https://kilak.com">kilak.com</a>
      </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>