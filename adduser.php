<?php
// Check If form submitted, insert form data into users table.
if(isset($_POST['Agregar'])) {
$username = $_POST['username'];
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$password = $_POST['password'];
// Incluir archivo de conexión
include_once("config.php");
// Insertar usuario a base
$result = mysqli_query($mysqli, "INSERT INTO
user(fullname,username,email,password) VALUES('$fullname','$username','$email','$password')");
}
// Redireccionar a inicio
header("Location: usuarios.php");

?>