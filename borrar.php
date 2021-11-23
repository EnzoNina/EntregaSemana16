<?php
include_once('php/conexion.php');
$numero=isset( $_GET['numero'] ) ? $_GET['numero'] : 0;
borrar($numero);
?>