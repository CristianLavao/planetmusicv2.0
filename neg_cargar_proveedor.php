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
<table width="900" border="0" align="center">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">
	<iframe src="banner.php" frameborder="0" width="900" height="170">    </iframe>
	
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
	  <p>
	    <?php
	include ('conexion.php');
	?>
	    <?php
	
	//****************
	//$sql = "SELECT * FROM Articulos";
//if(!$result = $db->query($sql)){
 // die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
//}
//while($row = $result->fetch_assoc()){
	//$iidarticulo=stripslashes($row["id_articulo"]);
	//$contador=$iidarticulo+1;	
//}
	
	//****************
	
	

	$nombre=$_POST["nombre"];
	$telefono=$_POST["telefono"];
	$direccion=$_POST["direccion"];
	$correo=$_POST["correo"];
	

	
	
	echo "El proveedor registrado es: </br>";
	echo "Nombre: $nombre </br>";
	echo "Telefono: $telefono </br>";
	echo "Dirección: $direccion </br>";
	echo "Correo: $correo </br>";
	mysqli_query($db,"INSERT INTO Proveedores(id_proveedor, nombre, telefono, direccion, correo) VALUES 
(NULL, '$nombre', '$telefono', '$direccion', '$correo' )") 
or die(mysqli_error($db));
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

<?php
ob_end_flush();
 ?>
