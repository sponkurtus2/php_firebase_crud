<?php
include('includes/header.php');
?>

   <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4>Agregar usuario
                    <a href="index.php" class="btn btn-danger float-end">Regresar</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="code.php" method="POST">
                        <div class="form-group mb-3">
                            <label for="">Primer nombre</label>
                            <input type="text" name="first_name" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Correo</label>
                            <input type="email" name="email" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Edad</label>
                            <input type="number" name="age" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" name="save_contact" class="btn btn-primary">Guardar usuario</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
   </div>

<?php
include('includes/footer.php');
?>