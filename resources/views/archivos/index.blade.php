<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <script src="{{ asset('resources/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <script src="{{ asset('resources/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="{{asset('template/resources/img/agave.png')}}">
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>


    <title>Cargar archivo</title>
</head>
<body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Cargar archivos</h3>
                                    <form action="{{ route('archivo.store') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="file" name="archivo" required>
                                        <button type="submit">Cargar archivo</button>
                                    </form>
                                </div>
                                    <div class="card-body">

                                    @if(session('success'))
                                        <div class="alert alert-success">{{ session('success') }}</div>
                                    @endif

                                    

                                    <h1>Listado de archivos</h1>

                                    <table id="datatablesSimple">
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
                                                            <button type="submit" onclick="mostrarAlerta(event)"class="btn btn-danger">Eliminar</button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                </table>

                                        <script>
                                             function mostrarAlerta(event) {
                                                event.preventDefault(); // Evita que el formulario se envíe automáticamente

                                                Swal.fire({
                                                    title: '¿Estás seguro?',
                                                    text: 'Esta acción actualizará el registro. ¿Deseas continuar?',
                                                    icon: 'warning',
                                                    showCancelButton: true,
                                                    confirmButtonText: 'Sí, actualizar',
                                                    cancelButtonText: 'Cancelar'
                                                }).then((result) => {
                                                    if (result.isConfirmed) {
                                                        // Si el usuario confirma, se envía el formulario
                                                        event.target.closest('form').submit();
                                                    }
                                                });
                                            }
                                        </script>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
            

                
            </div>
        </div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('template/js/scripts.js')}}"></script>


        <script src="{{asset('template/js/scripts.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{asset('template/js/datatables-simple-demo.js')}}datatables-simple-demo.js"></script>
        <script src="{{asset('template/js/datatables-simple-demo.js')}}"></script>


    </body>
</html>