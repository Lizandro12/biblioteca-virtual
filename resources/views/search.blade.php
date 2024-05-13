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
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

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

    .rig{width: 18cm;
              height: 5cm;
              float: right; /* para ocupar a parte direita */
              border: 5px solid #DFDFDF; /* apenas para visualização */
              margin-right: 100px; /* Define a margem esquerda como 50 pixels */
              padding: 1px;
              border-radius: 15px;


    }
    .ver {
              width: 11cm;
              height: 34cm;
              float: left; /* para ocupar a parte esquerda */
              border: 5px solid #DFDFDF; /* apenas para visualização */
              margin-left: 5px; /* Define a margem esquerda como 50 pixels */
              padding: 2px;
              border-radius: 15px;

          }

          /* Estilo para as colunas dentro da div */
          .coluna {
              width: 33.33%;
              float: left;
          }

          /* Estilo para os dados dentro das colunas */
          .dados {
              margin: 10px;
          }


  .pesquisar-form {
    display: flex;
    align-items: center;
  }
  .pesquisar-input {
    flex: 1;
    margin-right: 10px;
  }

</style>

</head>

<body style="">
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

            <ul style="padding:10;" class="navbar-nav ms-auto">
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

    <li style="margin-left: 100px;padding:10px;"class="list-group-item"><h3 style="padding:1px">Todos Livros</h3></listyle=>
    <hr><li style="margin-left: 110px;padding:2px;"class="list-group-item"><h5 style="padding:1px"> Procure pelo livro do seu interesse</h5></listyle=>



    <div  class="ver">
<div class="container mt-4">
  <div class="row">
    <div class="col-md-6">
      <h3>Pesquisar</h3>
      <form style="width: 10cm;"class="pesquisar-form">
        <input  style="width: 10cm;height: 1cm;" class="form-control me-2" type="search" placeholder="" aria-label="">
      <button style="height:1cm,text-align: center;" class="btn btn-orange me-2">Filtrar</button></form>
    </div>
  </div>
</div>



<div  style="width: 10cm;"class="container mt-4">
    <div class="row">
      <div style="padding:2px;width: 10cm;"class="col-md-6">
        <hr><h5>Estantes</h5>
        <form class="pesquisar-form">
        <input type="text" style="width: 10cm;height: 1cm;" class="form-control pesquisar-input">
         </div>
    </div>
  </div>

<br><br><br><br><br><br>

<div  style="width: 10cm;"class="container mt-4">
    <div class="row">
      <div style="padding:2px;width: 10cm;"class="col-md-6">
        <hr><h5>Autores</h5>
        <form class="pesquisar-form">
        <input type="text" style="width: 10cm;height: 1cm;" class="form-control pesquisar-input">
         </div>
    </div>
  </div>

<br><br><br><br><br><br>


<div  style="width: 10cm;"class="container mt-4">
    <div class="row">
      <div style="padding:2px;width: 10cm;"class="col-md-6">
        <hr><h5>Titulos</h5>
        <form class="pesquisar-form">
        <input type="text" style="width: 10cm;height: 1cm;" class="form-control pesquisar-input">
         </div>
    </div>
  </div>

<br><br><br><br><br><br>

<div  style="width: 10cm;"class="container mt-4">
    <div class="row">
      <div style="padding:2px;width: 10cm;"class="col-md-6">
        <hr><h5>Editoras</h5>
        <form class="pesquisar-form">
        <input type="text" style="width: 10cm;height: 1cm;" class="form-control pesquisar-input">
         </div>
    </div>
  </div>
<br><br><br><br>
</div>


<!-- Lado Direito da Pagina  Zona de visualização dos livros  -->

<div style="font-family: Poppins;" class="rig">
        <div style="padding:20px;"class="container">
            <div class="row">
              <div class="col-auto">
                <img src="/img/capa de livro.png"  alt="Capa do Livro" class="img-fluid" style="height: 100%;">
              </div>
              <div class="col">
                <h6>Nome do Livro</h6>
                <p>Autor do Livro</p>
                <br>
               <h6>Editora:</h6>
              </div>
              <div style="display: flex;padding: 2px;flex-direction: column;"class="col-auto">
                <p style="margin-left:40px;margin-top:30px;">Preço: $XX.XX</p>
                <button style="padding: 1px 1px;color:white;text-align: center; width: 160px;height: 30px;background-color: orange;border: 5px solid orange;border-radius: 10px;"class="btn btn-primary">Pagar</button>
                <button style="padding: 1px 1px;margin-top:10px;color:black;text-align: center; width: 160px;height: 30px;background-color: white;border: 2px solid black;border-radius: 10px;"class="btn btn-secondary">Ver Detalhes</button>
              </div>
            </div>
          </div>
          </div>

          <div style=" margin-top:20px;font-family: Poppins;" class="rig">
            <div style="padding:20px;"class="container">
                <div class="row">
                  <div class="col-auto">
                    <img src="/img/capa de livro.png"  alt="Capa do Livro" class="img-fluid" style="height: 100%;">
                  </div>
                  <div class="col">
                    <h6>Nome do Livro</h6>
                    <p>Autor do Livro</p>
                    <br>
                   <h6>Editora:</h6>
                  </div>
                  <div style="display: flex;padding: 2px;flex-direction: column;"class="col-auto">
                    <p style="margin-left:40px;margin-top:30px;">Preço: $XX.XX</p>
                    <button style="padding: 1px 1px;color:white;text-align: center; width: 160px;height: 30px;background-color: orange;border: 5px solid orange;border-radius: 10px;"class="btn btn-primary">Pagar</button>
                    <button style="padding: 1px 1px;margin-top:10px;color:black;text-align: center; width: 160px;height: 30px;background-color: white;border: 2px solid black;border-radius: 10px;"class="btn btn-secondary">Ver Detalhes</button>
                  </div>
                </div>
              </div>
              </div>

              <div style=" margin-top:20px;font-family: Poppins;" class="rig">
                        <div style="padding:20px;"class="container">
                          <div class="row">
                            <div class="col-auto">
                              <img src="/img/capa de livro.png"  alt="Capa do Livro" class="img-fluid" style="height: 100%;">
                            </div>
                            <div class="col">
                              <h6>Nome do Livro</h6>
                              <p>Autor do Livro</p>
                              <br>
                             <h6>Editora:</h6>
                            </div>
                            <div style="display: flex;padding: 2px;flex-direction: column;"class="col-auto">
                              <p style="margin-left:40px;margin-top:30px;">Preço: $XX.XX</p>
                              <button style="padding: 1px 1px;color:white;text-align: center; width: 160px;height: 30px;background-color: orange;border: 5px solid orange;border-radius: 10px;"class="btn btn-primary">Pagar</button>
                              <button style="padding: 1px 1px;margin-top:10px;color:black;text-align: center; width: 160px;height: 30px;background-color: white;border: 2px solid black;border-radius: 10px;"class="btn btn-secondary">Ver Detalhes</button>
                            </div>
                          </div>
                        </div>
                        </div>


<div style=" margin-top:20px;font-family: Poppins;" class="rig">
    <div style="padding:20px;"class="container">
        <div class="row">
          <div class="col-auto">
            <img src="/img/capa de livro.png"  alt="Capa do Livro" class="img-fluid" style="height: 100%;">
          </div>
          <div class="col">
            <h6>Nome do Livro</h6>
            <p>Autor do Livro</p>
            <br>
           <h6>Editora:</h6>
          </div>
          <div style="display: flex;padding: 2px;flex-direction: column;"class="col-auto">
            <p style="margin-left:40px;margin-top:30px;">Preço: $XX.XX</p>
            <button style="padding: 1px 1px;color:white;text-align: center; width: 160px;height: 30px;background-color: orange;border: 5px solid orange;border-radius: 10px;"class="btn btn-primary">Pagar</button>
            <button style="padding: 1px 1px;margin-top:10px;color:black;text-align: center; width: 160px;height: 30px;background-color: white;border: 2px solid black;border-radius: 10px;"class="btn btn-secondary">Ver Detalhes</button>
          </div>
        </div>
      </div>
      </div>

      <div style=" margin-top:20px;font-family: Poppins;" class="rig">
        <div style="padding:20px;"class="container">
            <div class="row">
              <div class="col-auto">
                <img src="/img/capa de livro.png"  alt="Capa do Livro" class="img-fluid" style="height: 100%;">
              </div>
              <div class="col">
                <h6>Nome do Livro</h6>
                <p>Autor do Livro</p>
                <br>
               <h6>Editora:</h6>
              </div>
              <div style="display: flex;padding: 2px;flex-direction: column;"class="col-auto">
                <p style="margin-left:40px;margin-top:30px;">Preço: $XX.XX</p>
                <button style="padding: 1px 1px;color:white;text-align: center; width: 160px;height: 30px;background-color: orange;border: 5px solid orange;border-radius: 10px;"class="btn btn-primary">Pagar</button>
                <button style="padding: 1px 1px;margin-top:10px;color:black;text-align: center; width: 160px;height: 30px;background-color: white;border: 2px solid black;border-radius: 10px;"class="btn btn-secondary">Ver Detalhes</button>
              </div>
            </div>
          </div>
          </div>


          <div style=" margin-top:20px;font-family: Poppins;" class="rig">
    <div style="padding:20px;"class="container">
        <div class="row">
          <div class="col-auto">
            <img src="/img/capa de livro.png"  alt="Capa do Livro" class="img-fluid" style="height: 100%;">
          </div>
          <div class="col">
            <h6>Nome do Livro</h6>
            <p>Autor do Livro</p>
            <br>
           <h6>Editora:</h6>
          </div>
          <div style="display: flex;padding: 2px;flex-direction: column;"class="col-auto">
            <p style="margin-left:40px;margin-top:30px;">Preço: $XX.XX</p>
            <button style="padding: 1px 1px;color:white;text-align: center; width: 160px;height: 30px;background-color: orange;border: 5px solid orange;border-radius: 10px;"class="btn btn-primary">Pagar</button>
            <button style="padding: 1px 1px;margin-top:10px;color:black;text-align: center; width: 160px;height: 30px;background-color: white;border: 2px solid black;border-radius: 10px;"class="btn btn-secondary">Ver Detalhes</button>
          </div>
        </div>
      </div>
      </div>
      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>      <br><br><br><br>      <br><br><br><br>     <br><br><br><br>      <br><br><br><br>
      <br><br><br><br> <br><br><br><br><br><br>     <br><br><br><br> <br><br><br><br><br>     <br><br><br><br>


<div style="margin-right:70px" class="container">
  <ul class="pagination justify-content-end">
    <li class="page-item">
      <a  style="border: none" class="page-link" href="#" aria-label="Previous">
        <i style="color:orange"class="bi bi-chevron-left"></i></a>
    </li>
    <li class="page-item"><a style="color:black;border: none"class="page-link" href="#">1</a></li>
    <li class="page-item"><a style="color:black;border: none"class="page-link" href="#">2</a></li>
    <li class="page-item"><a style="color:black;border: none"class="page-link" href="#">3</a></li>
    <li class="page-item"><a style="color:black;border: none"class="page-link" href="#">4</a></li>
    <li class="page-item"><a style="color:black;border: none"class="page-link" href="#" aria-label="Next">
    <i style="color:orange;" class="bi bi-chevron-right"></i></a>
    </li>
  </ul>
</div>


 <footer style="margin-right: 100px; "class="container-fluid bg-dark text-light py-4">
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

