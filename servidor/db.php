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
    if(!empty($_POST)){
        echo 'estan vacios';
        
    }
    
    $consulta = "SELECT `nickname`,`password`,`status`,`cargo_id`  FROM `login` WHERE `nickname` = '$nom'";

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
                if($fila["cargo_id"] == 1){
                    $actualizar = "UPDATE `login` SET `status`='1' WHERE `nickname`= '$nom'";
                    mysqli_query($conn, $actualizar);
                    $estado = "iniciando_sesion_admin";
                    echo $estado;
                }elseif ($fila["cargo_id"] == 2) {
                    $actualizar = "UPDATE `login` SET `status`='1' WHERE `nickname`= '$nom'";
                    mysqli_query($conn, $actualizar);
                    $estado = "iniciando_sesion_recep";
                    echo $estado;
                }else {
                    echo "el cargo no existe";
                }
                
                
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
