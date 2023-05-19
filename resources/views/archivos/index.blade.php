<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Listado de archivos</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('archivo.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="archivo" required>
        <button type="submit">Cargar archivo</button>
    </form>

    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($archivos as $archivo)
                <tr>
                    <td>{{ $archivo->nombre }}</td>
                    <td>
                        <a href="{{ route('archivo.show', $archivo->id) }}">Mostrar</a>
                        <form action="{{ route('archivo.destroy', $archivo->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>