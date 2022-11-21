<?php
include 'proveedores_conexion.php';

if(!empty($_GET['id'])){
  $id=$_GET['id'];

  $sql=$conexion->query("DELETE FROM proveedores WHERE id_pr='$id'");
}
?>