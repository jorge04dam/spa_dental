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
    $estado = "false";
    
    $consulta = "SELECT `nickname`,`password` FROM `login` WHERE `nickname` = '$nom'";

    mysqli_select_db($conn, $database);
    $datos= mysqli_query($conn, $consulta);

    while ($fila = mysqli_fetch_array($datos)){
        if($nom == $fila["nickname"] && $pass == $fila["password"] ){
            
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
           $estado = "true";
           echo $estado;
        }else{
            // echo "los datos no son correctos";
            echo $estado;
        }
    
        }


    // echo "nombre de usuario es $nom y la contraseña es $pass";
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

?>
