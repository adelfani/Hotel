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
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <script src="https://kit.fontawesome.com/7875b71818.js" crossorigin="anonymous"></script>

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container mt-5">
        <form method="POST" action="{{ route('admin.create') }}">
            @csrf
            @method('POST')
            <div class="row mb-3">
                <div class="col">
                <label for="sort" class="form-label">Sort:</label>
                <input type="text" id="sort" class="form-control" placeholder="sort" name="sort">
                </div>
                <div class="col">
                <label for="Kamernummer" class="form-label">Kamernummer:</label>
                <input type="text" class="form-control" placeholder="Kamernummer" id="Kamernummer" name="Kamernummer">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                <label for="aantal_personen" class="form-label">Aantal personen:</label>
                <input type="text" class="form-control" placeholder="aantal personen" id="aantal_personen" name="aantal_personen">
                </div>
                <div class="col">
                <label for="prijs" class="form-label">Prijs:</label>
                <input type="text" class="form-control" placeholder="prijs" id="prijs" name="prijs">
                </div>
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Foto</label>
                <input class="form-control" type="file" id="formFile">
            </div>
            <div class="row">
                <div class="col">
                <label for="opervlakte" class="form-label">Opervlakte:</label>
                <input type="text" class="form-control" placeholder="opervlakte" id="opervlakte" name="opervlakte">
                </div>
                <div class="col mt-5">
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="minibar_beschikbaarheid">
                    <label class="form-check-label me-5" for="flexCheckDefault">
                        Minibar beschikbaarheid
                    </label>
                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" name="bad_beschikbaarheid">
                    <label class="form-check-label" for="flexCheckDefault">
                        Bad beschikbaarheid
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <a href="{{ route('admin.index') }}"><button type="button" class="btn btn-outline-primary pe-4 mt-3">Back</button></a>
    </div>
</body>
</html>

