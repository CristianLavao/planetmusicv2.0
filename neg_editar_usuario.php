<?php
ob_start();
?>

<?php
include ('seguridad_admin.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="img_planet.png" />
<link rel="stylesheet" type="text/css" href="hoja_estilos.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Planet Music</title>
</head>
<body class="body">
<?php
	include('conexion.php');
?>
<table width="900" border="0" align="center">
  <tr>
    <td colspan="3">
	<iframe src="banner.php" frameborder="0" width="880" height="170" scrolling="no">    </iframe>
	
	</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#F0F0F0" bgcolor="#CCCCCC">
	<?php include('menu_admin.php'); ?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="870" height="450" scrolling="no">   </iframe></td>
  </tr>
  <tr>
    <td width="160" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="250" height="300">   </iframe></td>
    <td width="724" colspan="2">
	<?php
	$iid=$_POST["id"];
	$iidentificacion=$_POST["identificacion"];
	$nnombre=$_POST["nombre"];
	$aapellido=$_POST["apellido"];
	$ccorreo=$_POST["correo"];
	$uusuario=$_POST["usuario"];
	$ccontrasena=$_POST["contrasena"];
	$rol=$_POST["rol"];
	$tipo=$_POST["tipo"];

	

	
	$sql = "SELECT * FROM Roles WHERE id_rol='$rol'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
	$iidrol=stripslashes($row["id_rol"]);
	$desrol=stripslashes($row["descripcion"]);
		
}



$skul = "SELECT * FROM Tipo_documentos WHERE id_tipo='$tipo'";
if(!$result = $db->query($skul)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
	$iidtipo=stripslashes($row["id_tipo"]);
	$destipo=stripslashes($row["descripcion"]);
				
}

	
mysqli_query($db,"UPDATE Usuarios SET numero_documento='$iidentificacion', nombre='$nnombre', apellido='$aapellido', correo='$ccorreo', nombre_de_usuario='$uusuario', contrasena='$ccontrasena', roles_id_rol='$iidrol', tipo_documentos_id_tipo='$iidtipo' WHERE id_usuario='$iid'")
	or die (mysqli_error($db));

	
echo "El articulo se ha modificado correctamente";
?></td>
  </tr>
  <tr>
    <td colspan="3"><p>
	<iframe src="footer.php" frameborder="0" width="890" height="300" scrolling="no">   </iframe>
	</p>
    </td>
  </tr>
</table>
</body>
</html>

<?php 
ob_end_flush();
?>
