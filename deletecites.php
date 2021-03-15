<?php

    require('database/db.php');
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    $query = "DELETE FROM citas WHERE id = $id";
    $result = mysqli_query($connect, $query);

    if(!$result) {
        die("Query failed");
    }

    header("Location: home/homeprofessional.php");
    }

?>