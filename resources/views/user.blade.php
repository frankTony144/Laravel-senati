<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table class="table" border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Lastname</th>
        </tr>
        @foreach($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td><a href="/user/edit?id={{$user->id}}">Editar</a></td>
            <td><a href="/user/delete?id={{$user->id}}">Eliminar</a></td>

        </tr>
     @endforeach
</table>
</body>
</html>