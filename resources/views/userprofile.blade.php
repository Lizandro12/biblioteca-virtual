@extends('layouts.main')

@section('title', 'Seu Perfil')

@section('content')
<section class="d-flex">

    <div class="profile-content d-flex flex-column">
        <div>
            <img src="/img/user.jpg" alt="">
        </div>
        <div>
<!--             <input type="file" id="photo-upload" class="photo-upload">
            <button class="btn-upload"><i class="bi bi-cloud-arrow-up-fill"></i>Adicionar foto</button> -->
        </div>
        @if(Auth::check())
        <h4 class="user-name">{{Auth::user()->name}}</h4>
        @endif
        <div class="profile-options d-flex flex-column">
                <a class="profile-link selected" href="{{ route('user.profile') }}" data-target="target1">
                    <i class="bi bi-speedometer"></i>
                    Dashboard
                </a>
                <a class="profile-link" href="{{ route('updateaccountdetails.profile') }}" data-target="target2">
                    <i class="bi bi-person-fill"></i>
                    Detalhes da conta
                </a>
                @if(Auth::user()->is_admin)
                <a class="profile-link" href="{{ route('catalogbooks.profile') }}" data-target="target3">
                    <i class="bi bi-book-fill"></i>
                    Cadastrar Autores
                </a>
                <a class="profile-link" href="{{ route('catalogbooks.profile') }}" data-target="target3">
                    <i class="bi bi-book-fill"></i>
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
        <div class="profile-card" id="target1">
            <div class="profile-tile-box"><span class="dashboard-title">Dashboard</span></div>
            @if(Auth::check())
            <p class="dashboard-text">Ola, {{Auth::user()->name}}</p>
            <p>No painel da sua conta. você pode verificar e visualizar facilmente seu download recente, gerenciar sua conta e editar sua senha e detalhes da conta.</p>
            @endif
        </div>
    </div>
</section>
@endsection
