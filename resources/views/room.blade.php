<x-layout title="Room description">
    <div class="card mb-5 w-50 mx-auto" style="width: 18rem;">
        <img src="{{ asset("storage/$room->foto") }}" class="card-img-top" alt="...">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Sort: {{ $room->sort }}</li>
            <li class="list-group-item">Opervlakte: {{ $room->opervlakte }} </li>
            <li class="list-group-item">Minibar beschikbaarheid: {{ $room->minibar_beschikbaarheid ? '✅' : '❌' }} </li>
            <li class="list-group-item">Bad beschikbaarheid: {{ $room->minibar_beschikbaarheid ? '✅' : '❌' }} </li>
            <li class="list-group-item">Aantal personen: {{ $room->aantal_personen }} </li>
            <li class="list-group-item">Prijs: {{ $room->prijs }} €</li>
            <li class="list-group-item">
                <form action="{{ url('/reservation') }}" method="get">
                    <input type="hidden" name="Kamernummer" value="{{ $room->Kamernummer }}">
                    <button type="submit" class="btn btn-primary">
                        Reserve
                    </button>
                </form>
            </li>
        </ul>
    </div>
</x-layout>
