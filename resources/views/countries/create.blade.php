<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar país</title>
</head>
<body>
    <h1>Cadastrar país</h1>

    @if (session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ url('/countries') }}" method="POST">
        @csrf

        <label for="Code">Código (3 caracteres):</label>
        <input id="Code" type="text" name="Code" maxlength="3" value="{{ old('Code') }}" required>
        <br><br>

        <label for="Name">Nome:</label>
        <input id="Name" type="text" name="Name" maxlength="52" value="{{ old('Name') }}" required>
        <br><br>

        <label for="Continent">Continente:</label>
        <select id="Continent" name="Continent" required>
            <option value="">Selecione</option>
            @foreach (['Asia', 'Europe', 'North America', 'Africa', 'Oceania', 'Antarctica', 'South America'] as $continent)
                <option value="{{ $continent }}" @selected(old('Continent') === $continent)>{{ $continent }}</option>
            @endforeach
        </select>
        <br><br>

        <label for="Region">Região:</label>
        <input id="Region" type="text" name="Region" maxlength="26" value="{{ old('Region') }}" required>
        <br><br>

        <label for="SurfaceArea">Área territorial:</label>
        <input id="SurfaceArea" type="number" name="SurfaceArea" min="0" step="any" value="{{ old('SurfaceArea') }}" required>
        <br><br>

        <label for="IndepYear">Ano de independência:</label>
        <input id="IndepYear" type="number" name="IndepYear" value="{{ old('IndepYear') }}">
        <br><br>

        <label for="Population">População:</label>
        <input id="Population" type="number" name="Population" min="0" value="{{ old('Population') }}" required>
        <br><br>

        <label for="LifeExpectancy">Expectativa de vida:</label>
        <input id="LifeExpectancy" type="number" name="LifeExpectancy" min="0" step="any" value="{{ old('LifeExpectancy') }}">
        <br><br>

        <label for="GNP">Produto nacional bruto (GNP):</label>
        <input id="GNP" type="number" name="GNP" min="0" step="any" value="{{ old('GNP') }}">
        <br><br>

        <label for="GNPOld">GNP anterior:</label>
        <input id="GNPOld" type="number" name="GNPOld" min="0" step="any" value="{{ old('GNPOld') }}">
        <br><br>

        <label for="LocalName">Nome local:</label>
        <input id="LocalName" type="text" name="LocalName" maxlength="45" value="{{ old('LocalName') }}" required>
        <br><br>

        <label for="GovernmentForm">Forma de governo:</label>
        <input id="GovernmentForm" type="text" name="GovernmentForm" maxlength="45" value="{{ old('GovernmentForm') }}" required>
        <br><br>

        <label for="HeadOfState">Chefe de Estado:</label>
        <input id="HeadOfState" type="text" name="HeadOfState" maxlength="60" value="{{ old('HeadOfState') }}">
        <br><br>

        <label for="Capital">ID da capital:</label>
        <input id="Capital" type="number" name="Capital" min="1" value="{{ old('Capital') }}">
        <br><br>

        <label for="Code2">Código alternativo (2 caracteres):</label>
        <input id="Code2" type="text" name="Code2" maxlength="2" value="{{ old('Code2') }}" required>
        <br><br>

        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
