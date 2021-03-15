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
    <h2>Citas de los usuarios</h2>
    <div class="col-md-8">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Usuario</th>
                        <th>titulo</th>
                        <th>fecha</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = "SELECT * FROM citas";
                    $result_task = mysqli_query($connect, $query);

                    while($row = mysqli_fetch_array($result_task)){ ?>
                        <tr>
                            <th><?php echo $row['user'] ?></th>
                            <th><?php echo $row['title'] ?></th>
                            <th><?php echo $row['date'] ?></th>
                            <th>
                                <a href="../deletecites.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" >
                                <i class="material-icons">delete</i>
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
