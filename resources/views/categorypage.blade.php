@extends('layouts.main')

@section('title', 'Categorias')

@section('content')
<div class="all">
    <div>
        <h1 class="content-title">Categorias</h1>
    </div>
    <div class="containerliv">
        <table class="table table-borderless">

            <thead class="thead">
                <tr>
                </tr>
            </thead>
            <tbody>
                <tr class="tr tr-all">
                    @foreach($categories as $category)
                    <td><a class="a" href="{{ route('search.books',  ['category_id' => $category->id]) }}">{{ $category->name }}</a></td>
                    @endforeach
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
<link rel="stylesheet" href="/css/authorpage.css">
@endsection
