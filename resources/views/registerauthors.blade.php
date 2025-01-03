@extends('layouts.main')

@section('title', 'Seu Perfil')

@section('content')
<section class="d-flex section">

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
                <a class="profile-link selected" href="{{ route('authors.form') }}" data-target="target3">
                    <i class="bi bi-people-fill"></i>
                    Cadastrar Autores
                </a>
                <a class="profile-link" href="{{ route('categorys.form') }}" data-target="target3">
                    <i class="bi bi-bookmarks-fill"></i>
                    Cadastrar Categorias
                </a>
                <a class="profile-link" href="{{ route('catalogbooks.profile') }}" data-target="target3">
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

        <!-- Formulario de alteracao de senha -->
        <div class="profile-card register-author" id="target3">
            <div class="profile-tile-box"><span class="dashboard-title">Cadastrar autores</span></div>
            <form action="{{ route('registerauthors.store') }}" method="POST" class="d-flex flex-column justify-content-center align-items-center form">
            @csrf
                <div class="form-center d-flex">
                    <div class="author-name-box d-flex flex-column">
                        <label for="name" class="label">Nome do autor</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Informe o nome do autor" value="{{ old('name') }}">
                        @error('name')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-center d-flex">
<!--                     <div class="birthday-box d-flex flex-column">
                        <label for="birthday" class="label">Aniversario</label>
                        <input type="date" name="birthday" id="birthday" class="form-control @error('birthday') is-invalid @enderror">
                        @error('birthday')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div> -->
                    <div class="nationality-box d-flex flex-column">
                        <label for="nationality" class="label">Nacionalidade</label>
                        <input type="text" name="nationality" id="nationality" class="form-control @error('nationality') is-invalid @enderror" placeholder="Nacionalidade do autor" value="{{ old('nationality') }}">
                        @error('nationality')
                        <p class="text invalid-feedback">
                                {{ $message }}
                        </p>
                        @enderror
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="biografy-box d-flex flex-column">
                        <label for="biography" class="label">Biografia</label>
                        <textarea name="biography" id="biography" class="form-control @error('biography') is-invalid @enderror" placeholder="Escreva a biografia" value="{{ old('biography') }}"></textarea>
                        @error('biography')
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
