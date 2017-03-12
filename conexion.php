


<?php
header("Content-Type: text/html;charset=utf-8");
$db = new mysqli('localhost', 'root', '', 'planet_music');
$acentos = $db->query("SET NAMES 'utf8'");
if($db->connect_error > 0)
{
    die('Error de Conexion [' . $db->connect_error . ']');
	
}
?>

