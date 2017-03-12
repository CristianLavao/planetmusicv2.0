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
		
		$nnombre="No registra";
	$ttelefono="No registra";
	$ddireccion="No registra";
	$ccorreo="No registra";
		
	
	$proveedor=$_POST["proveedor"];
	
	
$sql = "SELECT * FROM Proveedores WHERE id_proveedor='$proveedor'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
$algo="";
echo "<center><table summary='745' width=0 border=1>
			<tr>
			<td width='200'>Nombre".$algo."    </td>
			<td width='200'>Telefono".$algo."    </td>
			<td width='200'>Direccion".$algo."    </td>
			<td width='200'>Correo".$algo."    </td>
			
			</tr>
			"; 

while($row = $result->fetch_assoc()){
	$iidproveedor=stripslashes($row["id_proveedor"]);
	$nnombre=stripslashes($row["nombre"]);
	$ttelefono=stripslashes($row["telefono"]);
	$ddireccion=stripslashes($row["direccion"]);
	$ccorreo=stripslashes($row["correo"]);
	
	 
	
			echo "
			<tr>
			<td width='200'>".$nnombre."    </td>
			<td width='200'>".$ttelefono."    </td>
			<td width='200'>".$ddireccion."    </td>
			<td width='200'>".$ccorreo."    </td>
			
			</tr>
			"; 
			
			
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
