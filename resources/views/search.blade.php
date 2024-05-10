<!DOCTYPE html>
<html>
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Search Page</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.18.0/font/bootstrap-icons.min.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-HNRX5JSRQ+x0jfzFjf0Nj1oToTFwlRk7YLVor2gEoIUjbwIeD9A8FyXv5I4Td+dqGf82Z9rBCmUjS5S8v2LbIw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">




<style>

.btn-orange{
background-color: #FFA500; /* Código hexadecimal para a cor laranja */
color: #fff; /* Cor do texto dentro do botão */
padding: 15px 20px; /* Espaçamento interno do botão */
border-radius: 5px; /* Borda arredondada para suavizar as arestas */
cursor: pointer; /* Cursor do mouse mudará para indicar que é clicável */
font-size: 16px; /* Tamanho da fonte */
font-family: Poppins;
font-size: 16px;
font-weight: 700;
line-height: 24px;
text-align: center;

}
.navbar-custom {
    background-color: #ffffff;
    font-family: Poppins; }

.form-control{
width: 400px;
height: 50px;
top: 51px;
left: 461px;
gap: 0px;
opacity: 0px;
font-family: Poppins;
}

.nav-link{font-family: Poppins;}

.nav-link:hover {color: orange;}

.carousel-item img {
      width: 100%;
      height: auto;
    }
    .pagination {
      padding: 30px 0;
    }
    .justify-content-end {
      justify-content: flex-end !important;
    }

</style>

</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-custom">
        <div class="container">
            <a href="/"><img src="/img/logotipo.png" alt="" class="logo-form" style="height: 50px;"></a>
            <form class="d-flex mx-auto">
                <input class="form-control me-2" type="search" placeholder="" aria-label="Search">
                <button class="btn btn-outline-secondary" style="background-color: #FFA500;" type="submit"><i class="bi bi-search"></i></button>
            </form>
            <div class="d-flex">
                <a href="/login" class="btn btn-orange me-2">Entrar</a>
                <a href="/cadastrar" class="btn btn-orange">Cadastrar-se</a>
            </div>
        </div>
    </nav>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <ul class="navbar-nav ms-auto"style="width:601px;height: 40px;top: 169px;left: 674px;gap: 0px;opacity: 0px;">
              <li class="nav-item">
                <a class="nav-link " href="#">Início</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Livros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Autores</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Categoria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Blog</a>
              </li>
                <li  style="text-decoration:none;"class="nav-item">
                <a href="/" class="nav-link"><i class="bi bi-cart3"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <li style="padding:1px;"class="list-group-item"><h3 style="padding:1px">Todos Livros</h3></listyle=>
    <li class="list-group-item"><h6>Procure pelo livro do seu interesse</h6></li>

<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Imagem 1">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Imagem 2">
    </div>
    <div class="carousel-item">
      <img src="https://via.placeholder.com/800x400" class="d-block w-100" alt="Imagem 3">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Anterior</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Próximo</span>
  </a>
</div>

<div class="container">
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a  style="border: none" class="page-link" href="#" aria-label="Previous">
        <i style="color:orange"class="bi bi-chevron-left"></i></a>
    </li>
    <li class="page-item"><a style="border: none"class="page-link" href="#">1</a></li>
    <li class="page-item"><a style="border: none"class="page-link" href="#">2</a></li>
    <li class="page-item"><a  style="border: none"class="page-link" href="#">3</a></li>
    <li class="page-item"><a  style="border: none"class="page-link" href="#">4</a></li>
    <li class="page-item">
      <a  style=" border: none"class="page-link" href="#" aria-label="Next">
        <i style="color:orange" class="bi bi-chevron-right"></i></a>
    </li>
  </ul>
</div>


 <footer class="container-fluid bg-dark text-light py-4">
        <div  class="container">
            <div class="row">
                <!-- Primeira coluna -->
                <div class="col-md-4">
                    <h4>Institucional</h4>
                    <p>Quem somos</p>
                    <p>Direitos Autorias</p>
                    <p>Blog</p>
                </div>
                <!-- Segunda coluna -->
                <div class="col-md-4">
                    <h4>Ajuda</h4>
                    <p></p>
                </div>
                <!-- Terceira coluna -->
                <div style="text-decoration:none;"class="col-md-4">
                    <h4>Nossas Redes Sociais</h4>
                    <div style=" padding:2px" class="social-icons">
                        <a style=" padding:4px"href="#"><i style=" color:white" class="bi bi-facebook"></i></a>
                        <a style=" padding:4px" href="#"><i  style="color:white"class="bi bi-instagram"></i></a>
                        <a style=" padding:4px" href="#"><i style= "color:white"class="bi bi-linkedin"></i></a>
                        <a style=" padding:4px" href="#"><i style=" color:white"class="bi bi-youtube"></i></a>
                                        </div>
                </div>
            </div>
        </div>
        <div style="text-align: center; margin-top: 20px,font-family: Poppins;">
            <p>© 2024 Universo Literário - Todos os direitos reservados</p>
        </div>
    </footer>

</body>

    <!-- Scripts do Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>


    </html>

