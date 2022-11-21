<?php
 include 'clientes_conexion.php';
 if(!empty($_POST['btnmodificar'])){
   if(!empty($_POST['nombre']) and !empty($_POST['num_telefono']) and !empty($_POST['email']) and !empty($_POST['domicilio'])){

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $num_telefono=$_POST['num_telefono'];
    $email=$_POST['email'];
    $domicilio=$_POST['domicilio'];
    $comentarios=$_POST['comentarios'];

    $sql=$conexion->query("UPDATE clientes SET nombre='$nombre',num_telefono='$num_telefono',email='$email',domicilio='$domicilio',comentarios='$comentarios' WHERE id_c=$id");
    //Si tienes en tu base de datos un atributo con valor int no pongas ningunas comillas solo el caracter $//
    
    if($sql==1){
      Header("Location: clientes.php");
    }else{
      echo "<div class= 'alert alert-danger'>Error al modificar cliente</div>";
    }
  }else{
    echo "<div class= 'alert alert-warning'>Alguno de los campos esta vacio</div>";
   }
 }
 if(!empty($_POST["btnclientes"])){
  Header("Location: clientes.php");
 }
?>