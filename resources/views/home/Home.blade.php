@extends('layouts.main')

@section('title', 'Início')

@section('content')

<div class="news">
    <div class="section-home">
        <div>
            <h1 class="section-home--title">Descubra Novos Livros</h1>
            <a href="/register" class="btn btn-cta">Começar Agora</a>
        </div>
    </div>
    <div class="row i-rows">
        <h3>Novidades</h3>
            <div class="b-row">
                @foreach($news as $new)
                <div class="card">
                    <img  class="card-img-top" src="img/bookscovers/{{ $new->image}}" alt="card image">
                    <h6 class="card-title">{{ $new->title}}</h6>
                    <p  class="card-text">{{ $new->author_name}}</p>
                    <a href="{{ route('search.books',  ['id' => $new->id]) }}" class="btn btn-see">Ver</a>
                </div>
                @endforeach
            </div>
    </div>
    <div class="row i-rows">
        <h3>Mais lidos</h3>
            <div class="b-row">
                @foreach($mostreadeds as $mostreaded)
                <div class="card">
                    <img  class="card-img-top" src="img/bookscovers/{{ $mostreaded->image }}" alt="card image">
                    <h6 class="card-title">{{ $mostreaded->title}}</h6>
                    <p  class="card-text">{{ $mostreaded->author_name }}</p>
                    <a href="{{ route('search.books',  ['id' => $mostreaded->id]) }}" class="btn btn-see">Ver</a>
                </div>
                @endforeach
            </div>
    </div>
    <div class="row i-rows">
        <h3>Romances</h3>
            <div class="b-row">
                @foreach($romances as $romance)
                <div class="card">
                    <img  class="card-img-top" src="img/bookscovers/{{ $romance->image }}" alt="card image">
                    <h6 class="card-title">{{ $romance->title}}</h6>
                    <p  class="card-text">{{ $romance->author_name }}</p>
                    <a href="{{ route('search.books',  ['id' => $romance->id]) }}" class="btn btn-see">ver</a>
                </div>
                @endforeach
            </div>
    </div>
</div>
<link rel="stylesheet" href="/css/home.css">
@endsection
