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
    <a href="{{ route('admin.create') }}"><button type="button" class="btn btn-primary m-5">Create</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">photo</th>
            <th scope="col">sort</th>
            <th scope="col">Kamernummer</th>
            <th scope="col">opervlakte</th>
            <th scope="col">minibar</th>
            <th scope="col">bad</th>
            <th scope="col">aantal_personen</th>
            <th scope="col">prijs</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $rooms as $room )
            <tr>
                <th scope="row">{{ $room->id }}</th>
                <td><img class="img-thumbnail" src="{{ asset('storage/' . $room->foto) }}" style="width: 25%" alt=""></td>
                <td>{{ $room->sort }}</td>
                <td>{{ $room->Kamernummer }}</td>
                <td>{{ $room->opervlakte }} ⅿ²</td>
                <td>{{ $room->minibar_beschikbaarheid ? '✅' : '❌' }}</td>
                <td>{{ $room->bad_beschikbaarheid ? '✅' : '❌' }}</td>
                <td>{{ $room->aantal_personen }}</td>
                <td>€{{ $room->prijs }}</td>
                <td><a href="{{ route('admin.show', $room->id) }}"><button type="button" class="btn btn-primary btn-sm">update</button></a></td>
                <td>
                    <form method="POST" action="{{ route('admin.destroy', $room->id) }}">
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

