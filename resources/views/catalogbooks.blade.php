@extends('layouts.main')

@section('title', 'Seu Perfil')

@section('content')
<section class="d-flex">

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

        <!-- Formulario de alteracao de senha -->
        <div class="profile-card change-password" id="target3">
            <div class="profile-tile-box"><span class="dashboard-title">Catalogar</span></div>
            <form action="#" class="d-flex flex-column justify-content-center align-items-center form">
            @csrf
                <div class="form-center d-flex">
                    <div class="phone-box form-center-content d-flex flex-column">
                        <label for="name" class="label">Título</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="email-box form-top-content d-flex flex-column">
                        <label for="name" class="label">Editora</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="phone-box form-center-content d-flex flex-column">
                        <label for="name" class="label">Nova senha</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="email-box form-top-content d-flex flex-column">
                        <label for="name" class="label">Confirme a senha</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>                <div class="form-center d-flex">
                    <div class="phone-box form-center-content d-flex flex-column">
                        <label for="name" class="label">Nova senha</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="email-box form-top-content d-flex flex-column">
                        <label for="name" class="label">Confirme a senha</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>                <div class="form-center d-flex">
                    <div class="phone-box form-center-content d-flex flex-column">
                        <label for="name" class="label">Nova senha</label>
                        <input type="text" name="name" id="name" class="form-control">
                    </div>
                    <div class="email-box form-top-content d-flex flex-column">
                        <label for="name" class="label">Confirme a senha</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                </div>
                <input type="submit" value="Alterar senha" class="align-self-end btn-savechanges">
            </form>
        </div>

    </div>
</section>
@endsection
