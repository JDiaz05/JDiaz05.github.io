<?php
include 'clientes_conexion.php';

if(!empty($_GET['id'])){
  $id=$_GET['id'];

  $sql=$conexion->query("DELETE FROM clientes WHERE id_c='$id'");
}
?>