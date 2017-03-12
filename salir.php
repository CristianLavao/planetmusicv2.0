<?php

session_start();

$_SESSION['login']="0";
$_SESSION['usuario']="0";
$_SESSION['rol']="0";

header ("Location:index.php");


?>