<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Cidades do país: {{ $countryCode }}</h1>

    <table border = "1" cellpadding = "5" cellspacing = "0">
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>País</th>
        <th>População</th>
        <th>Distrito</th>
    </tr>
    @foreach($cities as $city)
    <tr>
        <td>{{$city->ID}}</td>
        <td>{{$city->name}}</td>
        <td>{{$city->CountryCode}}</td>
        <td>{{$city->Population}}</td>
        <td>{{$city->District}}</td>

    </tr>
    @endforeach
</table>
</body>
</html>