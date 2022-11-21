<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="productos_css/estilos.css">
    <title>Productos - SaveTime</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a2be1a9890.js" crossorigin="anonymous"></script>

</head>
<body>

 <script>
  function eliminar(){
    var respuesta=confirm("¿Estas seguro que deseas eliminar este producto?"); 
    return respuesta
  }
 </script>

<header>
      <div class="contenedor">
        <h1><i class="fa-solid fa-barcode"></i>  Productos</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="ventas.php">Ventas</a>
          <a href="proveedores.php">Proveedores</a>
          <a href="clientes.php">Clientes</a>
          <a href="empleados.php">Empleados</a>
          <a href="menu.php">Menu</a>
        </nav>
      </div>
</header>


<div class="container mt-5">

<div class="row">

  <div class="col-md-3">
     <br>     
     <h3>Nuevo producto</h3>
       
       <?php
         include 'productos_conexion.php';
         include 'productos_registrar.php';
         include 'productos_eliminar.php';

       ?>

     <form action="productos_registrar.php" method="post">
      <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre  (max 30 caracteres)" maxlength="30">
      <input type="text" class="form-control mb-3" name="precio_costo" placeholder="Precio costo  (max 10 digitos)" maxlength="10">
      <input type="text" class="form-control mb-3" name="precio_venta" placeholder="Precio venta  (max 10 digitos)" maxlength="10">
      <input type="text" class="form-control mb-3" name="codigo_de_barras" placeholder="Codigo de barras  (max 20 caracteres)" maxlength="20">
      <input type="text" class="form-control mb-3" name="cantidad" placeholder="Cantidad  (max 10 digitos)" maxlength="10">

      <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
     </form>
  </div>

  <div class="col-md-8">
     <table class="table">
     <thead class="table-warning table-striped">
        <br>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Precio costo</th>
          <th>Precio venta</th>
          <th>Codigo de barras</th>
          <th>Cantidad</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
        <tbody>
          <?php
            include 'productos_conexion.php';
            $sql=$conexion->query("SELECT * from productos");
            while($productos=$sql->fetch_object()){ ?>
          <tr>
            <td><?=$productos->id_p?></td>
            <td><?=$productos->nombre?></td>
            <td><?=$productos->precio_costo?></td>
            <td><?=$productos->precio_venta?></td>
            <td><?=$productos->codigo_de_barras?></td>
            <td><?=$productos->cantidad?></td>
            <td>
              <a href="productos_modificar.php?id=<?= $productos->id_p?>" class="btn btn-small btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
            <td>
              <a onclick="return eliminar()" href="productos.php?id=<?= $productos->id_p?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
            </td>
          </tr>

           <?php }
          ?>

        </tbody>
    </table>
    </div>
  </div>
</div>



    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>