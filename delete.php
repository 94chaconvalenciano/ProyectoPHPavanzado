<?php
// Incluir conexión
include_once("config.php");
// Obtener el id del usuario a borrar por el método GET
$id = $_GET['id'];
// Eliminar la fila seleccionada
$result = mysqli_query($mysqli, "DELETE FROM productos WHERE id='$id'");
// Redireccionar al inicio y desplegar que ya no existe.
header("Location:Index.php");
?>
