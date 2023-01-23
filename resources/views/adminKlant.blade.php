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
    <a href="{{ route('adminKlant.create') }}"><button type="button" class="btn btn-primary m-5">Create</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">datum_van_boeking</th>
            <th scope="col">naam</th>
            <th scope="col">address</th>
            <th scope="col">Aankomstdatum</th>
            <th scope="col">Vertrekdatum</th>
            <th scope="col">Creditkaartnummer</th>
            <th scope="col">Kamernummer</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $klants as $klant )
            <tr>
                <th scope="row">{{ $klant->id }}</th>
                <td>{{ $klant->reserverings->datum_van_boeking }}</td>
                <td>{{ $klant->naam }}</td>
                <td>{{ $klant->address }}</td>
                <td>{{ $klant->reserverings->Aankomstdatum }}</td>
                <td>{{ $klant->reserverings->Vertrekdatum }}</td>
                <td>{{ $klant->Creditkaartnummer }}</td>
                <td>{{ $klant->reserverings->kamer_id }}</td>
                <td><a href="{{ route('adminKlant.show', $klant->id) }}"><button type="button" class="btn btn-primary btn-sm">update</button></a></td>
                <td>
                    <form method="POST" action="{{ route('adminKlant.destroy', $klant->id) }}">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">X</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

