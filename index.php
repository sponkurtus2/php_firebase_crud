<?php
session_start();
include('includes/header.php');
?>

   <div class="container">
    <div class="row">
        <div class="col-md-12">

        <?php
        if (isset($_SESSION['status'])) {
            echo "<h5 class='alert alert-succes'>".$_SESSION['status']."</h5>";
            unset($_SESSION['status']);
        }
        ?>

            <div class="card">
                <div class="card-header">
                    <h4>Php con firebase :D
                    <a href="add-contact.php" class="btn btn-primary float-end">Aregar usuario</a>
                    </h4>
                </div>
                <div class="card-body">

                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Numero de usuario</th>
                                <th>Nombre</th>
                                <th>Correo</th>
                                <th>Edad</th>
                                <th>Editar</th>
                                <th>Borrar</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        include ('dbcon.php');
                        $ref_table = "contacts";
                        $fetchdata = $database->getReference($ref_table)->getValue();

                        if ($fetchdata > 0) {
                            $i = 0;
                            foreach($fetchdata as $key => $row) {
                                ?>
                                <tr>
                                    <td><?=$i++?></td>
                                    <td><?=$row['fname'];?></td>
                                    <td><?=$row['email'];?></td>
                                    <td><?=$row['age'];?></td>
                                    <td>
                                        <a href="edit-contact.php?id=<?=$key?>" class="btn btn-primary btn-sm">Editar</a>
                                    </td>
                                    <td>
                                       <!-- <a href="delete-contact.php" class="btn btn-danger btn-sm">Borrar</a> -->
                                       <form action="code.php" method="POST">
                                        <button type="submit" name="delete_btn" value="<?=$key?>" class="btn btn-danger btn-sm">Borrar</button>
                                    </form>
                                    </td>
                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                                <tr>
                                    <td colspan="6">No se encontraron datos aun :c</td>
                                </tr>
                            <?php
                        }
                        ?>

                            <tr>
                            <td></td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
   </div>

<?php
include('includes/footer.php');
?>