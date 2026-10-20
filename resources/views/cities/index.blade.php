
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cidades</title>
</head>
<body>
  <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Cidades</title>
</head>
<body>
    <h1>Últimas cidades cadastradas</h1>

    @if(session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif

    @if(session('error'))
        <div style="color:red;">{{ session('error') }}</div>
    @endif

    <p><a href="{{ url('/cities/create') }}">+ Nova cidade</a></p>

    <table border="1" cellpadding="5">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>País</th>
            <th>Distrito</th>
            <th>População</th>
            <th>Ações</th>
        </tr>

        @forelse($cities as $city)
            <tr>
                <td>{{ $city->ID }}</td>
                <td>{{ $city->Name }}</td>
                <td>{{ $city->CountryCode }}</td>
                <td>{{ $city->District }}</td>
                <td>{{ number_format($city->Population, 0, ',', '.') }}</td>
                <td>
                    <form action="{{ url('/cities/' . $city->ID) }}" method="POST"
                          onsubmit="return confirm('Tem certeza que deseja excluir esta cidade?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Nenhuma cidade encontrada.</td>
            </tr>
        @endforelse
    </table>
</body>
</html>

</body>
</html>