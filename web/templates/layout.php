<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/12b88bff3d.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./web/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="./web/node_modules/bootstrap/dist/js/bootstrap.min.js">


   
    <link rel="stylesheet" href="./web/styles/navbarCliente.css">
    <link rel="stylesheet" href="./web/styles/inicio.css">
    <link rel="stylesheet" href="./web/styles/registrarse.css">
   

    
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
    <li class="nav-link">
        <div class="button-user">
            <div class="icon">
             <i class="fas fa-user"></i>
            </div>
            <a href="index.php?ctl=registrarse"><span>Registrarse</span></a>
        </div>
    </li>
    <li class="nav-link">
        <div class="button-cart">
            <div class="icon">
                <i class="fas fa-cart-plus"></i>
            </div>
            <span>Pedidos</span>
        </div>
    </li>
</ul>

</div>
    </div>
</nav>


</body>
</html>