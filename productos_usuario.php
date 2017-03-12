<?php
include ('seguridad_usuario.php');
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" type="image/png" href="img_planet.png" />
<link rel="stylesheet" type="text/css" href="hoja_estilos.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Planet MusicPlanet Music</title>
</head>

<body class="body">
<table width="900" border="0" align="center">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">
	<iframe src="banner.php" frameborder="0" width="880" height="170" scrolling="no">    </iframe>
	
	</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#F0F0F0" bgcolor="#CCCCCC">
	<?php include('menu_usuario.php');?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="870" height="450" scrolling="no">   </iframe></td>
  </tr>
  <tr>
    <td width="160" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="250" height="300">   </iframe></td>
    <td width="724" colspan="2">
    <table width="713" border="0" align="center" class="Estilo1">
 
  <tr>
    <td width="900" height="235" colspan="2" bgcolor="#cccccc">
	  <p>
      
	    <?php	
	
	include ('conexion.php');
	
	
	$iidarticulos="No registra";
	$nnombre="No registra";
	$ffecha_entrada="No registra";
	$pprecio="No registra";
	$ccantidadr="No registra";
	$ccategoria="No registra";
	$pproveedor="No registra";
	$cont="0";
	
			
			$sql = "SELECT * FROM Articulos";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
$algo="";
echo "<center><table summary='' width=745 border=1>
			<tr>
			<td width='200'>Nombre".$algo."    </td>
			<td width='200'>Fecha_entrada".$algo."    </td>
			<td width='200'>Precio".$algo."    </td>
			<td width='200'>Cantidad".$algo."    </td>
			<td width='200'>Categoria".$algo."    </td>
			<td width='200'>Proveedor".$algo."    </td>
			</tr>
			"; 

while($row = $result->fetch_assoc())
{

		
			$iidarticulos=stripslashes($row["id_articulo"]);
			$nnombre=stripslashes($row["nombre"]);
			$ffecha_entrada=stripslashes($row["fecha_entrada"]);
			$pprecio=stripslashes($row["precio"]);
			$ccantidad=stripslashes($row["cantidad"]);
			
			
			$ccategoria=stripslashes($row["categorias_id_categoria"]);
			//-----traer texto del id de la categoria -------
				$sql2 = "SELECT * FROM Categorias WHERE id_categoria='$ccategoria'";
				if(!$result2 = $db->query($sql2)){
  				die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
				}
					while($row2 = $result2->fetch_assoc()){
				$iidcategoria=stripslashes($row2["id_categoria"]);	
				$ddescripcion=stripslashes($row2["descripcion"]);			
				}			
			//-----traer texto del id de la categoria -------
			
			
			$pproveedor=stripslashes($row["proveedores_id_proveedor"]);
			//-----traer texto del id del proveedor -------
				$sql3 = "SELECT * FROM Proveedores WHERE id_proveedor='$pproveedor'";
				if(!$result3 = $db->query($sql3)){
  				die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
				}
					while($row3 = $result3->fetch_assoc())
				{
				$idproveedor=stripslashes($row3["id_proveedor"]);	
				$nnombrePro=stripslashes($row3["nombre"]);			
				}			
			//-----traer texto del id del proveedor -------
			
			
			
			echo "
			<tr>
			<td width='200'>".$nnombre."    </td>
			<td width='200'>".$ffecha_entrada."    </td>
			<td width='200'>".$pprecio."    </td>
			<td width='200'>".$ccantidad."    </td>
			<td width='200'>".$ddescripcion."    </td>
			<td width='200'>".$nnombrePro."    </td>
			</tr>
			"; 
			$cont=$cont+1;
			
			}
			
			echo "</table></center>";
			?>
    
    
     </td>
  </tr>
  </table>
  <tr>
    <td colspan="3"><p>
	<iframe src="footer.php" frameborder="0" width="890" height="300" scrolling="no">   </iframe>
	</p>
    </td>

  </tr>
</table>
</body>
</html>
