<?php
    
    if(!$_POST){
        echo 'campos vacios';
    }
    $nombre = $_POST['name'];
    $correo = $_POST['email'];

    $resul = mail('jorgedam04dev@gmail.com','el asunto es',"el usuario es $nombre");
    var_dump($resul);
?>