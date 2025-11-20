<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Eliminar Usuario </h1>
    <form action="/user/delete" method="POST">
        @csrf
        <label for="id_user">ID Usuario a eliminar:</label>
        <input type="text" id="id_user" name="id_user" required>
        <button type="submit">Eliminar Usuario</button>
    </form>
    
</body>
</html>