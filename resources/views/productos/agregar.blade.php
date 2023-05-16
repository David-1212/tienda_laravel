<!DOCTYPE html>
<html lang="en">
    <head>

        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login - SB Admin</title>


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
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Agregar producto</h3></div>
                                    <div class="card-body">
                                        <form action="/producto" method="post">
                                            @csrf
                                            <div class="form-floating mb-3">
                                                <label for="nombrep"> <b>Nombre:</b></label><br><br>
                                                <input type="text" name = "nombrep" id = "nombrep" class="form-control" placeholder="centenario" value ="{{old('nombrep')}}">
                                                @error('nombrep')
                                                    <h5>{{ $message }}</h5>
                                                @enderror
                                            </div>
                                            <div class="form-floating mb-3">
                                                <label for="precio"><b>Precio:</b></label><br><br>
                                                <input type="double" name = "precio" class="form-control" id = "precio"  placeholder="250" value ="{{old('precio')}}">
                                                @error('precio')
                                                    <h5>{{ $message }}</h5>
                                                @enderror
                                               
                                                
                                            </div>
                                                <div class="form-floating mb-3">
                                                <label for="descripcion"><b>Descripción: </b> </label><br><br>
                                                <input type="text" class="form-control" name = "descripcion" id = "descripcion" placeholder="tequila" value ="{{old('descripcion')}}"><br>
                                                @error('descripcion')
                                                    <h5 font-size: small >{{ $message }}</h5>
                                                @enderror
                                            </div>
                                            
                                                <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <input type="submit" value="Enviar"onclick="mostrarAlerta(event)"class="btn btn-primary btn-lg ">
                                                
                                            </div>
                                        </form>
                                        <script>
                                              function mostrarAlerta(event) {
                                                event.preventDefault(); // Evita que el formulario se envíe automáticamente

                                                Swal.fire({
                                                    title: 'Registro agregado',
                                                    text: 'El registro se ha agregado exitosamente.',
                                                    icon: 'success',
                                                    confirmButtonText: 'Aceptar'
                                                }).then(() => {
                                                    // Envía el formulario después de que se muestra la alerta
                                                    event.target.closest('form').submit();
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
