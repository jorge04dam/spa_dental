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

/*
    Asignacion de cada base de datos
*/
$table_patient     = "patient_prueba";
$table_doctor      = "doctor";
$table_inventory   = "inventory";

?>