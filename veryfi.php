<?php 
require('database/db.php');

     if($_POST['email'] != "" && $_POST['password'] != ""){
        $email = $_POST['email'];
        $password = $_POST['password'];

    //Peticion
    $query = "SELECT * FROM professional WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($connect, $query);
    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_array($result);
        $id = $row['id'];
        $name = $row['name'];

        header("Location: home/homeprofessional.php?id=$id&name=$name");
    }else{
        header("Location: formulario/loginprofessional.php");
    }

    }else{
    header("Location: formulario/loginprofessional.php");
    } 

?>