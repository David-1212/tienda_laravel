<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Editar</title>

        <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
        <script src="{{ asset('resources/js/app.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Editar producto</h3></div>
                                    <div class="card-body">
                                        <form action="/producto/{{ $producto->id }}" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <div class="form-floating mb-3">
                                                <label for="nombrep">Nombre:</label><br><br>
                                                <input type="text" name = "nombrep" id = "nombrep" class="form-control" value ="{{old('nombrep') ?? $producto->nombrep }}">
                                                @error('nombrep')
                                                    <h5>{{ $message }}</h5>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="precio">Precio:</label><br><br>
                                                <input type="double" name = "precio" class="form-control" id = "precio" value ="{{old('precio')  ?? $producto->precio }}">
                                                @error('precio')
                                                    <h5>{{ $message }}</h5>
                                                @enderror
                                               
                                                
                                            </div>
                                                <div class="form-floating mb-3">
                                                <label for="descripcion">Descripción:</label><br><br>
                                                <input type="text" class="form-control" name = "descripcion" id = "descripcion" value ="{{old('descripcion')  ?? $producto->descripcion }}"><br><br>
                                                @error('descripcion')
                                                    <h5>{{ $message }}</h5>
                                                @enderror
                                            </div>
                                            
                                            <div class="d-flex align-items-center justify-content-between mt-4 mb-0">

                                            <input type="submit" onclick="mostrarAlerta(event)" value="Enviar"class="btn btn-primary btn-lg">
                                            <a href="/producto">
                                                <button type="button" class="btn btn-secondary btn-lg">Regresar</button>
                                            </a> 
                                            </div>
                                        </form>

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
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">Copyright &copy; La Crudería 2023</div>
                    </div>
                </div>
            </footer>

                
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="{{asset('template/js/scripts.js')}}"></script>
    </body>
</html>