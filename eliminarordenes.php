<?php

include_once("config.php");

$id = $_GET["id"];

$result = mysqli_query($mysqli,"DELETE FROM ordenes WHERE id=$id");

header("Location:tablaordenes.php");

?>
