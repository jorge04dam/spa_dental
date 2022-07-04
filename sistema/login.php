<!DOCTYPE html>
<?php
    // iniciamos el registro de la sesion del usuario
    session_start();
//se verifica que no haya una sesion activa, si hay una, no se permitira el acceso al login
//¿Hay una sesion activa o iniciada?
    if(!empty($_SESSION['active'])){
        header('location: Bienvenida_admin.php');
    }else{
        
    }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Dental Linda Vista</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="img" href="/">
</head>
<body>
    <div class="container_login">
      <h1 class= "mensaje_bienvenida">Iniciar sesión</h1>
    <form action="servidor/db.php" class="form_login_usuario" method="POST">
        <div id="form">
        <label for="name_user"></label>
        <input type="text" id="name_user" placeholder="Nombre de usuario">

        <label for="password"></label>
        <input type="password" id="password" placeholder="Contraseña">

        <input type="button" value="Cancelar" class="btn_cancelar" id="btn_cancel">
        <input type="button" value="Iniciar sesion" class="btn_crear" id="btn_ini">
        <input type="button" value="Registrarse" class="btn_iniciar" id="registrar">
        <a href="recuperar_contraseña.php" class="olvido_contraseña">Olvido su contraseña</a>
        </div>
        <div id="cargando"><img src="../img/pulso.gif" alt=""></div>
        <div id="con_resp">
            
        </div>
    </form>
    </div>
    
  
    <?php include '../include/library_js.php';?>
   


    
</body>
</html>