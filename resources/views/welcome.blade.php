<x-layout title="Home">
    <div class="'container-fluid text-center">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                <h1 class="display-1">BazaarShop</h1>
                <div class="my-3">
                    @auth
                        <a href="{{ route('create.article') }}"><button>Crea articolo</button></a>
                    @endauth
                </div>
            </div>
        </div>
    </div>

    {{-- card --}}
    <div class="row height-custom justify-content-center align-items-center py-5">
        @forelse ($articles as $article)
            <div class="col-12 col-md-3">
                <x-card :article="$article"/>
            </div>
        @empty
            <div class="col-12">
                <h3 class="text-center">Non sono ancora stati creati articoli</h3>
            </div>
        @endforelse
    </div>

</x-layout>
