<?php
$servername = "localhost";
$database = "spa_dental_lindavista";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_POST){
   
    $nom    =  $_POST["nombre"];
    $pass   =  $_POST["contraseña"];
    $estado = "sesion_no_iniciada";
    
    $consulta = "SELECT `nickname`,`password`,`status`  FROM `login` WHERE `nickname` = '$nom'";

    mysqli_select_db($conn, $database);
    $datos= mysqli_query($conn, $consulta);
    // echo $datos;
    
    while ($fila = mysqli_fetch_array($datos)){
        
        if($nom == $fila["nickname"] && $pass == $fila["password"]){
            
            // echo "<p>";
            // echo $fila ["id"];
            // echo "-"; // un separador
            // echo $fila["name"];
            // echo "-"; // un separador
            // echo $fila ["nickname"];
            // echo "-"; // un separador
            // echo $fila["password"];
            // echo "</p>";
            // echo "los datos son correctos";
              
           if($fila["status"] == 0){
                
                $actualizar = "UPDATE `login` SET `status`='1' WHERE `nickname`= '$nom'";
                mysqli_query($conn, $actualizar);
                $estado = "iniciando_sesion";
                echo $estado;
           }else{
            $estado = "sesion_iniciada";
            echo $estado;
           }
        }else{
            echo $estado;  
        }
    
    }
    if($fila == NULL){
        // echo "null";
    }

}else{
    header('Location: http://127.0.0.1/spa_dental/index.php');
}

?>
