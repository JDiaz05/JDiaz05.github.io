<?php
include 'productos_conexion.php';

if(!empty($_POST['btnregistrar'])){
  if(!empty($_POST['nombre']) and !empty($_POST['precio_costo']) and !empty($_POST['precio_venta']) and !empty($_POST['codigo_de_barras']) and !empty($_POST['cantidad'])){
    $nombre=$_POST['nombre'];
    $precio_costo=$_POST['precio_costo'];
    $precio_venta=$_POST['precio_venta'];
    $codigo_de_barras=$_POST['codigo_de_barras'];
    $cantidad=$_POST['cantidad'];

    $sql=$conexion->query(" INSERT INTO productos(nombre,precio_costo,precio_venta,codigo_de_barras,cantidad)VALUES('$nombre','$precio_costo','$precio_venta', '$codigo_de_barras', '$cantidad') ");
      if($sql==1){
        Header("Location: productos.php");
      }else{
        echo "<div class='alert alert-danger'>Error al registrar producto</div>";
      }

  }else{
    echo "<div class='alert alert-warning'>Alguno de los campos esta vacio</div>";
  }
}else{}

?>