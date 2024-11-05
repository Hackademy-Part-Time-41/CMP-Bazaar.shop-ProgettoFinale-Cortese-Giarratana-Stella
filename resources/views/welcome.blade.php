<x-layout title="Home">

    @auth
        <a href="{{route('listings.create')}}"><button>Crea annuncio</button></a>
    @endauth

</x-layout>