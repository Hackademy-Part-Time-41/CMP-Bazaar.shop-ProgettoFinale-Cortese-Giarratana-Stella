<x-layout>

    <div class="container">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12 pt-5">
                <h1 class="display-2">{{__('ui.articlesCategory')}} <span class="fst-italic fw-bold">{{__("ui.$category->name")}}</span></h1>
            </div>
        </div>
        <div class="row height-custom justify-content-center align-items-center py-5">
            @forelse($articles as $article)
                <div class="col-12 col-md-4">
                    <x-card :article="$article"/>
                </div>
                
            @empty
                <div class="col-12 text-center">
                    <h3>{{__('ui.noItemsInThisCategory')}}</h3>
                    @auth
                        <a href="{{route('create.article')}}" class="btn btn-dark my-5">{{__('ui.createArticle')}}</a>
                    @endauth
                </div> 
            @endforelse
        </div>
    </div>

</x-layout>