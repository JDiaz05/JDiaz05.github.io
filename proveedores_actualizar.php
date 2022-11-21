<?php
 include 'proveedores_conexion.php';
 if(!empty($_POST['btnmodificar'])){
   if(!empty($_POST['nombre_proveedor']) and !empty($_POST['num_telefono']) and !empty($_POST['email']) and !empty($_POST['productos']) and !empty($_POST['dias_de_visita'])){

    $id=$_POST['id'];
    $nombre_proveedor=$_POST['nombre_proveedor'];
    $num_telefono=$_POST['num_telefono'];
    $email=$_POST['email'];
    $productos=$_POST['productos'];
    $dias_de_visita=$_POST['dias_de_visita'];

    $sql=$conexion->query("UPDATE proveedores SET nombre_proveedor='$nombre_proveedor',num_telefono='$num_telefono',email='$email',productos='$productos',dias_de_visita='$dias_de_visita' WHERE id_pr=$id");
    //Si tienes en tu base de datos un atributo con valor int no pongas ningunas comillas solo el caracter $//
    
    if($sql==1){
      Header("Location: proveedores.php");
    }else{
      echo "<div class= 'alert alert-danger'>Error al modificar proveedor</div>";
    }
  }else{
    echo "<div class= 'alert alert-warning'>Alguno de los campos esta vacio</div>";
   }
 }
 if(!empty($_POST["btnproveedores"])){
  Header("Location: proveedores.php");
 }
?>
 