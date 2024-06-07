@extends('layouts.main')

@section('title', 'Seu Perfil')

@section('content')
<section class="d-flex">

    <div class="profile-content d-flex flex-column">
        <div>
            <img src="/img/user.jpg" alt="">
        </div>
        <div>
        </div>
        @if(Auth::check())
        <h4 class="user-name">{{Auth::user()->name}}</h4>
        @endif
        <div class="profile-options d-flex flex-column">
                <a class="profile-link" href="{{ route('user.profile') }}" data-target="target1">
                    <i class="bi bi-speedometer"></i>
                    Dashboard
                </a>
                <a class="profile-link" href="{{ route('updateaccountdetails.profile') }}" data-target="target2">
                    <i class="bi bi-person-fill"></i>
                    Detalhes da conta
                </a>
                @if(Auth::user()->is_admin)
                <a class="profile-link" href="{{ route('authors.form') }}" data-target="target3">
                    <i class="bi bi-people-fill"></i>
                    Cadastrar Autores
                </a>
                <a class="profile-link" href="{{ route('categorys.form') }}" data-target="target3">
                    <i class="bi bi-bookmarks-fill"></i>
                    Cadastrar Categorias
                </a>
                <a class="profile-link selected" href="{{ route('catalogbooks.profile') }}" data-target="target3">
                    <i class="bi bi-book-fill"></i>
                    Catalogar livro
                </a>
                @endif
                <form action="{{route('user.logout')}}" method="POST">
                @csrf
                    <button class="profile-link btn-logout" type="submit">
                        <i class="bi bi-box-arrow-right"></i>
                        Terminar sessão
                    </button>
                </form>
        </div>
    </div>
    <div class="profile-dashboard">
        @if(session('message'))
        <span class="text text-success success-message">
            {{ session('message')}}
        </span>
        @endif
        <div class="profile-card change-password" id="target3">
            <div class="profile-tile-box"><span class="dashboard-title">Catalogar</span></div>
            <form action="{{ route('storecatalogedbooks.profile') }}" method="POST" class="d-flex flex-column justify-content-center align-items-center form" enctype="multipart/form-data">
            @csrf
                <div class="form-center d-flex">
                    <div class="title-box form-center-content d-flex flex-column">
                        <label for="title" class="label">Título</label>
                        <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror">
                        @error('title')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="publishingcompany-box form-center-content d-flex flex-column">
                        <label for="" class="label">Editora</label>
                        <input type="text" name="publishingcompany" id="publishingcompany" class="form-control @error('publishingcompany') is-invalid @enderror">
                        @error('publishingcompany')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="publicationdate-box form-top-content d-flex flex-column">
                        <label for="publicationdate" class="label">Data de publicação</label>
                        <input type="date" name="publicationdate" id="publicationdate" class="form-control @error('publicationdate') is-invalid @enderror">
                        @error('publicationdate')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="isbn-box form-center-content d-flex flex-column">
                        <label for="isbn" class="label">ISBN</label>
                        <input type="text" name="isbn" id="isbn" class="form-control @error('isbn') is-invalid @enderror">
                        @error('isbn')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="photo-box form-top-content d-flex flex-column">
                        <label for="image" class="label">Imagem</label>
                        <input type="file" name="image" id="image" class="form-control @error('image') is-invalid @enderror">
                        @error('image')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="photo-box form-top-content d-flex flex-column">
                        <label for="filebook" class="label">Livro</label>
                        <input type="file" name="filebook" id="filebook" class="form-control @error('book') is-invalid @enderror">
                        @error('book')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="category-box--dif form-center-content d-flex flex-column">
                        <label for="category" class="label">Categoria</label>
                        <select name="category" id="" class="form-control">
                            <option value="" selected>--Selecione--</option>
                            @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('isbn')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                    <div class="author-box--dif form-center-content d-flex flex-column">
                        <label for="author" class="label">Author</label>
                        <select name="author" id="" class="form-control">
                            <option value="" selected>--Selecione--</option>
                            @foreach ($authors as $author)
                            <option value="{{ $author->id }}">{{ $author->name}}</option>
                            @endforeach
                        </select>
                        @error('isbn')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="synopsis-box form-center-content d-flex flex-column">
                        <label for="name" class="label">Sinopse</label>
                        <textarea name="synopsis" id="synopsis" class="form-control @error('synopsis') is-invalid @enderror" placeholder="Escreva a sinopse do livro"></textarea>
                        @error('synopsis')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <input type="submit" value="Catalogar" class="align-self-end btn-savechanges">
            </form>
        </div>

    </div>
</section>

<script>
    let message = document.querySelector('.success-message');

    setTimeout(()=>{
        if(message) message.style.display = 'none';
    }, 3000);

</script>
@endsection
