<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <script src="https://kit.fontawesome.com/7875b71818.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div class="container mt-5">
        <form method="POST" action="{{ route('adminKlant.update', $klant->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="row mb-3">
                <div class="col">
                    <label for="datum_van_boeking" class="form-label">datum van boeking:</label>
                    <input type="text" id="datum_van_boeking" class="form-control" placeholder="datum_van_boeking"
                        name="datum_van_boeking" value="{{ $klant->datum_van_boeking }}">
                </div>
                <div class="col">
                    <label for="naam" class="form-label">naam:</label>
                    <input type="text" class="form-control" placeholder="naam" id="naam" name="naam"
                        value="{{ $klant->naam }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="address" class="form-label">address:</label>
                    <input type="text" class="form-control" placeholder="address" id="address" name="address"
                        value="{{ $klant->address }}">
                </div>
                <div class="col">
                    <label for="Aankomstdatum" class="form-label">Aankomstdatum:</label>
                    <input type="text" class="form-control" placeholder="Aankomstdatum" id="Aankomstdatum"
                        name="Aankomstdatum" value="{{ $klant->Aankomstdatum }}">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="Vertrekdatum" class="form-label">Vertrekdatum:</label>
                    <input type="text" class="form-control" placeholder="Vertrekdatum" id="Vertrekdatum"
                        name="Vertrekdatum" value="{{ $klant->Vertrekdatum }}">
                </div>
                <div class="col">
                    <label for="Creditkaartnummer" class="form-label">Creditkaartnummer:</label>
                    <input type="text" class="form-control" placeholder="Creditkaartnummer" id="Creditkaartnummer"
                        name="Creditkaartnummer" value="{{ $klant->Creditkaartnummer }}">
                </div>
                <div class="col">
                    <label for="Kamernummer" class="form-label">Kamernummer:</label>
                    <input type="text" class="form-control" placeholder="Kamernummer" id="Kamernummer"
                        name="Kamernummer" value="{{ $klant->Kamernummer }}">
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <a href="{{ route('adminKlant.index') }}"><button type="button"
                class="btn btn-outline-primary pe-4 mt-3">Back</button></a>
    </div>
</body>

</html>
