<x-layout title="Crea annuncio">

    <form action="{{route('listings.store')}}" method="post">

        @csrf

        <label for="title">Titolo</label>
        <input type="text" id="title" name="title">

        <label for="description">Descrizione</label>
        <input type="text" id="description" name="description">

        <label for="price">Prezzo</label>
        <input type="number" id="price" name="price">

        <button type="submit">Inserisci l'annuncio</button>

    </form>

</x-layout>