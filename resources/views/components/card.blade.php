<div class="card mx-auto shadow text-center mb-3">
    <img src="https://picsum.photos/200" alt="immagine dell'articolo {{$article->title}}" class="card-img-top">
    <div class="card-body">
        <h6 class="card-title">{{$article->title}}</h6>
        <h6 class="card-subtitle text-body-secondary">{{$article->price}}€</h6>
        <div class="flex-wrap justify-content-evenly align-items-center mt-5">
            <a href="{{ route ('article.show', compact('article')) }}" class="btn btn-success">Dettaglio</a>
            <a href="{{ route ('byCategory', [ 'category' => $article->category ]) }}" class="btn btn-outline-success">{{$article->category->name}}</a>
        </div>
    </div>
</div>