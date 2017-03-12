<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio-Planet_Music</title>
</head>

<body>
<table width="900" border="0" align="center">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">
	<iframe src="banner.php" frameborder="0" width="900" height="170">    </iframe>
	
	</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#F0F0F0" bgcolor="#CCCCCC">
	<iframe src="menu.php" frameborder="0" width="900" height="100">   </iframe>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="900" height="450" scrolling="no">   </iframe></td>
  </tr>
  <tr>
    <td width="260" height="264" bgcolor="#CCCCCC"><iframe src="inicio_sesion.html" frameborder="0" width="270" height="300" scrolling="no">   </iframe></td>
    <td width="640" colspan="2">
     <?php
	include ('conexion.php');
	?>
	<?php
	$documento=$_POST["numero_documento"];
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$correo=$_POST["correo"];
	$usuario=$_POST["nombre_de_usuario"];
	$contraseña=$_POST["contraseña"];
	
	echo "El usuario se ha registrado correctamente   </br>";
	
	mysqli_query($db,"INSERT INTO usuarios(idusuario, numero_documento, nombre, apellido, correo, nombre_de_usuario, contraseña, rol) VALUES 
(NULL, '$documento', '$nombre', '$apellido', '$correo', '$usuario', '$contraseña', 'Usuario' )") 
or die(mysqli_error($db));
	
	
	?> </td>
    
  </tr>
  <tr>
    <td colspan="3"><p>
	<iframe src="footer.php" frameborder="0" width="900" height="300" scrolling="no">   </iframe>
	</p>
    </td>
  </tr>
</table>
</body>
</html>
