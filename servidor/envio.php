<?php
//     echo "mensaje de prueba";

// |   $servername = "127.0.0.1";
// |   $database = "spa_dental_lindavista";
// |   $username = "root@localhost";
// |   $password = "";
// // Create connection
// $conn = mysqli_connect($servername, $username, $password, $database);
// // Check connection
// if (!$conn) {
//     die("Connection failed:" . mysqli_connect_error());
// }
// echo "Connected successfully";
// mysqli_close($conn);
?>

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
mysqli_close($conn);
?>