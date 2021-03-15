<?php require('../include/header.php')?>

<?php

   require('../database/db.php');

?>
<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <h1 style="width: 60%">Profesionales</h1>
            <a href="../index.php" class="btn btn-primary">Salir</a>
    </div>
</nav>
   
<div class="container card">
  
    <div class="card">
    <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Profession</th>
                        <th>Correo</th>
                        <th>Accion</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM professional";
                    $result_task = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result_task)){ ?>
                        <tr>
                            <th><?php echo $row['name'] ?></th>
                            <th><?php echo $row['lastname'] ?></th>
                            <th><?php echo $row['profession'] ?></th>
                            <th><?php echo $row['email'] ?></th>
                            <th style="width: 20%">
                                <a href="add.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary" >
                                <i class="material-icons">add</i>
                                </a>
                                <a href="delete.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" >
                                <i class="material-icons">assignment_turned_in</i>
                                </a>

                            </th>
                        </tr>
                        
                   <?php } ?>
                </tbody>

            </table>
        </div>
    </div>
</div>

<?php require('../include/footer.php')?>
