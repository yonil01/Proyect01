<?php require('../include/header.php')?>

<?php 
$_SESSION['nameBotton1']='Ingresar Usuario';
$_SESSION['nameBotton2']='Ingresar Profesional';
$_SESSION['valueBotton1']='../index.php';
$_SESSION['valueBotton2']='loginprofessional.php';
require('../navbar.php');
?>



<div class="container mt-5">

    
<form action="../register.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre</label>
    <input 
    type="text" 
    class="form-control " 
    style="width: 50%" 
    aria-describedby="emailHelp" 
    placeholder="Nombre"
    name="name">

    <label for="exampleInputEmail1">apellido</label>
    <input 
    type="text" 
    class="form-control " 
    style="width: 50%" 
    aria-describedby="emailHelp" 
    placeholder="apellido"
    name="lastname">

    <label for="exampleInputEmail1">profesion</label>
    <input 
    type="text" 
    class="form-control" 
    style="width: 50%" 
    aria-describedby="emailHelp" 
    placeholder="Profesion"
    name="profession">

    <label for="exampleInputEmail1">Correo</label>
    <input 
    type="text" 
    class="form-control " 
    style="width: 50%" 
    aria-describedby="emailHelp" 
    placeholder="correo"
    name="email">

    <label for="exampleInputEmail1">contraseña</label>
    <input 
    type="text" 
    class="form-control " 
    style="width: 50%" 
    aria-describedby="emailHelp" 
    placeholder="contraseña"
    name="password">
    
  </div>
  <button type="submit" class="btn btn-primary mt-3">Ingresar</button>
</form>
</div>

<?php require('../include/footer.php')?>
