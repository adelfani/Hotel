<x-layout title="Rooms">
    <div class="container-sm d-flex mb-5 flex-wrap">
        @foreach ($rooms as $room)
            <a href="/rooms/{{ $room->id }}" style="text-decoration: none; color:black">
                <x-card :room="$room" />
            </a>
        @endforeach
    </div>

</x-layout>
