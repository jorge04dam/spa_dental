<?php
	session_start();
    //se verifica que no haya una sesion activa, si hay una, no se permitira el acceso al login
    //¿no Hay una sesion activa o iniciada?
        if(empty($_SESSION['active'])){
            header('location: ../sistema/Bienvenida_admin.php');
        }
        include '../include/header.php';
?>
<div class="container">
	<h1>Bienvenido al apartado de consultas. <hr>
    Aquí se podra visualizar todo tipo de registro que exista en la base de datos.
    </h1>
</div>
	
<?php include '../include/library_js.php'; ?>

<?php include '../include/footer.php'; ?>