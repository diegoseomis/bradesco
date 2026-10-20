<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar cidade!</title>
</head>
<body>
    <h1>Cadastrar cidade!</h1>

    <form action="{{ route('cities.store') }}" method="POST">
        @csrf
        <label>Nome:</label>
        <input type="text" name="Name" placeholder="Digite o nome da cidade">
        <br><br>

        <label> CÓDIGO DO País:</label>
        <input type="text" name="CountryCode" placeholder="Digite o código do país">
        <br><br>

        <label>Distrito:</label>
        <input type="text" name="District" placeholder="Digite o distrito da cidade">
        <br><br>

        <label>População:</label>
        <input type="number" name="Population" placeholder="Digite a população da cidade">
        <br><br>

        <button type="submit">Cadastrar</button>

    </form>    
</body>
</html>