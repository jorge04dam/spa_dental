   <?php 
    if($_POST){
        header('Location: http://127.0.0.1/spa_dental/login.php');
    }
    ?>
    <?php 
        include 'header.php';
     
    ?>
        <div class="container">
            <h1>Bienvenida <?php echo "Administrador en turno"; ?></h1>
            <h1>
            Sesiones abiertas:  Raul y Alonso.
            <hr>
            Pendientes por hacer.
            <hr>
            Facturas hechas y por hacer
            </h1>
        </div>
    <?php include 'library.php'; ?>

    <?php include 'footer.php'; ?>
    