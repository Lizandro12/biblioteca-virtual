@extends('layouts.main')

@section('title', 'Seu Perfil')

@section('content')

    @if(Auth::check())
    <h1>{{Auth::user()->name}}</h1>
    <form action="{{route('user.logout')}}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
    @else
    <h3>O usuario nao esta logado</h3>
    @endif

@endsection
