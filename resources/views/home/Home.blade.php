@extends('layouts.main')

@section('title', 'Início')

@section('content')
<div class="section-home">
    <div>
        <h1>Descubra Novos Livros</h1>
        <a href="#" class="btn">Começar Agora</a>
    </div>
</div>
    <div class="row">
    <h3>Livros Mais Comprados</h3>
    <div class="col-sm-3">
        <div class="card">
            <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Ler livro</a>
        </div>
        </div>

    <div class="col-sm-3">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Ler livro</a>
        </div>
    </div>
    <div class="col-sm-3">
        <div class="card">
            <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Ler livro</a>
        </div>
        </div>
    <div class="col-sm-3">
        <div class="card">
            <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Ler livro</a>
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
        <div class="col-sm-3">
            <img src="img/autores.png" alt="Autor 1">
        </div>
        <div class="col-sm-3">
            <img src="img/autores.png" alt="Autor 1">
        </div>
    <div class="col-sm-3">
            <img src="img/autores.png" alt="Autor 1">
    </div>
    <div class="col-sm-3">
            <img src="img/autores.png" alt="Autor 1">
        </div>
    <!-- Outros autores principais aqui -->
</div>
</section>

<div class="row">
    <h3>Livros Mais Lidos</h3>
    <div class="col-sm-3">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
    </div>
    <div class="col-sm-3">
    <div class="card">
    <img  class="card-img-top" src="img/principe.png" alt="card image">
            <h6 class="card-title">O Pequeno Príncipe</h6>
            <p  class="card-text">Antoine de Saint-Exupéry</p>
            <a href="#" class="btn btn-primary">Comprar</a>
        </div>
        </div>
    <!-- Outros livros mais lidos aqui -->
</div>
<div class="row">
    <h3>ler mais</h3>
    <div class="col-sm-4">
        <a href="#">
            <img src="img/classicos.png" alt="Livro 1">
        </a>
    </div>
    <div class="col-sm-4">
        <a href="#">
            <img src="img/novoslancamentos.png" alt="Livro 1">
            </a>
    </div>
    <div class="col-sm-4">
        <a href="#">
            <img src="img/parajovens.png" alt="Livro 1">
            </a>
    </div>
</div>
@endsection
