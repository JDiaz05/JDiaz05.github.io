<?php
include 'empleados_conexion.php';

if(!empty($_GET['id'])){
  $id=$_GET['id'];

  $sql=$conexion->query("DELETE FROM empleados WHERE id_e='$id'");
}
?>