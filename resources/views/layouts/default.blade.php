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

    <header class="p-3 text-bg-dark">
        <div class="container">
          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
              <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"></use></svg>
            </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li><a href="{{ route('layout.home') }}" class="nav-link px-2 text-secondary">Home</a></li>
              <li><a href="#" class="nav-link px-2 text-white"></a></li>
              <li><a href="#" class="nav-link px-2 text-white">Cadastros</a></li>
              <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
              <li>

                    <div class="btn-group">
                     <button type="button" class="btn btn-dark">ADMIN</button>
                     <button type="button" class="btn btn-dark dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="visually-hidden">Toggle Dropdown</span>
                      </button>
                         <ul class="dropdown-menu">
                               <li><a href="{{ route('admin.all')}}" class="dropdown-item" href="#">Clientes</a></li>
                               <li><a class="dropdown-item" href="{{ route('recargas.all') }}">Operadores de clientes</a></li>
                               <li><a class="dropdown-item" href="#">Pendentes</a></li>
                               <li><hr class="dropdown-divider"></li>
                             <li><a class="dropdown-item" href="#">Config</a></li>
                                </ul>
                        </div>
                </li>
            </ul>

            <button type="button" class="btn btn-dark position-relative mb-lg-0 me-lg-5  ">
                Clientes cadastrados
                <span class=" position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    32
                  <span class="visually-hidden">unread messages</span>
                </span>
              </button>

            <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
              <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Search..." aria-label="Search">
            </form>

            <div class="text-end">
              <button type="button" class="btn btn-outline-light me-2">Login</button>
              <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
          </div>
        </div>
      </header>
          @yield('content')





      <footer >

      </footer>

      <script src="/js/bootstrap.bundle.min.js">  </script>
</body>
</html>
