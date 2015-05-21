<?php

function conectar(){

	$user="root";
	$pass="";
	$server="localhost";
	$db="restaurante";
	$con=mysql_connect($server,$user,$pass) or die ("Error al conectar a la base de datos".msql_error());
	mysql_select_db($db,$con);

	return $con;

}

?>