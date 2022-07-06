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
    session_start();
    $status =   $_POST["cerrar"];
    $nom =   $_SESSION["nickname"];
    
    $cerrar_sesion = "UPDATE `login` SET `status`= 0 WHERE `nickname`= '$nom'";
    $estado = mysqli_query($conn, $cerrar_sesion);
    // $estado = "success";
    echo $estado;
    
    session_destroy();
    
}else{
    header('Location: ../index.php');
}

    
mysqli_close($conn);

?>