<x-app-layout>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>La cruderia</title>
        <link rel="shortcut icon" href="{{asset('template/resources/img/agave.png')}}">
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    
    <body class="sb-nav-fixed">
        
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">


            <!-- Navbar Brand-->
            <img src="{{asset('template/resources/img/agave.png')}}"width="50" height="50">
            <a class="navbar-brand ps-3" >La Cruderia</a>
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
                            <a class="nav-link" href="#">
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
                        <h1 class="mt-4">Productos</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Productos Estrella</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Tequila</div>
                                    <img src="{{asset('template/resources/tequila.webp')}}">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <details>
                                        <summary>Ver detalles</summary>
                                        Bebida alcohólica que se obtiene por fermentación y destilación del jugo de una variedad de maguey; es originaria de México.
                                </details>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Whisky</div>
                                    <img src="{{asset('template/resources/Whisky.png')}}">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <details>
                                        <summary>Ver detalles</summary>
                                        Bebida alcohólica de alta graduación que se obtiene por destilación de cebada y otros cereales.
                                    </details>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Vodka</div>
                                    <img src="{{asset('template/resources/vodka.png')}}">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <details>
                                        <summary>Ver detalles</summary>
                                        Es un destilado de proviene de la fermentación de patata, trigo, cebada, uva, remolacha y en general cualquier planta rica en almidón.
                                    </details>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Ron</div>
                                    <img src="{{asset('template/resources/ron.png')}}" >
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <details>
                                        <summary>Ver detalles</summary>
                                        El ron es una bebida alcohólica, elaborada a partir de la fermentación y destilación de la melaza o el jugo de la caña de azúcar.
                                    </details>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            
                            <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Brnady</div>
                                    <img src="{{asset('template/resources/brandy.png')}}">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <details>
                                        <summary>Ver detalles</summary>
                                        Es un aguardiente obtenido a través de la destilación del vino, casi siempre con un 36-40 % (hasta un 60 %) de volumen de alcohol.
                                </details>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body" hight="300">Sidra</div>
                                    <img src="{{asset('template/resources/sidra.webp')}}">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <details>
                                        <summary>Ver detalles</summary>
                                        Se trata de una bebida con alcohol que se produce a partir de la fermentación.
                                    </details>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Ginebra</div>
                                    <img src="{{asset('template/resources/ginebra.png')}}"hight="300">
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <details>
                                        <summary>Ver detalles</summary>
                                        La ginebra es una bebida alcohólica que proviene del destilado de cereales como el centeno, la cebada o el maíz, que se aromatiza con bayas de enebro.
                                    </details>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Soju</div>
                                    <img src="{{asset('template/resources/soju.webp')}}" >
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                    <details>
                                        <summary>Ver detalles</summary>
                                        El soju es una bebida destilada nativa de Corea, tradicionalmente hecha con arroz, aunque la mayoría de las marcas más importantes suplementan.
                                    </details>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            
                           
                        </div>  
                    </div>

                    <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <br><br><strong>Nuestro orgullo, escencia y valores </strong> <br><br>
                                    </div ><p style="text-align: justify">LA CRUDERÍA es una empresa dedicada a la producción y comercialización de licor 100% puro 
                                    para el deleite de los más exigentes paladares, difundiendo las tradiciones y valores distintivos 
                                    de nuestra cultura Mexicana, gracias a los más altos estándares de calidad que ofrecemos en nuestros 
                                    productos. </p>
                                    <p style="text-align: justify">Somos una empresa altamente competitiva y sobre todo 100% Mexicana superando las expectativas 
                                    de los consumidores, posicionándose sutilmente en el mercado Internacional.</p>
                                </div>
                            </div>
                    </div>
                    <footer class="py-4 bg-light mt-auto">
                        <div class="container-fluid px-4">
                            <div class="d-flex align-items-center justify-content-between small">
                                <div class="text-muted">Copyright &copy; La Crudería 2023</div>
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