<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <!-- CSS no swiper -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/home.css">
    <script src="/js/home.js"></script>



</head>
<body >

<nav class="navbar">
    <div class="navbar-logo">
        <a href=""><img src="/img/logotipo.png" alt="Logo"></a>
    </div>
    <div class="navbar-search">
        <input style="background-color:#DFDFDF"type="text" placeholder="">
        <button class="btn btn-orange">
            <i class="fas fa-search"></i>
        </button>
    </div>
    <div class="navbar-buttons">
        <a href="/login"><button class="btn1">Entrar</button></a>
        <a href="/cadastrar"><button class="btn2">Cadastrar</button></a>
    </div>
</nav>

<div class="header">
    <nav class="navbar navbar-expand-md navbar-light bg-dark">
        <div class="container">
            <ul class="navbar-nav ms-auto">
                < class="nav-item">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Livros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Autores</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Categorias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white;">Blog</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"><i class="bi-cart3" style="color: white;"></i></a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<div class="section">
    <div class="background-image">
        <h1>Descubra Novos Livros</h1>
        <a href="#" class="btn">Começar Agora</a>
    </div>
</div>
    <div class="row">
    <h3>Livros Mais Comprados</h3>
  <div class="swiper-container">
    <div class="swiper-wrapper">
    <div class="col-sm-3">
        <div class="swiper-slide">
        <div class="card">
            <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Ler livro</a>
        </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="swiper-slide">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Ler livro</a>
        </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="swiper-slide">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Ler livro</a>
        </div>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="swiper-slide">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Ler livro</a>
        </div>
        </div>
    </div>
        </div>
        </div>
    <!-- Outros livros mais lidos aqui -->
    </div>
    <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
    </div>
    </div>
    <section>
    <div class="row">
    <h3>Principais Autores</h3>
    <p> Autores mais lidos e vendidos no Universo Literário</p>
    <div class="swiper-container">
     <div class="swiper-wrapper">
         <div class="col-sm-3">
           <div class="swiper-slide">
                <img src="img/autores.png" alt="Autor 1">
            </div>
          </div>
         <div class="col-sm-3">
           <div class="swiper-slide">
                <img src="img/autores.png" alt="Autor 1">
            </div>
          </div>
        <div class="col-sm-3">
            <div class="swiper-slide">
                <img src="img/autores.png" alt="Autor 1">
            </div>
        </div>
        <div class="col-sm-3">
            <div class="swiper-slide">
              <img src="img/autores.png" alt="Autor 1">
            </div>
        </div>
        <!-- Outros autores principais aqui -->
    </div>
    <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
    </div>
    </div>
</section>

<div class="row">
    <h3>Livros Mais Lidos</h3>
    <div class="swiper-container">
    <div class="swiper-wrapper">
    <div class="col-sm-3">
    <div class="swiper-slide">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    </div>
    <div class="col-sm-3">
    <div class="swiper-slide">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    </div>
    <div class="col-sm-3">
    <div class="swiper-slide">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    </div>

    <div class="col-sm-3">
    <div class="swiper-slide">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
        </div>
    </div>
    <!-- Outros livros mais lidos aqui -->
</div>
<div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
</div>
</div>
<div class="row">
    <h3>ler mais</h3>
    <div class="swiper-container">
   <div class="swiper-wrapper">
    <div class="col-sm-4">
    <div class="swiper-slide">
      <a href="#">
         <img src="img/classicos.png" alt="Livro 1">
      </a>
    </div>
    </div>
    <div class="col-sm-4">
    <div class="swiper-slide">
       <a href="#">
            <img src="img/novoslancamentos.png" alt="Livro 1">
            </a>
        </div>
    </div>
    <div class="col-sm-4">
    <div class="swiper-slide">
       <a href="#">
            <img src="img/parajovens.png" alt="Livro 1">
            </a>
        </div>
    </div>
    <!-- Outros livros mais lidos aqui -->
    </div>
    <div class="swiper-pagination"></div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
</div>
    </div>
    </div>
     <!-- Rodapé -->
     <div class="footer">
        <div class="foo">
            <div class="row">
                <!-- Primeira coluna -->
                <div class="col-md-4">
                    <h3>Institucional</h3>
                    <p>Quem somos</p>
                    <p>Direitos Autorias</p>
                    <p>Blog</p>
                </div>
                <!-- Segunda coluna -->
                <div class="col-md-4">
                    <h3>Ajuda</h3>
                    <p></p>
                </div>


                <!-- Terceira coluna -->
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
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>


</body>
</html>
