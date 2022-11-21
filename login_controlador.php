<?php 
 session_start();

 include 'login_conexion.php';
if(!empty($_POST['btningresar'])){
    if(!empty($_POST['usuario']) and !empty($_POST['password'])){

     $usuario=$_POST['usuario'];
     $password=$_POST['password'];
     
      $sql=$conexion->query("SELECT * FROM usuario  WHERE usuario='$usuario' and contraseña='$password'");

      if($datos=$sql->fetch_object()){
        $_SESSION['id']=$datos->id;
        $_SESSION['nombre']=$datos->nombre;
        $_SESSION['usuario']=$datos->usuario;
       HEADER('Location: menu.php');
      }else{
       echo "<div>Acceso denegado</div>";
      }


    }else{
        echo "Campos vacios";
    }
}
?>