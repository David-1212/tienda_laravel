
<x-app-layout><!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>La Cruderia </title>
            <link rel="shortcut icon" href="{{asset('template/resources/img/agave.png')}}">
            <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
            <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
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
                                <a class="nav-link collapsed" href="#" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                    <div class="fas fa-phone-volume"><i class="fas fa-columns"></i></div>
                                    Acerca de nosotros
                                    <div class="sb-sidenav-collapse-arrow"></div>
                                </a>
                                
                                <div class="sb-sidenav-menu-heading">Crudería</div>
                                <a class="nav-link" href="../">
                                    <div class="sb-nav-link-icon"><i class="fas fa-school"></i></div>
                                    Home
                                </a>
                                <a class="nav-link" href="/producto">
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
                            <h1 class="mt-4" style="text-align: center">Acerca de nosotros:</h1><br>
                            <ol class="breadcrumb mb-4">

                            </ol>
                            <div class="row">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-primary text-white mb-4">
                                        <div class="card-body"style="text-align: center">Ulises Vallejo</div>
                                        <img src="{{asset('template/resources/team/ulises.jpg')}}">
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        <a href="https://github.com/UlisesVallejo"target="_blank">
                                                <img src="{{asset('template/resources/redesS/github.svg')}}">
                                            </a> 
                                            <img src="{{asset('template/resources/redesS/facebook.svg')}}">
                                            <img src="{{asset('template/resources/redesS/twitter.svg')}}">
                                        </div>
                                    </div>
                                    
                            </div>
                            <div class="col-xl-6">
                                    <div class="card mb-4">
                                        <div class="card-header"style="text-align: center">
                                            <br><br><strong >Quienes somos? </strong> <br><br>
                                        </div ><p style="text-align: justify">En nombre del equipo de desarrolladores de La Crudería, como miembros de el Centro Universitario de Ciencias Exactas e Ingenierías CUCEI, compartimos nuestra colaboración para el desarrollo web del sitio de la empresa, fungiendo así tanto David Guadalupe Vargas López como José Ulises Vallejo Sierra en los diferentes requerimientos propuestos, tanto como el desarrollo de la base de datos y el CRUD en su tabla de productos de licores y sus respectivas migraciones, el uso de sesiones dentro del sitio con la herramienta Jetstream, las validacioness en los formularios, así como la implementación de frameworks (bootstrap) para la plantilla de los estilos CSS
                                        productos. </p>
                                        <p style="text-align: justify">Somos una empresa altamente competitiva y sobre todo 100% Mexicana superando las expectativas 
                                        de los consumidores, posicionándose sutilmente en el mercado Internacional.</p>
                                    </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body"style="text-align: center">David Vargas</div>
                                        <img src="{{asset('template/resources/team/david.jpg')}}">
                                        <div class="card-footer d-flex align-items-center justify-content-between">
                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                            <a href="https://github.com/David-1212"target="_blank">
                                                <img src="{{asset('template/resources/redesS/github.svg')}}">
                                            </a> 
                                            <img src="{{asset('template/resources/redesS/facebook.svg')}}">
                                            <img src="{{asset('template/resources/redesS/twitter.svg')}}">
                                        </div>
                                    </div>
                                </div>   
                            </div> 
                        </div>
                        <footer class="py-4 bg-light mt-auto">
                            <div class="container-fluid px-4">
                                <div class="d-flex align-items-center justify-content-between small">
                                    <div class="text-muted">Copyright &copy; La Crudería 2023
                                    <a href ="../archivo">Autenticarme</a>
                                    </div>
                                </div>
                            </div>
                        </footer>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="{{asset('template/js/scripts.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="{{asset('template/resources/demo/chart-area-demo.js')}}"></script>
            <script src="{{asset('template/resources/demo/chart-bar-demo.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="{{asset('template/js/datatables-simple-demo.js')}}datatables-simple-demo.js"></script>
        </body>
    </html>
</x-app-layout>
