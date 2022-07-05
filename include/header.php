<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spa Dental Linda Vista</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="img" href="/">
</head>
<body>
    
    <header>
        <span><?php echo $_SESSION['nickname'];?></span>
        <span><?php 
       date_default_timezone_set('America/Mexico_City');
        $fecha = date('l')."-".date('j')."-".date('F')."-".date('Y');
        echo $fecha;
        ?></span>
        <span>
        <?php 
        if($_SESSION['cargo']== 1){
            echo "Administrador";
        }else{
            echo "Recepcion";
        }
        
        ?>
        </span></header>
    <div class="menu_navegacion">
        <a href="../sistema/bienvenida.php"><img src="../img/logo-150x150.png" class="img_logo" alt=""></a>
        <a 
        <?php 
        if($_SESSION['cargo'] == 1){?>
        href="../sistema/bienvenida.php"<?php
        }?>
        >Inicio</a>
        <a href="../sistema/tareas.php">Tablero de pendientes</a>
        <a href="../sistema/reportes.php">Reportes</a>
        <a href="../sistema/consultas.php">Consultas</a>
        <a href="../sistema/agregar.php">Agregar</a>
        <a <?php 
        if($_SESSION['cargo'] == 1){?>
        href="../sistema/inventario.php"<?php
        }?>>Inventario</a>
        <a id="usuario_sesion">Cerrar Sesion</a>
        <a href="../sistema/ayuda.php">Ayuda</a>

    </div>
    <!-- <div class="header"> -->