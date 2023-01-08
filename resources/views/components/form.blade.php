@props(['Kamernummer'])

@php
    use Carbon\Carbon;

    $currentTime = Carbon::now();

@endphp

<form action="" method="post" class="bg-white p-md-5 p-4 mb-5 border">
    @csrf
    <div class="row">
        <div class="col-md-12 form-group mb-2">
            <label class="text-black font-weight-bold" for="name">Naam</label>
            <input type="text" id="name" class="form-control" name="naam">
        </div>
        <div class="col-md-f form-group mb-2">
            <label class="text-black font-weight-bold" for="phone">Address</label>
            <input type="text" id="phone" class="form-control" name="address">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6 form-group">
            <label class="text-black font-weight-bold" for="email">Email</label>
            <input type="email" id="email" class="form-control ">
        </div>
        <div class="col-md-6 form-group">
            <label class="text-black font-weight-bold" for="email">Creditkaartnummer</label>
            <input type="text" id="email" class="form-control" name="Creditkaartnummer">
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6 form-group">
            <label class="text-black font-weight-bold" for="checkin_date">Aankomstdatum</label>
            <input type="date" id="checkin_date" class="form-control" name="Aankomstdatum">
        </div>
        <div class="col-md-6 form-group">
            <label class="text-black font-weight-bold" for="checkout_date">Vertrekdatum</label>
            <input type="date" id="checkout_date" class="form-control" name="Vertrekdatum">
        </div>
    </div>

    <input type="hidden" name="Kamernummer" value="{{ $Kamernummer }}">
    <input type="hidden" name="datum_van_boeking" value="{{ $currentTime }}">

    <div class="row mt-5">
        <div class="col-md-6 form-group">
            <input type="submit" value="Reserve Now" class="btn btn-primary text-white py-3 px-5 font-weight-bold">
        </div>
    </div>
</form>
