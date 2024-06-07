@extends('layouts.main')

@section('title', 'Autores')

@section('content')
<div class="all">
    <div class="background-container">
        <h1 class="background-container--title">Autores</h1>
    </div>
    <div class="content-title">
        <h2>Principais Autores</h2>
    </div>
    <div class="containerliv">
        <table class="table table-borderless">
            <thead class="thead">
                <tr>
                </tr>
            </thead>
            <tbody>
                <tr class="tr tr-all">
            @foreach($authors as $author)
                    <td><a class="a" href="{{ route('search.books',  ['author_id' => $author->id]) }}">{{ $author->name}}</a></td>
            @endforeach
                </tr>
            </tbody>
        </table>
    </div>
</div>
<link rel="stylesheet" href="/css/authorpage.css">
@endsection
