<x-layout>

    <div style="height: 15vh; width: 100%"></div>
    <div class="container border rounded-4 shadow mb-5">
        <div class="row height-custom justify-content-center align-items-center">
            <div class="col-12 col-md-6 mb-3">
                @if ($article->images->count() > 0)
                    <div id="carouselExample" class="carousel slide pt-5">
                        <div class="carousel-inner">
                            @foreach ($article->images as $key => $image)
                                <div class="carousel-item @if ($loop->first) active @endif">
                                    <img src="{{ $image->getUrl(300, 300) }}"
                                        alt="immagine {{ $key + 1 }} dell'articolo {{ $article->title }}"
                                        class="d-block w-100 rounded shadow">
                                </div>
                            @endforeach
                        </div>
                        @if ($article->images->count() > 1)
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                                data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        @endif
                    </div>
                    @else
                        <img src="https://picsum.photos/300" alt="nessuna foto inserita dall'utente">
                @endif
            </div>
            <div class="col-12 col-md-6 mb-3 height-custom text-center">
                <div class="row height-custom justify-content-center align-items-center text-center">
                    <div class="col-12">
                        <h1 class="display-6 py-2">{{ $article->title }}</h1>
                        <div class="d-flex flex-column justify-content-center h-75 py-5">
                            <h5>{{__('ui.description')}}</h5>
                            <p>{{ $article->description }}</p>
                            <h4 class="fw-bold">{{__('ui.price')}}: {{ $article->price }}€</h4>
                        </div>
                    </div>
                </div>
                {{-- <h2 class="display-5"><span class="fw-bold">{{__('ui.title')}}</span>{{ $article->title }}</h2> --}}
                
            </div>
        </div>
    </div>
</x-layout>
