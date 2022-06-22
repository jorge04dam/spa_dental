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
$a = "prueba";
$b = "otraprueba";

var_dump(isset($a));      // TRUE
var_dump(isset($a, $b)); // TRUE
// var_dump(isset($_POST('name_user')));
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
// insertar en la base de datos.
//INSERT INTO `login` (`id`, `name`, `nickname`, `password`) VALUES (NULL, 'jorge de aquino', 'jorgedam', 'password');

$consulta = "SELECT * FROM `login`";

mysqli_select_db($conn, $database);
$datos= mysqli_query($conn, $consulta);
// $result = mysqli_query($nombreConexion, "Consulta aquí"); ó mysqli_query($nombreConexion, $query);

// 4) Ir Imprimiendo las filas resultantes




while ($fila =mysqli_fetch_array($datos)){
    if($nom == $fila["nickname"] && $pass == $fila["password"] ){
        echo "<p>";
        echo $fila ["id"];
        echo "-"; // un separador
        echo $fila["name"];
        echo "-"; // un separador
        echo $fila ["nickname"];
        echo "-"; // un separador
        echo $fila["password"];
        echo "</p>";
    }

    }
    // else{
    // echo "<p> MySQL no conoce ese usuario y password</p>";
    // }

// mysqli_close($conn);

?>
