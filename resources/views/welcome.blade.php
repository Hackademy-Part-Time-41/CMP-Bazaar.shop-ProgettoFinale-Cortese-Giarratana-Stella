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
</x-layout>
