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
    @php
        $listeners = [1,2,3,4,5];
    @endphp
    <button type="button" class="btn btn-primary m-5">Create</button>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">photo</th>
            <th scope="col">sort</th>
            <th scope="col">Kamernummer</th>
            <th scope="col">opervlakte</th>
            <th scope="col">minibar_beschikbaarheid</th>
            <th scope="col">bad_beschikbaarheid</th>
            <th scope="col">aantal_personen</th>
            <th scope="col">prijs</th>
          </tr>
        </thead>
        <tbody>
            @foreach ( $listeners as $listene )
            <tr>
                <th scope="row">1</th>
                <td><img class="img-thumbnail" src="{{ asset('images/food-1.jpg') }}" style="width: 25%" alt=""></td>
                <td>Otto</td>
                <td>mdo</td>
                <td>mdo</td>
                <td>mdo</td>
                <td>mdo</td>
                <td>mdo</td>
                <td>mdo</td>
                <td><button type="button" class="btn btn-primary btn-sm">update</button></td>
                <td><button type="button" class="btn btn-danger btn-sm">X</button></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>

