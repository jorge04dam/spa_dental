   <?php 
   session_start();
    if($_POST){
        header('Location: http://127.0.0.1/spa_dental/login.php');
    }
    
//se verifica que no haya una sesion activa, si hay una, no se permitira el acceso al login
//¿no hay una sesion activa o iniciada?
    if(empty($_SESSION['active'])){
        header('location: login.php');
    }
    ?>
    <?php 
        include '../include/header.php';
        
    ?>
        <div class="container">
            <hr>
            <h1>
            Sesiones abiertas:  Raul y Alonso.
            <hr>
            Pendientes por hacer.
            <hr>
            Facturas hechas y por hacer
            </h1>
        </div>
    <?php 
    // var_dump($_SESSION['active']);
    // exit();
    include '../include/library_js.php'; ?>

    <?php include '../include/footer.php'; ?>
    