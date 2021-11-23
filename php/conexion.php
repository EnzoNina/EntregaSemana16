<?php
require_once('credentials.php');
$mysqli = new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);
$result = '';

if( $mysqli->connect_errno )
{
	echo 'Error en la conexión';
	exit;
}

function run_query()
{
	global $mysqli, $result;
	$sql = 'SELECT * FROM notas';
	return $mysqli->query($sql);
}

function insertar( $titulo, $texto, $fecha )
{
	global $mysqli;
	$sql = "INSERT INTO notas (numero, titulo, texto, fecha) VALUES (null, '{$titulo}','{$texto}','{$fecha}')";
	$mysqli->query($sql);

}
function borrar($numero){
	global $mysqli;
	$sql="DELETE FROM notas WHERE numero={$numero}";
	$mysqli->query($sql);
}
function actualizar($numero,$titulo,$texto,$fecha){
	global $mysqli;
	$sql="UPDATE notas SET titulo='{$titulo}', texto='{$texto}', fecha='{$fecha}' WHERE numero={$numero}";
	$mysqli->query($sql);
}
