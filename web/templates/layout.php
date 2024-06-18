<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./web/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./web/node_modules/bootstrap/dist/js/bootstrap.min.js">
    <link rel="stylesheet" href="./web/styles/navbarCliente.css">
    
    <title></title>
</head>
<body>
   
    <!-- Navbar para usuarios no administradores -->
    <nav class="custom-navbar navbar navbar-expand-md navbar-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php?ctl=inicio">Valcopy<span></span></a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarsFurni">
            <ul class="custom-navbar-nav navbar-nav flex-grow-1 justify-content-center">
                <li class="nav-item <?php if($ctl == 'inicio') echo 'active'; ?>">
                    <a class="nav-link" href="index.php?ctl=inicio">Inicio</a>
                </li>
                <li class="nav-item <?php if($ctl == 'visualizarProductos') echo 'active'; ?>">
                    <a class="nav-link" href="index.php?ctl=visualizarProductos">Productos</a></li>
                <li class="nav-item <?php if($ctl == 'contactanos') echo 'active'; ?>">
                    <a class="nav-link" href="index.php?ctl=contactanos">Contáctanos</a></li>
            </ul>
        </div>

        <div class="navbar-nav ms-auto">
            <ul class="custom-navbar-cta navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <li><a class="dropdown-item" href="index.php?ctl=registro">Registro</a></li>
                        <li><a class="dropdown-item" href="index.php?ctl=perfilUsuario">Perfil usuario</a></li>
                        <li><a class="dropdown-item" href="index.php?ctl=verPerfil">Ajustes</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="index.php?ctl=verCesta2" dir="ltr">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                        <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2"/>
                    </svg></a>
                </li>
            </ul>
        </div>
    </div>
</nav>



</body>
</html>