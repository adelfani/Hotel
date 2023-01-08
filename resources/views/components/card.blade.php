@props(['room'])

<div class="card me-3 mt-4" style="max-width: 450px;">
    <div class="row g-0" style="height: 100px; width: 400px">
        <div class="col-md-4">
            <img src="{{ asset("storage/$room->foto") }}" class="img-fluid rounded-start" alt="..."
                style="height: 100px">
        </div>
        <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title">{{ $room->sort }}</h5>
                <p class="card-text">{{ $room->prijs }} €</p>
            </div>
        </div>
    </div>
</div>
