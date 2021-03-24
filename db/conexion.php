<?php
$servername = "189.142.100.149";
$database = "db_customer_assistant";
$username = "root";
$password = "raspberry";
$port = "3306";
// Creacion de conexion
$conn = mysqli_connect($servername, $username, $password, $database, $port);
// Checar conexion
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
mysqli_close($conn);
?>