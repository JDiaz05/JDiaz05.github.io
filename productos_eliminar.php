<?php
include 'productos_conexion.php';

if(!empty($_GET['id'])){
  $id=$_GET['id'];

  $sql=$conexion->query("DELETE FROM productos WHERE id_p='$id'");
}
?>