<?php
  include 'proveedores_conexion.php';

$id=$_GET['id'];

$sql=$conexion->query("SELECT * FROM proveedores WHERE id_pr=$id");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Modificar Proveedor</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="container mt-5">
   <form action="" method="POST">
   <h4 class="text-center alert alert-secondary">Modificar proveedor</h4>
   <input type="hidden" name="id" value="<?=$_GET['id']?>">

		 <?php
     include 'proveedores_actualizar.php';
     while($datos=$sql->fetch_object()) { ?>
     <b><p>Nombre  (max 20 caracteres):</p></b>
     <input type="text" class="form-control mb-3" name="nombre_proveedor" placeholder="Nombre" value="<?=$datos->nombre_proveedor?>" maxlength="20">
     <b><p>Telefono  (max 10 digitos):</p></b>
     <input type="text" class="form-control mb-3" name="num_telefono" placeholder="Telefono" value="<?=$datos->num_telefono?>" maxlength="10">
     <b><p>Correo electronico  (max 30 caracteres):</p></b>
     <input type="email" class="form-control mb-3" name="email" placeholder="Correo electronico" value="<?=$datos->email?>" maxlength="30">
     <b><p>Productos  (max 50 caracteres):</p></b>
     <input type="text" class="form-control mb-3" name="productos" placeholder="Productos" value="<?=$datos->productos?>" maxlength="50">
     <p>Dias de visita  (max 50 caracteres):</p>
     <input type="text" class="form-control mb-3" name="dias_de_visita" placeholder="Dias de visita" value="<?=$datos->dias_de_visita?>" maxlength="50">
     <?php } 
     ?>


       <button type="submit" class="btn btn-primary btn-block" name= "btnmodificar" value="ok">Modificar proveedor</button>
       <button type="submit" class="btn btn-danger btn-block" name= "btnproveedores" value="ok">Volver</button>
</div>
</body>
</html>