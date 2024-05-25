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
           <!--  <button class="btn-upload"><i class="bi bi-cloud-arrow-up-fill"></i>Adicionar foto</button> -->
        </div>
        @if(Auth::check())
        <h4 class="user-name">{{Auth::user()->name}}</h4>
        @endif
        <div class="profile-options d-flex flex-column">
                <a class="profile-link" href="{{ route('user.profile') }}" data-target="target1">
                    <i class="bi bi-speedometer"></i>
                    Dashboard
                </a>
                <a class="profile-link selected" href="{{  route('updateaccountdetails.profile') }}" data-target="target2">
                    <i class="bi bi-person-fill"></i>
                    Detalhes da conta
                </a>
                @if(Auth::user()->is_admin)
                <a class="profile-link" href="{{ route('authors.form') }}" data-target="target3">
                    <i class="bi bi-people-fill"></i>
                    Cadastrar Autores
                </a>
                <a class="profile-link" href="{{ route('catalogbooks.profile') }}" data-target="target3">
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

        <!-- Formulario para alteracao dos dados de cadastro -->
        <div class="profile-card account-details" id="target2">
            <div class="profile-tile-box"><span class="dashboard-title">Detalhes da conta</span></div>
            <form action="{{ route('updateaccountdetails.profile') }}" method="POST" class="d-flex flex-column justify-content-center align-items-center form">
            @csrf
            @method('PUT')
                <div class="form-top d-flex">
                    <div class="name-box d-flex flex-column">
                        <label for="name" class="label">Nome completo</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ $user->name }}">
                    </div>
                    <div class="email-box d-flex flex-column">
                        <label for="email" class="label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ $user->email }}">
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="phone-box d-flex flex-column">
                        <label for="phone" class="label">Telefone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ $contact->phone }}">
                    </div>
                    <div class="birthday-box d-flex flex-column">
                        <label for="address" class="label">Endereço</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ $contact->address }}">
                    </div>
                </div>
                <input type="submit" value="Salvar alterações" class="align-self-end btn-savechanges">
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
