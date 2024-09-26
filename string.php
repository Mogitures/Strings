<?php 

	$texto = "micro Computador";

	$tamanho = strlen($texto); //tamanho da string

	echo "<br/>".$texto." possui ".$tamanho." caracteres";

	echo "<br/>".strtoupper($texto);
	echo "<br/>".strtolower($texto);
	echo "<br/>".ucfirst($texto);
	echo "<br/>".ucwords($texto);
	echo "<br/>".ucfirst(substr($texto,13,3)); //3 caracteres a partir da posição 13
	echo "<br/>".str_replace("micro","Nano",$texto);
 ?>