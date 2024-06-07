<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Font do google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/profile.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/books.css">
</head>
<body>
    <header>
        <div class="header-top">
            <div class="navbar-logo">
                <a href="{{ route('home')}}"><img src="/img/logotipo.png" alt="Logo"></a>
            </div>
            <form method="GET" action="{{ route('search.books') }}" class="navbar-search d-flex">
                <input type="text" placeholder="Procure por um livro..." class="form-control" name="search">
                <button class="btn btn-search-main" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="navbar-buttons d-flex">
            @if(!Auth::check())
                <a href="{{ route('login') }}"><button class="btn--dif">Entrar</button></a>
                <a href="/register"><button class="btn--dif">Cadastrar</button></a>
            @else
                <a href="{{ route('user.profile') }}"><button class="btn--dif">Meu Perfil</button></a>
            @endif
            </div>
        </div>
        <div class="header">
            <nav class="navbar navbar-expand-md navbar-light">
                <div class="container">
                    <ul class="navbar-nav ms-auto d-flex">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/search">Livros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/authorpage">Autores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/categorypage" >Categorias</a>
                        </li>
                    </ul>
            </div>
            </nav>
        </div>
    </header>
    <div class="yield-content--dif">
        @yield('content')
    </div>
    <div class="footer">
        <div class="foo">
            <div class="row">
                <div class="col-md-4">
                    <h3>Institucional</h3>
                    <a href="#"><p>Quem somos</p></a>
                    <a href="#"><p>Direitos Autorias</p></a>
                    <a href="#"><p>Blog</p></a>
                </div>
                <div class="col-md-4">
                    <h3>Ajuda</h3>
                    <p></p>
                </div>
                <div class="col-md-4">
                    <h3>Nossas Redes Sociais</h3>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-text">
            <p>© 2024 Universo Literário - Todos os direitos reservados</p>
        </div>
    </div>

        <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
