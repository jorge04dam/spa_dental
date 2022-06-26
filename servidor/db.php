<?php
$servername = "localhost";
$database = "spa_dental_lindavista";
$username = "root";
$password = "";

// isset($_POST('name_user')){
//     echo 'campos completos';
//     var_dump ('hola');
// }
// $nom    =   $_POST["name_user"];
// $pass   =   $_POST['password'];
// $a = "prueba";
// $b = "otraprueba";

// var_dump(isset($a));      // TRUE
// var_dump(isset($a, $b)); // TRUE
// var_dump(isset($_POST('name_user')));
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
// insertar en la base de datos.
//INSERT INTO `login` (`id`, `name`, `nickname`, `password`) VALUES (NULL, 'jorge de aquino', 'jorgedam', 'password');


// $result = mysqli_query($nombreConexion, "Consulta aquí"); ó mysqli_query($nombreConexion, $query);

// 4) Ir Imprimiendo las filas resultantes

// var_dump($_POST);
if($_POST){
    // echo "los datos recibidos son: ";
    // var_dump($_POST);
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
// if(!$_POST){
//     echo "los campos estan vacios";
// }

// echo "los campos estas completos";

    // else{
    // echo "<p> MySQL no conoce ese usuario y password</p>";
    // }

// mysqli_close($conn);

//funcion para crear un usuario


?>
