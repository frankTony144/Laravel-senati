<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Nuevo Usuario </h1>
    <form action="/user/store" method="POST">
        @csrf

        <label for="">Id:</label>
        <input type="text" name="id">
        
        <label for="">Name:</label>
        <input type="text" name="name">

        <label for="">Lastname:</label>
        <input type="text" name="lastname">

        <button type="submit">Guardar</button>
    </form>
        
</html>