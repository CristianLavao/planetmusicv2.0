<?php
session_start();

//echo $_SESSION['usuario'];
if (($_SESSION['login']!="1")||($_SESSION['rol']!="Usuario"))
{
header("Location:index.php");
}
?>
