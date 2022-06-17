<?php
$servername = "localhost";
$database = "spa_dental_lindavista";
$username = "root";
$password = "";
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
    // else{
    // echo "<p> MySQL no conoce ese usuario y password</p>";
    // }

// mysqli_close($conn);

?>
