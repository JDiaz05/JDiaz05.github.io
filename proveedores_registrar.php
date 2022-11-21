<?php
include 'proveedores_conexion.php';

if(!empty($_POST['btnregistrar'])){
  if(!empty($_POST['nombre_proveedor']) and !empty($_POST['num_telefono']) and !empty($_POST['email']) and !empty($_POST['productos']) and !empty($_POST['dias_de_visita'])){
    $nombre_proveedor=$_POST['nombre_proveedor'];
    $num_telefono=$_POST['num_telefono'];
    $email=$_POST['email'];
    $productos=$_POST['productos'];
    $dias_de_visita=$_POST['dias_de_visita'];

    $sql=$conexion->query(" INSERT INTO proveedores(nombre_proveedor,num_telefono,email,productos,dias_de_visita)VALUES('$nombre_proveedor','$num_telefono','$email', '$productos', '$dias_de_visita') ");
      if($sql==1){
        Header("Location: proveedores.php");
      }else{
        echo "<div class='alert alert-danger'>Error al registrar proveedor</div>";
      }

  }else{
    echo "<div class='alert alert-warning'>Alguno de los campos esta vacio</div>";
    Header("Location: proveedores.php");
  }
}else{}

?>