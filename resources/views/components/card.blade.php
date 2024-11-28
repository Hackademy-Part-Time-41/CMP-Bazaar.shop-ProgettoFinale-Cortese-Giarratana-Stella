{{-- <div class="card mx-auto shadow text-center mb-3">
    <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200'}}" alt="immagine dell'articolo {{$article->title}}" class="card-img-top provaimg">
    <div class="card-body">
        <h6 class="card-title">{{$article->title}}</h6>
        <h6 class="card-subtitle text-body-secondary">{{$article->price}}€</h6>
        <div class="flex-wrap justify-content-evenly align-items-center mt-5">
            <a href="{{ route ('article.show', compact('article')) }}" class="btn btn-success">{{__('ui.detail')}}</a>
            <a href="{{ route ('byCategory', [ 'category' => $article->category ]) }}" class="btn btn-outline-success">{{__("ui.".$article->category->name)}}</a>
        </div>
    </div>
</div> --}}

<div class="card mx-auto shadow text-center mb-3">
    <img src="{{ $article->images->isNotEmpty() ? $article->images->first()->getUrl(300, 300) : 'https://picsum.photos/200' }}"
        alt="immagine dell'articolo {{ $article->title }}" class="card-img-top provaimg position-relative">
    <span
        class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-warning fs-6">{{ $article->price }}€</span>
    <div class="card-body">
        <h6 class="card-title text-truncate">{{ $article->title }}</h6>
        {{-- <h6 class="card-subtitle text-body-secondary">{{$article->price}}€</h6> --}}
        <div class="flex-wrap justify-content-evenly align-items-center mt-5">
            <a href="{{ route('article.show', compact('article')) }}" class="btn btn-success m-1">{{ __('ui.detail') }}</a>
            <a href="{{ route('byCategory', ['category' => $article->category]) }}"
                class="btn btn-outline-success col-md-10 p-1">{{ __('ui.' . $article->category->name) }}</a>
        </div>
    </div>
</div>
