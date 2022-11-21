<?php
include 'clientes_conexion.php';

if(!empty($_POST['btnregistrar'])){
  if(!empty($_POST['nombre']) and !empty($_POST['num_telefono']) and !empty($_POST['email']) and !empty($_POST['domicilio'])){
    $nombre=$_POST['nombre'];
    $num_telefono=$_POST['num_telefono'];
    $email=$_POST['email'];
    $domicilio=$_POST['domicilio'];
    $comentarios=$_POST['comentarios'];

    $sql=$conexion->query(" INSERT INTO clientes(nombre,num_telefono,email,domicilio,comentarios)VALUES('$nombre','$num_telefono','$email', '$domicilio', '$comentarios') ");
      if($sql==1){
        echo "<div class='alert alert-success'>Cliente registrado correctamente</div>";
        Header("Location: clientes.php");
      }else{
        echo "<div class='alert alert-danger'>Error al registrar cliente</div>";
      }

  }else{
    echo "<div class='alert alert-warning'>Alguno de los campos esta vacio</div>";
    Header("Location: clientes.php");
  }
}else{
    
}

?>