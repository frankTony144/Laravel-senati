<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pokemones</title>
</head>
<body>

<table border="1" cellpadding="5">
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Imagen</th>
    </tr>

    @foreach ($pokemones as $index => $poke)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ ucfirst($poke['name']) }}</td>
            <td>
                <img src="{{ $poke['image'] }}" alt="{{ $poke['name'] }}">
            </td>
        </tr>
    @endforeach
</table>

</body>
</html>