<?php 

require('../include/header.php');
require('../database/db.php');
$id = $_GET['id'];

?>

<div class="container mt-5">

    
<form action="add.php?id=<?=$id ?>" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Titulo</label>
    <input 
    type="text" 
    class="form-control " 
    style="width: 50%" 
    aria-describedby="emailHelp" 
    placeholder="Titulo"
    name="title">
    
  </div>
  <button type="submit" class="btn btn-primary mt-3">Registrar</button>
</form>
</div>


<?php 

    

require('../include/footer.php'); 

if(isset($_POST['title'])){
    if($_POST['title'] != ""){
        
        $id = $_GET['id'];
        echo $id;
        $title = $_POST['title'];
        $query = "INSERT INTO citas(user, title) VALUES ('$id', '$title')";
        $result = mysqli_query($connect, $query);
        if(!$result){
            die('query failed');
        }
        $_SESSION['newuser']='jdwjajd';
        header("Location: home.php");
    }else{
        
    }
}


?>
