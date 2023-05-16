
<x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Producto</title>
            <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
            <script src="{{ asset('resources/js/app.js') }}"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
            <link rel="shortcut icon" href="{{asset('template/resources/img/agave.png')}}">
            <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
            <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
        </head>
        
        <body class="sb-nav-fixed">
            <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
                <!-- Navbar Brand-->
                <img src="{{asset('template/resources/img/agave.png')}}"width="50" height="50">
                <a class="navbar-brand ps-3" href="index.html">La Cruderia</a>
                <!-- Sidebar Toggle-->
                <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
                <!-- Navbar Search-->
            
                <!-- Navbar-->
                <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                    
                </ul>
            </nav>
            
            <div id="layoutSidenav">
                
            <div id="layoutSidenav_nav">
                    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                        <div class="sb-sidenav-menu">
                            <div class="nav">
                                
                                <div class="sb-sidenav-menu-heading">Conócenos</div>
                                <a class="nav-link collapsed" href="/about" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="fas fa-phone-volume"><i class="fas fa-columns"></i></div>
                                    Acerca de nosotros
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                
                                <div class="sb-sidenav-menu-heading">Crudería</div>
                                <a class="nav-link" href="../">
                                    <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                                    Home
                                </a>
                                <a href="/producto" class="nav-link" href="tables.html">
                                    <div class="sb-nav-link-icon"><i class="fas fa-glass-cheers"></i></div>
                                    Productos
                                </a>
                            </div>
                        </div>
                        <div class="sb-sidenav-footer">
                            <div class="small">Encuéntranos como:</div>
                            cruderíajal@gmail.com
                        </div>
                    </nav>
                </div>

                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-4">
                            <h1 class="mt-4">Productos</h1>
                            
                            <br><a href="/producto/create" class="btn btn-success">Agregar</a><br><br>
                            <!--TABLA-->
                            <div class="card mb-4">
                                <div class="card-header">
                                    <i class="fas fa-table me-1"></i>
                                    Licores
                                </div>
                                <div class="card-body">
                                    <table id="datatablesSimple">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Nombre</th>
                                                <th>Costo</th>
                                                <th>Descripción</th>
                                                <th>           </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($productos as $prod)
                                            <tr>
                                                <td>{{ $prod->id }}</td>
                                                <td>{{ $prod->nombrep }}</td>
                                                <td>{{ $prod->precio }}</td>
                                                <td>{{ $prod->descripcion }}</td>
                                                <td>
                                                <form action="{{route ('producto.destroy',$prod->id)}}" method="POST">
                                                    <a href="/producto/{{ $prod->id}}/edit" class="btn btn-info">Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                        <button type="submit" onclick="mostrarAlerta(event)"class="btn btn-danger">Borrar</button>
                                                </form>

                                                <script>
                                                     function mostrarAlerta(event) {
                                                        event.preventDefault(); // Evita que el formulario se envíe automáticamente

                                                        Swal.fire({
                                                            title: '¿Estás seguro?',
                                                            text: 'Esta acción eliminará el registro permanentemente. ¿Deseas continuar?',
                                                            icon: 'warning',
                                                            showCancelButton: true,
                                                            confirmButtonText: 'Sí, eliminar',
                                                            cancelButtonText: 'Cancelar'
                                                        }).then((result) => {
                                                            if (result.isConfirmed) {
                                                                // Si el usuario confirma, se envía el formulario
                                                                event.target.closest('form').submit();
                                                            }
                                                        });
                                                    }
                                                </script>

                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </main>
                        <footer class="py-4 bg-light mt-auto">
                            <div class="container-fluid px-4">
                                <div class="d-flex align-items-center justify-content-between small">
                                    <div class="text-muted">Copyright &copy; La Crudería 2023</div>
                                </div>
                            </div>
                        </footer>
                        
                        
            <script src="{{asset('template/js/scripts.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="{{asset('template/js/datatables-simple-demo.js')}}datatables-simple-demo.js"></script>
            <script src="{{asset('template/js/datatables-simple-demo.js')}}"></script>
        </body>
    </html>
</x-app-layout>