@extends('layouts.main')

@section('title', 'Seu Perfil')

@section('content')
<section class="d-flex">

    <div class="profile-content d-flex flex-column">
        <div>
            <img src="/img/user.jpg" alt="">
        </div>
        <div>
            <input type="file" id="photo-upload" class="photo-upload">
            <button class="btn-upload"><i class="bi bi-cloud-arrow-up-fill"></i>Adicionar foto</button>
        </div>
        @if(Auth::check())
        <h4 class="user-name">{{Auth::user()->name}}</h4>
        @endif
        <div class="profile-options d-flex flex-column">
                <a class="profile-link selected" href="#" data-target="target1">
                    <i class="bi bi-speedometer"></i>
                    Dashboard
                </a>
                <a class="profile-link" href="#" data-target="target2">
                    <i class="bi bi-person-fill"></i>
                    Detalhes da conta
                </a>
                <a class="profile-link" href="#" data-target="target3">
                    <i class="bi bi-lock-fill"></i>
                    Alterar senha
                </a>
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

        <!-- Formulario para alteracao dos dados de cadastro -->
        <div class="profile-card account-details" id="target2">
            <div class="profile-tile-box"><span class="dashboard-title">Detalhes da conta</span></div>
            <form action="{{ route('update.profile') }}" method="POST" class="d-flex flex-column justify-content-center align-items-center form">
                <div class="form-top d-flex">
                    <div class="name-box form-top-content d-flex flex-column">
                        <label for="name" class="label">Nome completo</label>
                        <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}">
                    </div>
                    <div class="email-box form-top-content d-flex flex-column">
                        <label for="email" class="label">E-mail</label>
                        <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}">
                    </div>
                </div>
                <div class="form-center d-flex">
                    <div class="phone-box form-center-content d-flex flex-column">
                        <label for="phone" class="label">Telefone</label>
                        <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone', $contact->phone) }}">
                    </div>
                    <div class="birthday-box form-center-content d-flex flex-column">
                        <label for="address" class="label">Endereço</label>
                        <input type="text" name="address" id="address" class="form-control" value="{{ old('address', $contact->address) }}">
                    </div>
                </div>
                <input type="submit" value="Salvar alterações" class="align-self-end btn-savechanges">
            </form>
        </div>


        <!-- Formulario de alteracao de senha -->
        <div class="profile-card change-password" id="target3">
            <div class="profile-tile-box"><span class="dashboard-title">Detalhes da conta</span></div>
            <form action="#" class="d-flex flex-column justify-content-center align-items-center form">
                <div class="form-top d-flex">
                    <div class="name-box form-top-content d-flex flex-column">
                        <label for="name" class="label">Senha actual</label>
                        <input type="text" name="name" id="name" class="form-control">
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
                </div>
                <input type="submit" value="Alterar senha" class="align-self-end btn-savechanges">
            </form>
        </div>

    </div>
</section>


<script>
    const options = document.querySelectorAll('.profile-link');

    options.forEach(option => {
        option.addEventListener('click', function(){
            const targetId = this.getAttribute('data-target');
            const targetElement = document.getElementById(targetId);

            document.querySelectorAll('.profile-card').forEach(profile => {
                profile.style.display = 'none';
            });

            if(targetElement) {
                targetElement.style.display = 'block';
            }

        });

    });

</script>
@endsection
