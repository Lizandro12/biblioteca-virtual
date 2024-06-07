@extends('layouts.main')

@section('title', 'Seu Perfil')

@section('content')
<section class="d-flex section">

    <div class="profile-content d-flex flex-column">
        <div>
            <img src="/img/user.jpg" alt="">
        </div>
        <div>
            <!-- <input type="file" id="photo-upload" class="photo-upload"> -->
            <!-- <button class="btn-upload"><i class="bi bi-cloud-arrow-up-fill"></i>Adicionar foto</button> -->
        </div>
        @if(Auth::check())
        <h4 class="user-name">{{Auth::user()->name}}</h4>
        @endif
        <div class="profile-options d-flex flex-column">
                <a class="profile-link" href="{{ route('user.profile') }}">
                    <i class="bi bi-speedometer"></i>
                    Dashboard
                </a>
                <a class="profile-link" href="{{ route('updateaccountdetails.profile') }}">
                    <i class="bi bi-person-fill"></i>
                    Detalhes da conta
                </a>
                @if(Auth::user()->is_admin)
                <a class="profile-link" href="{{ route('authors.form') }}">
                    <i class="bi bi-people-fill"></i>
                    Cadastrar Autores
                </a>
                <a class="profile-link selected" href="{{ route('categorys.form') }}">
                    <i class="bi bi-bookmarks-fill"></i>
                    Cadastrar Categorias
                </a>
                <a class="profile-link" href="{{ route('catalogbooks.profile') }}">
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
        <div class="profile-card register-category" id="target3">
            <div class="profile-tile-box"><span class="dashboard-title">Cadastrar categorias</span></div>
            <form action="{{ route('registercategorys.store') }}" method="POST" class="d-flex flex-column justify-content-center align-items-center form">
            @csrf
                <div class="form-center d-flex">
                    <div class="author-name-box d-flex flex-column">
                        <label for="name" class="label">Nome da categoria</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Informe o nome da categoria" value="{{ old('name') }}">
                        @error('name')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="biografy-box d-flex flex-column">
                        <label for="description" class="label">Descrição</label>
                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="Escreva a descrição" value="{{ old('description') }}"></textarea>
                        @error('description')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <input type="submit" value="Cadastrar" class="align-self-end btn-savechanges">
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
