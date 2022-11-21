<?php
  include 'productos_conexion.php';

$id=$_GET['id'];

$sql=$conexion->query("SELECT * FROM productos WHERE id_p=$id");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modificar Producto</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
    <form action="" method="POST">
    <h4 class="text-center alert alert-secondary">Modificar producto</h4>
    <input type="hidden" name="id" value="<?=$_GET['id']?>">

			<?php
      include 'productos_actualizar.php';
      while($datos=$sql->fetch_object()) { ?>
      <b><p>Nombre del producto  (max 30 caracteres):</p></b>
      <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre" value="<?=$datos->nombre?>" maxlength="30">
      <b><p>Precio de compra  (max 10 digitos):</p></b>
      <input type="text" class="form-control mb-3" name="precio_costo" placeholder="Precio costo" value="<?=$datos->precio_costo?>" maxlength="10">
      <b><p>Precio de venta  (max 10 digitos):</p></b>
      <input type="text" class="form-control mb-3" name="precio_venta" placeholder="Precio venta" value="<?=$datos->precio_venta?>" maxlength="10">
      <b><p>Codigo de barras  (max 20 caracteres):</p></b>
      <input type="text" class="form-control mb-3" name="codigo_de_barras" placeholder="Codigo de barras" value="<?=$datos->codigo_de_barras?>" maxlength="20">
      <b><p>Cantidad  (max 10 digitos):</p></b>
      <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad" value="<?=$datos->cantidad?>" maxlength="10">
        <?php } 
        ?>


          <button type="submit" class="btn btn-primary btn-block" name= "btnmodificar" value="ok">Modificar producto</button>
          <button type="submit" class="btn btn-danger btn-block" name= "btnproductos" value="ok">Volver</button>
</div>
</body>
</html>