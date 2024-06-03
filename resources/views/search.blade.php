@extends('layouts.main')

@section('title', 'Livros')

@section('content')
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
            <button class="btn btn-filter">Filtrar</button>
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
@endsection
