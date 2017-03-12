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
	
	
	
	
	
	
	$imagen="nombreimagen";
	$Proveedor_idproveedor="idproveedor";
	$producto=$_POST["nombre"];
	$fecha=$_POST["fecha_entrada"];
	$precio=$_POST["precio"];
	$categoria=$_POST["categoria"];
	$proveedor=$_POST["proveedor"];
	
	
	$cantidad=$_POST["cantidad"];
	
	
	//modulo para traer el id de la categoria
	
$sql = "SELECT * FROM Categorias WHERE id_categoria='$categoria'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
	$iidcategoria=stripslashes($row["id_categoria"]);
	$ddescripcion=stripslashes($row["descripcion"]);
		
}


$skul = "SELECT * FROM Proveedores WHERE id_proveedor='$proveedor'";
if(!$result = $db->query($skul)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
	$iidproveedor=stripslashes($row["id_proveedor"]);
	$nnombre=stripslashes($row["nombre"]);
				
}


	
	//modulo para traer el id de la categoria
	
	
	
	$algo="1";
	
	
	
	echo "El producto es: $producto   </br>";
	echo "El precio del producto $producto es $precio   </br>";
	mysqli_query($db,"INSERT INTO Articulos(id_articulo, nombre, fecha_entrada, precio, cantidad, imagen,categorias_id_categoria, proveedores_id_proveedor) VALUES 
(NULL, '$producto', '$fecha', '$precio', '$cantidad', '$imagen','$iidcategoria', '$iidproveedor' )") 
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
