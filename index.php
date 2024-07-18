<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Red Social Emprendedores</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b028410953.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/styles.css">


</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.w3.org/html/logo/downloads/HTML5_1Color_White.png" alt="Logo" class="logo">
                Red Social Emprendedores
            </a>
            
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="login.php">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="registro.php">Registrarse</a>
                    </li>

       
                </ul>
            </div>
 
            <ul class="navbar-nav">
             
                <li class="nav-item me-4 ">
                
                <a class="btn btn-info nav-link" href="messages.php">
                <i class="fas fa-envelope"></i>
                    <span " class="position-absolute  start-10  badge rounded-pill bg-danger">
                        99+
                        <span class="visually-hidden">unread messages</span>
                    </span>
                </a>

            </li>

                <li class="nav-item me-3 ">
                
                    <a class="btn btn-warning nav-link" href="notifications.php">
                    <i class="fa-solid fa-bell"></i>
                        <span class="position-absolute top-0 start-10 badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>

                </li>

                <li class="nav-item dropdown me-5">

                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-cog"></i>
                    </button>
                    <ul class="dropdown-menu">
                        <li>  <a class="dropdown-item" href="recursos.php">Recursos</a></li>
                        <li>  <a class="dropdown-item" href="herramientas.php">Herramientas</a></li>
                        <li> <a class="dropdown-item" href="ayuda.php">Ayuda</a></li>
                        <li> <a class="dropdown-item" href="soporte.php">Soporte</a></li>
                    </ul>
                </div> 

                
                  
                </li>
                

                
            </ul>
        </div>
    </nav>

    <div class="container mt-5 d-flex">
        <div id="carouselImages" class="carousel slide" data-bs-ride="carousel" style="width: 50%;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://images.pexels.com/photos/3756679/pexels-photo-3756679.jpeg" class="d-block w-100" alt="Empresaria">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/618613/pexels-photo-618613.jpeg" class="d-block w-100" alt="Empresario">
                </div>
                <div class="carousel-item">
                    <img src="https://images.pexels.com/photos/1652295/pexels-photo-1652295.jpeg" class="d-block w-100" alt="Cafetería">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselImages" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselImages" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Siguiente</span>
            </button>
        </div>

        <div class="text-center" style="width: 50%; margin-left: 20px;">
            <h1>Bienvenido a Red Social Emprendedores</h1>
            <h2>Somos la red social que conecta negocios con clientes</h2>
            <p>Conéctate con emprendedores y usuarios, comparte tus ideas y crece juntos.</p>
            <div class="mt-4">
                <a href="login.php" class="btn btn-primary btn-lg">Iniciar Sesión</a>
                <a href="registro.php" class="btn btn-secondary btn-lg">Registrarse</a>
            </div>
        </div>
    </div>

    <footer class="footer fixed-bottom bg-dark text-white">
        <div class="container text-center">
            <p>© <?php echo date('Y'); ?> Red Social Emprendedores. Todos los derechos reservados</p>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="./js/script.js"></script>

</body>
</html>
