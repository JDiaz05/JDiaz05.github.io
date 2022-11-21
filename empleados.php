<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="clientes_css/estilos.css">
    <title>Empleados - SaveTime</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/a2be1a9890.js" crossorigin="anonymous"></script>
</head>
<body>

 <script>
  function eliminar(){
    var respuesta=confirm("¿Estas seguro que deseas eliminar este empleado?"); 
    return respuesta
  }
 </script>

<header>
      <div class="contenedor">
        <h1><i class="fa-solid fa-user-tie"></i>  Empleados</h1>
        <input type="checkbox" id="menu-bar">
        <label class="icon-menu" for="menu-bar"></label>
        <nav class="menu">
          <a href="ventas.php">Ventas</a>
          <a href="productos.php">Productos</a>
          <a href="proveedores.php">Proveedores</a>
          <a href="clientes.php">Clientes</a>
          <a href="menu.php">Menu</a>
        </nav>
      </div>
</header>


<div class="container mt-5">

<div class="row">

  <div class="col-md-3">
     <br>     
     <h3>Nuevo empleado</h3>
       
       <?php
         include 'empleados_conexion.php';
         include 'empleados_registrar.php';
         include 'empleados_eliminar.php';

       ?>

     <form action="empleados_registrar.php" method="post">
      <input type="text" class="form-control mb-3" name="nombre" placeholder="Nombre  (max 40 caracteres)" maxlength="40">
      <input type="text" class="form-control mb-3" name="num_telefono" placeholder="Telefono  (max 10 digitos)" maxlength="10">
      <input type="email" class="form-control mb-3" name="email" placeholder="Correo electronico  (max 30 caracteres)" maxlength="30">
      <input type="text" class="form-control mb-3" name="domicilio" placeholder="Domicilio  (max 40 caracteres)" maxlength="40">
      <input type="text" class="form-control mb-3" name="comentarios" placeholder="Nota/comentarios (max 50 caracteres)" maxlength="50">

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
          <th>Telefono</th>
          <th>Correo electronico</th>
          <th>Domicilio</th>
          <th>Nota/comentarios</th>
          <th></th>
          <th></th>
        </tr>
      </thead>
        <tbody>
          <?php
            include 'empleados_conexion.php';
            $sql=$conexion->query("SELECT * from empleados");
            while($empleados=$sql->fetch_object()){ ?>
          <tr>
            <td><?=$empleados->id_e?></td>
            <td><?=$empleados->nombre?></td>
            <td><?=$empleados->num_telefono?></td>
            <td><?=$empleados->email?></td>
            <td><?=$empleados->domicilio?></td>
            <td><?=$empleados->comentarios?></td>
            <td>
              <a href="empleados_modificar.php?id=<?= $empleados->id_e?>" class="btn btn-small btn-primary"><i class="fa-solid fa-pen-to-square"></i></a>
            </td>
            <td>
              <a onclick="return eliminar()" href="empleados.php?id=<?= $empleados->id_e?>" class="btn btn-small btn-danger"><i class="fa-solid fa-trash"></i></a>
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