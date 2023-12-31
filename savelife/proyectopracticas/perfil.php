<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configuración</title>
    <link rel="stylesheet" href="./CSS/perfil.css">
    <link rel="stylesheet" href="./CSS/sidebar.css">
    <script src="https://kit.fontawesome.com/eb576a252a.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body> 

    <div class="row">
        <aside id="sidebar">
            <div class="h-100">
                <div class="sidebar-logo">
                    <p> Save a life </p>
                </div>
                <!-- Sidebar Navigation -->
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="index.php" class="sidebar-link">
                            <i class="fa-solid fa-house pe-2"></i>
                            Inicio
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="perfil.php" class="sidebar-link">
                            <i class="fa-solid fa-user pe-2"></i>
                            Perfil
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="mis-denuncias.php" class="sidebar-link">
                            <i class="fa-solid fa-truck-medical pe-2"></i>
                            Denuncias
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="logout.php" class="sidebar-link">
                            <i class="fa-solid fa-right-to-bracket pe-2"></i>
                            Cerrar sesion
                        </a>
                    </li>
                </ul>
            </div>    
        </aside>

        <div class="col-9" id="right-col">
                <nav class="navbar navbar-expand px-3 ">
                    <!-- Button for sidebar toggle -->
                    <button class="btn" type="button" data-bs-theme="light">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </nav>
            <div class="main-right-container">
                <h3>Mis datos</h3>
                <div class="content-right-col">
                    <ul class="list-type">
                        <li class="list-element"><b>Nombre y apellido</b></li>
                        <li class="list-element"><b>Correo Eléctronico</b></li>
                        <li class="list-element"><b>Contraseña</b></li>
                        <li class="list-element"><b>Teléfono</b></li>
                        <li class="list-element"><b>Fecha de nacimiento</b></li>
                    </ul>
                    <?php include("perfil-back.php")?>
                

                </div>

            </div>
        </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-3">
                    <img src="./IMAGENES/Logo proyecto.png" alt="">
                </div>
                <div class="col-3">
                    <h2>Alumno 1</h2><br>
                    <i class="fa-regular fa-user"></i>
                    Duette Gonzalo<br>
                    <i class="fa-regular fa-envelope"></i>
                    43851204@itbeltran.com.ar <br>   
                    <i class="fa-solid fa-location-dot"></i>
                    Instituto tecnológico beltran
                </div>
                <div class="col-3">
                    <h2>Alumno 2</h2><br>
                    <i class="fa-regular fa-user"></i>
                    Bossio Maximiliano<br>
                    <i class="fa-regular fa-envelope"></i>
                    24481923@itbeltran.com.ar <br>   
                    <i class="fa-solid fa-location-dot"></i>
                    Instituto tecnológico beltran
                </div>
                <div class="col-3">
                    <h2>Alumno 3</h2><br>
                    <i class="fa-regular fa-user"></i>
                    Patitucci Sebastián<br>
                    <i class="fa-regular fa-envelope"></i>
                    44209384@itbeltran.com.ar <br>   
                    <i class="fa-solid fa-location-dot"></i>
                    Instituto tecnológico beltran
                </div>
            </div>
        </div>
    </footer>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>