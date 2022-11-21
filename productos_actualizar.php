<?php
 include 'productos_conexion.php';
 if(!empty($_POST['btnmodificar'])){
   if(!empty($_POST['nombre']) and !empty($_POST['precio_costo']) and !empty($_POST['precio_venta']) and !empty($_POST['codigo_de_barras'])){

    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio_costo=$_POST['precio_costo'];
    $precio_venta=$_POST['precio_venta'];
    $codigo_de_barras=$_POST['codigo_de_barras'];
    $cantidad=$_POST['cantidad'];

    $sql=$conexion->query("UPDATE productos SET nombre='$nombre',precio_costo=$precio_costo,precio_venta=$precio_venta,codigo_de_barras='$codigo_de_barras',cantidad=$cantidad WHERE id_p=$id");
    //Si tienes en tu base de datos un atributo con valor int no pongas ningunas comillas solo el caracter $//
    
    if($sql==1){
      Header("Location: productos.php");
    }else{
      echo "<div class= 'alert alert-danger'>Error al modificar producto</div>";
    }
  }else{
    echo "<div class= 'alert alert-warning'>Alguno de los campos esta vacio</div>";
   }
 }
 if(!empty($_POST["btnproductos"])){
  Header("Location: productos.php");
 }
?>
 