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
@php
    use Carbon\Carbon;
@endphp

<body>
    <div class="container m-5">
        <form method="POST" action="{{ route('adminKlant.store') }}" enctype="multipart/form-data"
            class="needs-validation m-5" novalidate>
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <x-text-input inputType="text" textInput="naam" />
                    <input type="hidden" name="datum_van_boeking" value="{{ Carbon::now() }}">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <x-text-input inputType="text" textInput="address" />
                </div>
                <div class="col">
                    <x-text-input inputType="date" textInput="Aankomstdatum" />
                </div>
                <div class="col">
                    <x-text-input inputType="date" textInput="Vertrekdatum" />
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <x-text-input inputType="text" textInput="Creditkaartnummer" />
                </div>
                <div class="col">
                    <x-text-input inputType="text" textInput="Kamernummer" />
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
        <a href="{{ route('adminKlant.index') }}"><button type="button"
                class="btn btn-outline-primary pe-4 m-5">Back</button></a>
    </div>
</body>

</html>
