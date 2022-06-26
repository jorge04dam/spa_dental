<?php
$servername = "localhost";
$database = "spa_dental_lindavista";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_POST){

    mysqli_select_db($conn, $database);
   
    

    $name               = $_POST['name'];
    $nickname           = $_POST['nickname'];
    $password           = $_POST['password'];
            
    $insertar = "INSERT INTO `login`( `name`, `nickname`, `password`, `status`) 
                VALUES ('$name','$nickname','$password', 0)";
    
    $insercion = mysqli_query($conn, $insertar);
    echo "success";

    // function crearUsuario(){
    //     if($_POST){
    
    //         $name               = $_POST['name'];
    //         $nickname           = $_POST['nickname'];
    //         $password           = $_POST['password'];
            
    //         $insertar = "INSERT INTO `login`( `name`, `nickname`, `password`, `status`) 
    //                     VALUES ('$name','$nickname','$password','$confpass', 0)";
    
    //         $insercion = mysqli_query($conn, $insertar);
    //         echo $insercion;
    //     }
        
    // }

    

}else{
    header('Location: http://127.0.0.1/spa_dental/index.php');
}

?>