<?php 
require('database/db.php');



    if($_POST['name'] != "" && $_POST['lastname'] != "" && $_POST['profession'] != "" && $_POST['email'] != "" && $_POST['password'] != ""){
       

        //Datos
        $name = $_POST['name'];
        $lastname = $_POST['lastname'];
        $profession = $_POST['profession'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        $query = "INSERT INTO professional(name, lastname, profession, email, password) VALUES ('$name', '$lastname', '$profession', '$email', '$password')";
        $result = mysqli_query($connect, $query);
        if(!$result){
            die('query failed');
        }
        

    header("Location: formulario/loginprofessional.php");

    }else{
    header("Location: formulario/registerprofessional.php");
    }

?>