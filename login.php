<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Iniciar sesión - SaveTime</title> 
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <script src="https://kit.fontawesome.com/a2be1a9890.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="iniciosesion_css/estilos.css">
	

</head>  
<body>

    <form class="formulario" action="login_controlador.php" method="post">
    
    <h1>Iniciar Sesión</h1>
    <?php
    include 'login_conexion.php';
      include 'login_controlador.php';
    ?>
     <div class="contenedor">
     
     
         
         <div class="input-contenedor">
         <i class="fa-solid fa-user icon"></i>
         <input type="text" name = "usuario" placeholder="Usuario">
         
         </div>
         
         <div class="input-contenedor">
        <i class="fas fa-key icon"></i>
         <input type="password" name = "password" placeholder="Contraseña">
         
         </div>
         <input name="btningresar" type="submit" value="Aceptar" class="button">
         <p>Volver a la pagina principal <a class="link" href="index.php">Volver</a></p>
     </div>
    </form>
</body>
</html>