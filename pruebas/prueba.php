<?php ?>
<link rel="stylesheet" href="../css/style.css">
<div class="container">
    <h1 class= "mensaje_bienvenida">Iniciar sesión</h1>
    <form action="../servidor/db.php" class="form_login_usuario" method= "post">
        <label for="name_user"></label>
        <input type="text" id="name_user" placeholder="Nombre de usuario">
        <label for="password"></label>
        <input type="password" id="password" placeholder="Contraseña">

        <input type="button" value="Cancelar" class="btn_cancelar" id="btn_cancel">
        <input type="button" value="Iniciar sesion" class="btn_crear" id="btn_ini">
        <input type="button" value="Registrarse" class="btn_iniciar" id="registrar">
        <div id="cargando"><img src="../img/pulso.gif" alt=""></div>
        <div class="prueba" id= "resultado"></div>
    </form>
</div>
<?php
    include 'library.php';
?>