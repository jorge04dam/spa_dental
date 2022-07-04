<?php
    session_start();
    //se verifica que no haya una sesion activa, si hay una, no se permitira el acceso al login
    //¿no Hay una sesion activa o iniciada?
        if(empty($_SESSION['active'])){
            header('location: ../sistema/Bienvenida_admin.php');
        }
    include "../include/header.php";
?>
<div class="container">
    <input type="text" name="" id="crear_reporte">
    <input type="text" name="" id="buscar_reporte">
    <h1>Reportes</h1>
</div>

<?php
    include '../include/footer.php';
?>