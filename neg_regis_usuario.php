<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="hoja_estilos.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio-Planet_Music</title>
</head>

<body class="body">
<table width="900" border="0" align="center">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">
	<iframe src="banner.php" frameborder="0" width="900" height="170">    </iframe>
	
	</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#F0F0F0" bgcolor="#CCCCCC">
	<?php include('menu.php');?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="900" height="450" scrolling="no">   </iframe></td>
  </tr>
  <tr>
    <td width="260" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="270" height="300" scrolling="no">   </iframe></td>
    <td width="640" colspan="2">
     <?php
	include ('conexion.php');
	?>
	<?php
	$tipodocumento=$_POST["tipo_documento"];
	$documento=$_POST["numero_documento"];
	$nombre=$_POST["nombre"];
	$apellido=$_POST["apellido"];
	$correo=$_POST["correo"];
	$usuario=$_POST["nombre_de_usuario"];
	$contraseña=$_POST["contraseña"];
	
	$rol="No resgistra";
	//consulta del rol
	
	$sql = "SELECT * FROM Roles WHERE id_rol='$rol'";
			if(!$result=$db->query($sql))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$idrol=stripslashes($row["id_rol"]);
				$ddescripcion=stripslashes($row["descripcion"]);
				}
				
				
				
	//-----------------------------------------------------------------//
	$sql1 = "SELECT * FROM tipo_documentos WHERE id_tipo='$tipodocumento'";
			if(!$result=$db->query($sql1))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$iidtipo=stripslashes($row["id_tipo"]);
				$ddescripcion=stripslashes($row["descripcion"]);
				}			
				
				
				
				
				
	
	echo "El usuario se ha registrado correctamente   </br>";
	
	mysqli_query($db,"INSERT INTO usuarios(id_usuario, numero_documento, nombre, apellido, correo, nombre_de_usuario, contrasena, roles_id_rol, tipo_documentos_id_tipo) VALUES 
(NULL, '$documento', '$nombre', '$apellido', '$correo', '$usuario', '$contraseña', '2', '$tipodocumento' )") 
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
