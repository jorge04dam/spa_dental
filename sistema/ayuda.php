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
	<h1>Hola, esta es la seccion de ayuda. <hr>
    Aquí podrás conocer el correcto funcionamiento del sistema de Spa
    dental lindavista.
    </h1>
    <img id= "imagen_ayuda"src="../img/segmento-ayuda.png" alt="">
</div>
	
<?php include '../include/library_js.php'; ?>

<?php include '../include/footer.php'; ?>