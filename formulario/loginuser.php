
<?php 
$_SESSION['nameBotton1']='Ingresar Profesional';
$_SESSION['nameBotton2']='Registrar Profesional';
$_SESSION['valueBotton1']='formulario/loginprofessional.php';
$_SESSION['valueBotton2']='formulario/registerprofessional.php';
require('./navbar.php');
?>



<div class="container mt-5">
<form action="./home/home.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nombre del usuario</label>
    <input 
    type="text" 
    class="form-control " 
    style="width: 50%"  
    id="exampleInputEmail1" 
    aria-describedby="emailHelp" 
    name="username"
    placeholder="Escribe Nombre">
  </div>
  <button type="submit" class="btn btn-primary mt-3">Ingresar</button>
</form>
</div>