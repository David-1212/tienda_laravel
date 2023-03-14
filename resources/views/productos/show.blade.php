<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Detalle del producto</h1>
    <h3>{{ $producto->nombrep }}</h3>
    <h3>{{ $producto->precio }}</h3>
    <h3>{{ $producto->descripcion }}</h3>

    <form method="POST" action="/producto/{{ $producto->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar</button>
    </form>
        
</body>
</html>