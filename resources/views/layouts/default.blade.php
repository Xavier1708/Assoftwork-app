<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta
        name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta
        http-equiv="X-UA-Compatible"
        content="ie=edge"
    >
    <title>APP</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css" >
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>

    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
          <a href="/" class="d-flex align-items-center col-md-3 mb-2 mb-md-0 text-dark text-decoration-none">
            <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
          </a>

          <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <li><a href="{{ route('layout.home') }}" class="nav-link px-2 link-secondary">Inicio</a></li>
            <li><a  href="{{ route('layout.admin') }}" class="  nav-link px-2 link-dark">Servicos</a></li>
            <li><a  href="{{ route('layout.admin') }}" class="  nav-link px-2 link-dark">Sobre</a></li>
            @auth

            <li><a href="{{ route('admin.all')}}" class="nav-link px-2 link-dark">Clientes</a></li>
            <li><a href="{{ route('recargas.all') }}" class="nav-link px-2 link-dark">Numeros</a></li>
            <li><a href="#" class="nav-link px-2 link-dark">Sistema</a></li>
            <!--AQUI VAMOS FAZER O LOGOUT-->
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <a href="/logout" class="btn btn-outline-primary me-2 space" onclick = "event.preventDefault();
                    this.closest('form').submit();">
                    Sair
                    </a>
                </form>
            </li>
            @endauth
          </ul>

          <!--QUANDO ESTIVERMOS LOGADO, ESTE SERA O  MENU APRESENTADO-->

          <!--RETIRAR O LOGIN E REGUISTER QUANDO ESTIVERMOS LOGADOS-->
          @guest
          <div class="col-md-3 text-end">
            <a  class="btn btn-outline-primary me-2" href="/login">Login</a>
            <a  class="btn btn-primary" href="/register">Sign-up</a>
          </div>
          @endguest
        </header>
      </div>


          @yield('content')



      <footer >

      </footer>

      <script src="/js/bootstrap.bundle.min.js">  </script>
</body>
</html>
