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
include ('conexion.php');
?>
<table width="900" border="0" align="center">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">
	<iframe src="banner.php" frameborder="0" width="900" height="170">    </iframe>
	
	</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#F0F0F0" bgcolor="#CCCCCC">
	<?php include('menu_admin.php');?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="870" height="450" scrolling="no">   </iframe></td>
  </tr>
  <tr>
    <td width="160" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="250" height="300">   </iframe></td>
    <td width="724" colspan="2" bgcolor="#CCCCCC">
	  <p>
	    <?php
	
	$iidusuarios="No registra";
	$iidentificacion="No registra";
	$ccorreo="No registra";
	$uusuario="No registra";
	$ccontrasena="No registra";
	$rol="No registra";
	$tipo="No registra";

	$cont="0";
	
	
	
	$usuario=$_POST["usuario"];
	
	
$sql = "SELECT * FROM Usuarios WHERE id_usuario='$usuario'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
$algo="";
echo "<center><table summary='745' width=0 border=1>
			<tr>
			<td width='200'>Usuario".$algo."    </td>
			<td width='200'>Identificación".$algo."    </td>
			<td width='200'>Tipo Identificación".$algo."    </td>
			<td width='200'>Correo".$algo."    </td>
			<td width='200'>Contraseña".$algo."    </td>
			<td width='200'>Rol".$algo."    </td>
						</tr>
			"; 
			
while($row = $result->fetch_assoc()){
	$iidusuario=stripslashes($row["id_usuario"]);
	$uusuario=stripslashes($row["nombre_de_usuario"]);
	$ccorreo=stripslashes($row["correo"]);
	$ccontrasena=stripslashes($row["contrasena"]);
	$rol=stripslashes($row["roles_id_rol"]);
	// traer el texto del rol
		
	$skul = "SELECT * FROM Roles WHERE id_rol = $rol";
			if(!$result2=$db->query($skul))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row1 = $result2->fetch_assoc())
			{
				$idrol=stripslashes($row1["id_rol"]);
				$desrol=stripslashes($row1["descripcion"]);
				
				
				} 
	
	
	$iidentificacion=stripslashes($row["numero_documento"]);
	$ttipo=stripslashes($row["tipo_documentos_id_tipo"]);+
	
	// traer descripcion del tipo de identificacion.
	
	$skula = "SELECT * FROM Tipo_documentos WHERE id_tipo = $ttipo";
			if(!$result3=$db->query($skula))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row2 = $result3->fetch_assoc())
			{
				$idtipo=stripslashes($row2["id_tipo"]);
				$destipo=stripslashes($row2["descripcion"]);
				
				
				} 
	 
	echo "
			<tr>
			<td width='200'>".$uusuario."    </td>
			<td width='200'>".$iidentificacion."    </td>
			<td width='200'>".$destipo."    </td>
			<td width='200'>".$ccorreo."    </td>
			<td width='200'>".$ccontrasena."    </td> 
			<td width='200'>".$desrol."    </td>
						</tr>
			"; 
			$cont=$cont+1;
			
			}
			
			echo "</table></center>";
			
?>
   </td>
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
