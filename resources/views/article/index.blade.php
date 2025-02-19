<x-layout>
    <div class="container-fluid">
        <div class="row height-custom justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-1">{{__('ui.allArticles')}}</h1>
            </div>
        </div>

        <div class="container-fluid text-center">
            <div class="row vh-80 justify-content-center align-items-center">
                <div class="border shadow rounded-4 my-1 col-10 mt-3 mb-3">
                    <div class="row height-custom justify-content-center align-items-center px-5 py-5">
                        @forelse ($articles as $article)
                            <div class="col-12 col-md-6 col-lg-4"> 
                                <x-card :article="$article"/>
                            </div>
                        @empty
                            <div class="col-12">
                                <h3 class="text-center">{{__('ui.noItems')}}</h3>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="d-flex justify-content-center">
        <div>
            {{$articles->links()}}
        </div>
    </div>

</x-layout>