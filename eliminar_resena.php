<?php

include_once("config.php");

$id = $_GET["id"];

$result = mysqli_query($mysqli,"DELETE FROM resenas WHERE id=$id");

header("Location:tabla_resenas.php");
?>