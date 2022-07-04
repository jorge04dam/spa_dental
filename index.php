<?php
session_start();
//se verifica que no haya una sesion activa, si hay una, no se permitira el acceso al login
//¿Hay una sesion activa o iniciada?
    if(!empty($_SESSION['active'])){
        header('location: sistema/Bienvenida_admin.php');
    }else{
        
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Dental Linda Vista</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="img" href="/">
</head>
<body>

    <p class="mensaje_bienvenida">
       
        Bienvenido Spa Dental Lindavista
    </p>
    <div class="welcome">
        
        <div class="crear_usuario">
            <a href="sistema/crear_usuario.php"><p>Crear Usuario</p></a>
        </div>
        <div class="iniciar_sesion">
            <a href="sistema/login.php"><p>Iniciar Sesion</p></a>
        </div>
    </div>
   
    <div class="logo">
        <img src="img/logo-150x150.png" alt="add-taks" >
    </div>   
</body>
</html>