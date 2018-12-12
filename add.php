<?php
// Check If form submitted, insert form data into users table.
if(isset($_POST['Agregar'])) {
$nombre_producto = $_POST['nombre_producto'];
$descripcion = $_POST['descripcion'];
// Incluir archivo de conexión
include_once("config.php");
// Insertar usuario a base
$result = mysqli_query($mysqli, "INSERT INTO
productos(nombre_producto,descripcion) VALUES('$nombre_producto','$descripcion')");
}
// Redireccionar a inicio
header("Location: Index.php");

?>