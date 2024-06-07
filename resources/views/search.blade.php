@extends('layouts.main')

@section('title', 'Livros')

@section('content')
<div class="textbody">
    <h3> Todos os Livros</h3><hr>
    <h5> Procure pelo livro do seu interesse</h5>
</div>
<div class="list">
    <div class="pes">
        <h3>Pesquisar</h3>
        <form method="GET" action="{{ route('search.books') }}" class="navbar-search-container">
            @csrf
            <input type="text" name="search" placeholder="Título do livro..." class="form-control">
            <button class="btn btn-filter" type="submit">Filtrar</button>
        </form>
        <div class="grid-container">
            <div class="grid-item">
                <div class="modal-body">
                    <h3 class="left">Estantes</h3>
                    <form action="{{ route('search.books') }}" method="GET" id="category-search-form" class="category-search-form">
                    @csrf
                        <div class="checklist-container">
                            <div class="checklist">
                                @foreach($categories as $category)
                                <label><input type="checkbox" name="category[]" value="{{ $category->id }}">{{ $category->name }}</label>
                                @endforeach
                            </div>
                        </div>
                    </form>
                </div>
              </div>
            <div class="grid-item">
                <div class="modal-body">
                    <h3 class="leftp">Autores</h3>
                    <form action="{{ route('search.books') }}" method="GET" id="author-search-form" class="author-search-form">
                    @csrf
                        <div class="checklist-container">
                            <div class="checklist">
                                @foreach($authors as $author)
                                <label><input type="checkbox" name="authors[]" value="{{ $author->id }}" >{{ $author->name }}</label>
                                @endforeach
                            </div>
                        </div>
                    </form>
                </div>
            </div>
          </div>
    </div>
    <div class="right">
        @foreach ($books as $book)
        <div class="liv">
            <div class="book-row">
                <div class="book-data">
                    <div class="book-cover">
                        <img src="/img/bookscovers/{{ $book->image }}" class ="imagli"alt="Capa do Livro">
                    </div>
                    <div class="book-details">
                        <span><strong>Título:</strong> {{ $book->title }}</span>
                        <span><strong>Autor:</strong> {{ $book->author_name }}</span>
                        <span><strong>Categoria:</strong> {{ $book->category_name }}</span>
                        <span><strong>Editora:</strong> {{ $book->publishing_company }}</span>
                    </div>
                </div>
                <div class="col-md-3 book-actions">
                    <a href="{{ route('books.download', $book->id) }}" class="bt bt-primar">Baixar Livro</a>
                    <div class="verdet">
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        @if(count($books) == 0 && $search)
            <p class="result-message">Nenhum resultado para a sua pesquisa por <strong>{{ $search }}</strong>! <a href="{{ route('search.books')}}">Ver todos os livros</a></p>
        @elseif(count($books) == 0)
            <p class="result-message">Nenhum resultado para a sua pesquisa <a href="{{ route('search.books')}}">Ver todos os livros</a></p>
        @endif
    </div>
</div>
<div class="pagination">
    <div class="pagination-item">{{ $books->onEachSide(1)->links() }}</div>
</div>
<link rel="stylesheet" href="/css/searchstyle.css">

<script>
document.addEventListener('DOMContentLoaded', function(){
document.querySelectorAll('.category-search-form').forEach((checkbox)=>{
    checkbox.addEventListener('change', ()=>{
        document.getElementById('category-search-form').submit();
    });
});
});

document.addEventListener('DOMContentLoaded', function(){
document.querySelectorAll('.author-search-form').forEach((checkbox)=>{
    checkbox.addEventListener('change', ()=>{
        document.getElementById('author-search-form').submit();
    });
});
});
</script>
@endsection

