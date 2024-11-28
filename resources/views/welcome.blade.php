<x-layout>
    
    @if(session()->has('errorMessage'))
        <div class="alert alert-danger text-center shadow rounded w-50">{{session('errorMessage')}}</div>
    @endif

    {{--messaggio di richiesta revisore --}}
    @if(session()->has('message'))
        <div class=" d-flex justify-content-center mx-5 my-3 alert alert-success text-center shadow rounded ">{{session('message')}}</div>
    @endif
    <div style="height: 15vh"></div>

    
            {{-- <div class="col-12"> --}}
                {{-- <h1 class="title-custom display-1">BazaarShop</h1> --}}
                {{-- <div class="my-3">
                    @auth
                        <a href="{{ route('create.article') }}"><button type="button" class="btn btncustom">{{__('ui.createArticle')}}</button></a>
                    @endauth
                </div> --}}
            {{-- </div>
        </div>
    </div> --}}
    <div class="container-fluid text-center">
        <div class="row vh-80 justify-content-center align-items-center">
            <div class="sfondo">
                <img src="/img/wallpaper.png" alt="bazaarshop">
            </div>
            <div class="border shadow rounded-4 my-1 col-10 mt-3 mb-3">
            <p class="display-1 mt-4">{{__('ui.offers')}}</p>
            {{-- card --}}
            <div class="row justify-content-center my-5">
            <div class="row height-custom justify-content-center align-items-center py-5 px-5 col-10">
                @forelse ($articles as $article)
                    <div class="col-12 col-md-6 col-lg-4">
                        <x-card :article="$article"/> 
                    </div>
                @empty
                    <div class="col-12">
                        <h3 class="text-center">{{__('ui.noArticlesYet')}}</h3>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
    </div>
    </div>
</x-layout>
