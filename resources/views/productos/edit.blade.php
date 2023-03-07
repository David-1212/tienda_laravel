<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear productos</h1>
    <form action="/producto{{$producto->id}}" method="post">
    @csrf
        <label for="nombrep">Nombre:</label><br>
        <input type="text" name = "nombrep" id = "nombrep"><br><br>
        @error('nombre')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="precio">Precio:</label><br>
        <input type="double" name = "precio" id = "precio"><br><br>
        @error('nombre')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <label for="descripcion">Descripción:</label><br>
        <input type="text" name = "descripcion" id = "descripcion"><br><br>
        @error('nombre')
            <h5>{{ $message }}</h5>
        @enderror

        <br>

        <input type="submit" value="Enviar">
    </form>
       
</body>
</html>