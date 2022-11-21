<?php
 session_start();

 if(empty($_SESSION['id'])){
    header('location: login.php');
 }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/a2be1a9890.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="menu_css/menu.css">
    <link rel="stylesheet" href="menu_css/barra.css">
    <title>Menú - SaveTime</title>

</head>
<body>

    <section class="content sau">
        <h2 class="title"><i class="fa-solid fa-user"></i> <?php
         echo $_SESSION['nombre'];
         ?></h2>

        <b><p class="p">Elige una opción</p></b>
        
        <div class="box-container">

            <div class="box">
            <i class="fa-solid fa-cart-shopping"></i><br>
                <a href="ventas.php" class="btn">Ventas</a>
            </div>
            <div class="box">
            <i class="fa-solid fa-barcode"></i><br>
                <a href="productos.php" class="btn">Productos</a>
            </div>
            <div class="box">
            <i class="fa-solid fa-truck-fast"></i><br>
                <a href="proveedores.php" class="btn">Proveedores</a>
            </div>

            <div class="box">
            <i class="fa-solid fa-user-group"></i><br>
                <a href="clientes.php" class="btn">Clientes</a>
            </div>

            <div class="box">
            <i class="fa-solid fa-user-tie"></i><br>
                <a href="empleados.php" class="btn">Empleados</a>
            </div>

            <div class="box">
            <i class="fa-solid fa-power-off"></i><br>
                <a href="login_cerrarsesion.php" class="btn2">Salir</a>
            </div>

        </div>

    </section>

</body>
</html>