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
<body>

    <header>
        <div class="header-top">
            <div class="navbar-logo">
                <img src="/img/logotipo.png" alt="Logo">
            </div>
            <div class="navbar-search d-flex">
                <input type="text" placeholder="Procure por um livro..." class="form-control">
                <button class="btn btn-orange">
                    <i class="fas fa-search"></i>
                </button>
            </div>
            <div class="navbar-buttons">
                <a href="/login"><button class="btn1">Entrar</button></a>
                <a href="/register"><button class="btn2">Cadastrar</button></a>
            </div>
        </div>

            <!--segunda barra ----------------------------------------------------------------------- -->

            <div class="header">
            <nav class="navbar navbar-expand-md navbar-light bg-dark">
                    <div class="container">
                    <ul class="navbar-nav ms-auto">
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
<!------------------------------------------------------------------------------------------------------------------->


<!-- Corpo da página -->
<!-- Envolver  -->
<div class="textbody">
    <h3> Todos os Livros</h3><hr>
    <h5> Procure pelo livro do seu interesse</h5>
</div>


<div class="list">
    <div class="pes">
        <h3>Pesquisar</h3>

        <div class="navbar-search-container">
            <input type="text" placeholder="Procure por um livro..." class="form-control">
            <button class="btn btn-orangel">Filtrar</button>
        </div>


        <div class="grid-container">
            <div class="grid-item">
                <div class="modal-body">
                    <h3 class="leftp">Estantes</h3>
                    <input type="text" placeholder="" class="form-control">
                    <div class="checklist-container">
                        <div class="checklist">
                            <label><input type="checkbox"> Item 1</label>
                            <label><input type="checkbox"> Item 2</label>
                            <label><input type="checkbox"> Item 3</label>
                            <label><input type="checkbox"> Item 4</label>
                            <label><input type="checkbox"> Item 5</label>
                            <label><input type="checkbox"> Item 6</label>
                            <label><input type="checkbox"> Item 7</label>
                            <label><input type="checkbox"> Item 8</label>
                            <label><input type="checkbox"> Item 9</label>
                            <label><input type="checkbox"> Item 10</label>
                        </div>
                    </div>

                </div>
              </div>
            <div class="grid-item">
                <div class="modal-body">
                    <h3 class="leftp">Autores</h3>
                    <input type="text" placeholder="" class="form-control">
                    <div class="checklist-container">
                        <div class="checklist">
                            <label><input type="checkbox"> Item 1</label>
                            <label><input type="checkbox"> Item 2</label>
                            <label><input type="checkbox"> Item 3</label>
                            <label><input type="checkbox"> Item 4</label>
                            <label><input type="checkbox"> Item 5</label>
                            <label><input type="checkbox"> Item 6</label>
                            <label><input type="checkbox"> Item 7</label>
                            <label><input type="checkbox"> Item 8</label>
                            <label><input type="checkbox"> Item 9</label>
                            <label><input type="checkbox"> Item 10</label>
                        </div>
                    </div>

                </div>

            </div>
            <div class="grid-item">
                <div class="modal-body">
                <h3 class="leftp">Titulos</h3>
                <input type="text" placeholder="" class="form-control">
                <div class="checklist-container">
                    <div class="checklist">
                        <label><input type="checkbox"> Item 1</label>
                        <label><input type="checkbox"> Item 2</label>
                        <label><input type="checkbox"> Item 3</label>
                        <label><input type="checkbox"> Item 4</label>
                        <label><input type="checkbox"> Item 5</label>
                        <label><input type="checkbox"> Item 6</label>
                        <label><input type="checkbox"> Item 7</label>
                        <label><input type="checkbox"> Item 8</label>
                        <label><input type="checkbox"> Item 9</label>
                        <label><input type="checkbox"> Item 10</label>
                    </div>
                </div>

            </div>

        </div>
            <div class="grid-item">
                <div class="modal-body">
                    <h3 class="leftp">Editoras</h3>
                    <input type="text" placeholder="" class="form-control">
                    <div class="checklist-container">
                        <div class="checklist">
                            <label><input type="checkbox"> Item 1</label>
                            <label><input type="checkbox"> Item 2</label>
                            <label><input type="checkbox"> Item 3</label>
                            <label><input type="checkbox"> Item 4</label>
                            <label><input type="checkbox"> Item 5</label>
                            <label><input type="checkbox"> Item 6</label>
                            <label><input type="checkbox"> Item 7</label>
                            <label><input type="checkbox"> Item 8</label>
                            <label><input type="checkbox"> Item 9</label>
                            <label><input type="checkbox"> Item 10</label>
                        </div>
                    </div>

                </div>


            </div>
          </div>

    </div>



    <div class="right">

        <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/transferir.png" class ="imagli"alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" >Pagar</button>
                <div class="verdet">
                    <!--Botão de Detalhes -->
                    <button type="button" class="bdetalhes" data-toggle="modal" data-target="#bookInfoModal">
                      Ver detalhes
                    </button>

                    <!-- os detalhes do Livro-->
                    <div class="modal fade" id="bookInfoModal" tabindex="-1" role="dialog" aria-labelledby="bookInfoModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="bookInfoModalLabel">Detalhes do Livro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h3>Lógica de Programação</h3>
                            <p class="alitex"><strong>Autor:</strong>André Luiz Villar Formentini</p>
                            <p class="alitex"><strong>Categoria:</strong> Educacional</p>
                            <p class="alitex"><strong>Data de Lançamento:</strong>2007</p>
                            <p class="alitex"><strong>Resumo:</strong> "Lógica de Programação" é um livro essencial para quem está iniciando no mundo da programação. Escrito por André Luiz Villar Formentini,  É uma obra destinada tanto a iniciantes quanto a profissionais que desejam revisar conceitos básicos. O conteúdo abrange desde os primeiros passos na lógica de programação até a elaboração de algoritmos mais complexos.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/transferir.jpeg" class ="imagli"alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" >Pagar</button>
                <div class="verdet">
                    <!--Botão de Detalhes -->
                    <button type="button" class="bdetalhes" data-toggle="modal" data-target="#bookInfoModal2">
                      Ver detalhes
                    </button>

                    <!-- os detalhes do Livro-->
                    <div class="modal fade" id="bookInfoModal2" tabindex="-1" role="dialog" aria-labelledby="bookInfoModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="bookInfoModalLabel2">Detalhes do Livro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h3> 10 Passos para Você Se Dar Bem em Matemática</h3>
                            <p class="alitex"><strong>Autor:</strong>César Ribeiro</p>
                            <p class="alitex"><strong>Categoria:</strong> Educacional</p>
                            <p class="alitex"><strong>Data de Lançamento:</strong> 2008</p>
                            <p class="alitex"><strong>Resumo:</strong> Se você está buscando melhorar suas habilidades em matemática, este livro pode ser uma excelente ferramenta, pois fornece dicas práticas e estratégias para facilitar o aprendizado e a aplicação dos conceitos matemáticos.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/jorg.jpg"  class ="imagli"alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" >Pagar</button>
                <div class="verdet">
                    <!--Botão de Detalhes -->
                    <button type="button" class="bdetalhes" data-toggle="modal" data-target="#bookInfoModal3">
                      Ver detalhes
                    </button>

                    <!-- os detalhes do Livro-->
                    <div class="modal fade" id="bookInfoModal3" tabindex="-1" role="dialog" aria-labelledby="bookInfoModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="bookInfoModalLabel">Detalhes do Livro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h3> 1984</h3>
                            <p class="alitex"><strong>Autor:</strong> George Orwell</p>
                            <p class="alitex"><strong>Categoria:</strong> Distopia, Ficção Científica, Romance Político</p>
                            <p class="alitex"><strong>Data de Lançamento:</strong> 2008</p>
                            <p class="alitex"><strong>Resumo:</strong> "1984" é um romance distópico que retrata uma sociedade totalitária sob o controle do Partido, liderado pelo enigmático Grande Irmão. A história é centrada em Winston Smith, um homem que trabalha para o governo reescrevendo a história e começa a questionar o regime opressor. O livro explora temas como vigilância, censura, manipulação da verdade e a natureza do poder.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/transferir (1).jpeg" class ="imagli" alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" >Pagar</button>
                <div class="verdet">
                    <!--Botão de Detalhes -->
                    <button type="button" class="bdetalhes" data-toggle="modal" data-target="#bookInfoModal4">
                      Ver detalhes
                    </button>

                    <!-- os detalhes do Livro-->
                    <div class="modal fade" id="bookInfoModal4" tabindex="-1" role="dialog" aria-labelledby="bookInfoModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="bookInfoModalLabel">Detalhes do Livro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h3> Algebra Linear</h3>
                            <p class="alitex"><strong>Autor:</strong> Prof. Dr. João Silva</p>
                            <p class="alitex"><strong>Categoria:</strong> Educacional</p>
                            <p class="alitex"><strong>Data de Lançamento:</strong> 2023</p>
                            <p class="alitex"><strong>Resumo:</strong>Este livro aborda desde os fundamentos básicos até tópicos mais avançados, apresentando uma ampla gama de aplicações práticas, este livro é uma ferramenta indispensável para aqueles que desejam compreender e aplicar os princípios da álgebra linear em diversos contextos.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/capahtml.jpeg" class ="imagli"alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" >Pagar</button>
                <div class="verdet">
                    <!--Botão de Detalhes -->
                    <button type="button" class="bdetalhes" data-toggle="modal" data-target="#bookInfoModal5">
                      Ver detalhes
                    </button>

                    <!-- os detalhes do Livro-->
                    <div class="modal fade" id="bookInfoModal5" tabindex="-1" role="dialog" aria-labelledby="bookInfoModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="bookInfoModalLabel">Detalhes do Livro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h3>HTML, XHTML e CSS para Leigos: Guia Completo para Iniciantes</h3>
                            <p class="alitex"><strong>Autor:</strong> Maria da Silva e João Oliveira</p>
                            <p class="alitex"><strong>Categoria:</strong> Educacional</p>
                            <p class="alitex"><strong>Data de Lançamento:</strong> 2022</p>
                            <p class="alitex"><strong>Resumo:</strong>Este livro é um guia prático e acessível para iniciantes que desejam aprender a criar páginas da web usando HTML, XHTML e CSS. Os autores explicam  desde a estrutura básica de um documento HTML até a formatação avançada com CSS, este livro cobre tudo o que você precisa saber para começar a desenvolver seus próprios sites.</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>

          <div class="liv">
            <div class="row book-row">
              <div class="col-md-3 book-cover">
                <img src="/img/cyber.jpg" class ="imagli" alt="Capa do Livro">
              </div>
              <div class="col-md-3 book-details">
                <p><strong>Autor:</strong> Nome do Autor</p>
                <p><strong>Título:</strong> Título do Livro</p>
                <p><strong>Editora:</strong> Nome da Editora</p>
              </div>
              <div class="col-md-3"></div>
              <div class="col-md-3 book-actions">
                <p><strong>2000 AOA</strong></p>
                <button class="bt bt-primar" >Pagar</button>
                <div class="verdet">
                    <!--Botão de Detalhes -->
                    <button type="button" class="bdetalhes" data-toggle="modal" data-target="#bookInfoModal6">
                      Ver detalhes
                    </button>

                    <!-- os detalhes do Livro-->
                    <div class="modal fade" id="bookInfoModal6" tabindex="-1" role="dialog" aria-labelledby="bookInfoModalLabel" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-header">
                            <h5 class="modal-title" id="bookInfoModalLabel">Detalhes do Livro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">&times;</span>
                            </button>
                          </div>
                          <div class="modal-body">
                            <h3> Segurança Cibernética: Princípios e Práticas</h3>
                            <p class="alitex"><strong>Autor:</strong> Dr. Carlos Santos</p>
                            <p class="alitex"><strong>Categoria:</strong> Cientifico</p>
                            <p class="alitex"><strong>Data de Lançamento:</strong> 2023</p>
                            <p class="alitex"><strong>Resumo:</strong>O autor explora os desafios e as ameaças enfrentadas no mundo digital, fornecendo estratégias e técnicas para proteger sistemas, redes e dados contra ataques cibernéticos. Com exemplos do mundo real e estudos de caso</p>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
                    <a href="#"><p>Quem somos</p></a>
                    <a href="#"><p>Direitos Autorias</p></a>
                    <a href="#"><p>Blog</p></a>
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
<!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
