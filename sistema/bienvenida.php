   <?php 
        session_start();
        //se verifica que no haya una sesion activa, si hay una, no se permitira el acceso al login
        //¿no Hay una sesion activa o iniciada?
       if(empty($_SESSION['active'])){
           header('location: ../sistema/bienvenida.php');
       }
        include '../servidor/connect.php';
   
        include '../include/header.php';
        include 'sesiones.php';     
    ?>      
    <?php 
    include '../include/library_js.php'; 
    include '../include/footer.php'; ?>
    