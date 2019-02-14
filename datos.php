<?php
$array[1]="Cachí";
$array[2]="Orosi";
$array[3] ="Paraiso";
$array[4] = "Tres Ríos";
$array [5] = "Turrialba";
$array[6] = "Tarrazu";

$caracter = $_REQUEST["preguntar"];
$resultado="";

if($caracter !=""){
	$caracter=strtolower($caracter);
	$longitud = strlen($caracter);

	foreach ($array as $cafe ) {
		if (stristr($caracter,substr($cafe,0,$longitud))) {
			if ($resultado==="") {
				$resultado="<p>".$cafe. "</p>";
			}else{
				$resultado.="<p>".$cafe. "</p>";
			
			}
		}
	}
}
echo $resultado === "" ?"no hay un tipo de cafe":$resultado;
?>