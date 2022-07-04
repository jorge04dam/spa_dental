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
	<h1>Bienvenido al apartado de agregar. <hr>
    Aquí se podran agregar los registros como paciente nuevo, expediente nuevo, etc..
    </h1>
</div>
	
<?php include '../include/library_js.php'; ?>

<?php include '../include/footer.php'; ?>