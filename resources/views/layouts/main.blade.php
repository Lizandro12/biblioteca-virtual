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
</head>
<body>
    <header>
        <div class="header-top">
            <div class="navbar-logo">
                <img src="/img/logotipo.png" alt="Logo">
            </div>
            <div class="navbar-search d-flex">
                <input type="text" placeholder="Procure por um livro..." class="form-control">
                <button class="btn btn-orange"><i class="bi bi-search"></i></button>
            </div>
            <div class="navbar-buttons d-flex">
                <a href="/login"><button class="btn--dif">Entrar</button></a>
                <a href="/register"><button class="btn--dif">Cadastrar</button></a>
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
                            <a class="nav-link" href="/search" >Livros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/authorpage" >Autores</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/categorypage" >Categorias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" >Blog</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link"><i class="bi-cart3"></i></a>
                        </li>
                    </ul>
            </div>
            </nav>
        </div>
    </header>
    @yield('content')
</body>
</html>
