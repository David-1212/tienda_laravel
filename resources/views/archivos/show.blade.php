<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Info del archivo</title>
            <link rel="shortcut icon" href="{{asset('template/resources/img/agave.png')}}">
            <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
            <link href="{{asset('template/css/styles.css')}}" rel="stylesheet" />
            <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
            <!-- Google Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
        </head>
        
        <body class="sb-nav-fixed">
            
            
            <div id="layoutSidenav">
                
            <div id="layoutSidenav_nav">
                    
                </div>

                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-4">
                            
                            
                            
                            <div class="col-xl-6"style="text-align: center">
                                    <div class="card mb-4">
                                        <div class="card-header">
                                            <br><br><strong >DATOS DEL ARCHIVO</strong> <br><br>
                                        </div >
                                            <p style="text-align: justify"><p>Nombre: {{ $archivo->nombre }}</p>
                                            <p>Ruta: {{ $archivo->ruta }}</p>
                                            <a href="{{ route('archivo.index') }}">Volver al listado</a>
                                        </p>
                                        
                                    </div>
                            </div>

                            
                        </div>
                        

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="{{asset('template/js/scripts.js')}}"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="{{asset('template/resources/demo/chart-area-demo.js')}}"></script>
            <script src="{{asset('template/resources/demo/chart-bar-demo.js')}}"></script>
            <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
            <script src="{{asset('template/js/datatables-simple-demo.js')}}datatables-simple-demo.js"></script>
        </body>
    </html>

