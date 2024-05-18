<!DOCTYPE html>
<html lang="pt-AO">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
    <link rel="stylesheet" href="/css/searchstyle.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">

    <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">


</head>
<body >

    <header>
        <div class="header-top">
            <div class="navbar-logo">
                <img src="/img/logotipo.png" alt="Logo">
            </div>
            <div class="navbar-search d-flex"><!-- Remover este estilo inline e todos os outros que existem nesta pagine e enviar para o arquivo de estilos-->
                <input style="background-color:#DFDFDF"type="text" placeholder="Procure por um livro..." class="form-control">
                <button class="btn btn-orange">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="navbar-buttons">
                <a href="/login"><button class="btn1">Entrar</button></a>
                <a href="/cadastrar"><button class="btn2">Cadastrar</button></a>
            </div>
        </div>
            <!--segunda barra ----------------------------------------------------------------------- -->
          <div class="header">
            <nav class="navbar navbar-expand-md navbar-light bg-dark"> <!-- Mudar a cor desta seçao para a cor do prototipo no figma -->
                <div class="container">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="#" style="color: white;">Início</a>
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
    </header>
<!------------------------------------------------------------------------------------------------------------------->


<!-- Corpo da página -->
<!-- Envolver  -->
<div style="margin-top:60px"class="textbody"><!-- Remover este estilo inline e colocar no arquivo de estilos -->
    <h3> Todos os Livros</h3><hr>
    <h5> Procure pelo livro do seu interesse</h5>
</div>


<div class="list">
    <div class="pes">
        <h3 style="padding-top:40px;padding-left:10px;">Pesquisar</h3><!-- Remoer estilo inline -->
        <div class="navbar-search">
            <input style="background-color:#DFDFDF" type="text" placeholder="">Adicionar placeholder
            <button class="btn btn-orange">
                Filtrar
            </button>
        </div>
        <hr>

        <br><br><br><br><br><br><br><br><br><br><hr><!-- Remover este espaçamento com br e usar o flex box junto com algumas divs pra deixar mais facil de manter -->
        <br><br><br><br><br><br><br><br><br><br><hr>
        <br><br><br><br><br><br><br><br><br><br><hr>
        <br><br><br><br><br><br><hr>

    </div>



    <div class="right">

        <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/transferir.png" style="height:150px;" alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" style="width: 160px;height:30px;">Pagar</button>
                <button class="bt bt-secondar"style="width: 160px;height:30px;">Ver Detalhes</button>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/transferir.jpeg" style="height:150px;" alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" style="width: 160px;height:30px;">Pagar</button>
                <button class="bt bt-secondar"style="width: 160px;height:30px;">Ver Detalhes</button>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/capap.jpg"  style="height:150px" alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" style="width: 160px;height:30px;">Pagar</button>
                <button class="bt bt-secondar"style="width: 160px;height:30px;">Ver Detalhes</button>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/transferir (1).jpeg" style="height:150px" alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" style="width: 160px;height:30px;">Pagar</button>
                <button class="bt bt-secondar"style="width: 160px;height:30px;">Ver Detalhes</button>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/capahtml.jpeg" style="height:150px"alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" style="width: 160px;height:30px;">Pagar</button>
                <button class="bt bt-secondar"style="width: 160px;height:30px;">Ver Detalhes</button>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/capahtml.jpeg" style="height:150px"alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" style="width: 160px;height:30px;">Pagar</button>
                <button class="bt bt-secondar"style="width: 160px;height:30px;">Ver Detalhes</button>
              </div>
            </div>
          </div>


        </div>
</div>

<div class="containerca">
    <ul class="pagination justify-content-end">
      <li class="page-item ">
        <a class="page-link" href="#" aria-label="Previous">
            <i class="bi bi-chevron-left fs-4"></i>
        </a>
      </li>
      <li class="page-item"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">4</a></li>
      <li class="page-item"><a class="page-link" href="#" aria-label="Next">
      <i class="bi bi-chevron-right fs-4"></i></a>
      </li>
    </ul>
  </div>

    <!-- Rodapé -->
    <div class="footer">
        <div class="foo">
            <div class="row">
                <!-- Primeira coluna -->
                <div class="col-md-4">
                    <h3>Institucional</h3>
                    <!-- Adicionar esses itens em links -->
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


</body>
</html>
