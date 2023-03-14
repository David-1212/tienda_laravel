<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Producto</title>
</head>
<body>
    
    <h1>Productos</h1>
    <a href ="/producto/create">Agregar Producto</a><br>
    
    @foreach($producto as $producto)
        <h4>Producto No.{{$producto->id}}</h4>
        <ul>
            <li><b>Nombre:</b>{{ $producto->nombrep }}</li>
            <li><b>Costo: </b> {{ $producto->precio }}</li>
            <li><b>Descripción:</b>  {{ $producto->descripcion }}</li>
            <a href="/producto/{{ $producto->id }}">Ver Detalle</a><br>
            <a href="/producto/{{ $producto->id}}/edit">Editar</a><br>
            
           
        </ul>
        
    @endforeach

</body>
</html>