<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Exercicio com Laravel</title>
  <!-- Scripts -->
  @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

  <nav class="navbar navbar-expand-lg bg-light" style="font-size:20px">
    <div class="container-md">
      <a class="navbar-brand" style="font-size:25px" href="/">Inicio</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="autor" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Autor
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/autor">Consulta</a></li>
              <li><a class="dropdown-item" href="/autor/create">Incluir</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="editoras" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Editora
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/editoras">Consulta</a></li>
              <li><a class="dropdown-item" href="/editoras/create">Incluir</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="livros" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Livro
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="/livros">Consulta</a></li>
              <li><a class="dropdown-item" href="/livros/create">Incluir</a></li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    @yield('content')
  </div>  
</body>
</html>