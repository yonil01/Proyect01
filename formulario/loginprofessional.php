<?php require('../include/header.php')?>

<?php 
$_SESSION['nameBotton1']='Ingresar Usuario';
$_SESSION['nameBotton2']='Registrar Profesional';
$_SESSION['valueBotton1']='../index.php';
$_SESSION['valueBotton2']='registerprofessional.php';
require('../navbar.php');
?>

<div class="container mt-5">

<form action="../veryfi.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del usuario</label>
    <input 
    type="text" 
    class="form-control " 
    style="width: 50%" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp" 
    placeholder="Escribe Nombre"
    name="email"
    >

    <label for="exampleInputEmail1">Contraseña</label>
    <input 
    type="password" 
    class="form-control mt-2" 
    style="width: 50%" 
    id="exampleInputEmail1" 
    aria-describedby="emailHelp" 
    placeholder="Escribe Nombre"
    name="password"
    
    >


  </div>
  <button type="submit" class="btn btn-primary mt-3">Ingresar</button>
</form>
</div>


<?php require('../include/footer.php')?>