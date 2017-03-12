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
	<iframe src="banner.php" frameborder="0" width="880" height="200">    </iframe>
	
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


<form id="form1" name="form1" method="post" action="neg_eliminar_productos.php">
<?php
$articulos=$_POST["articulos"];


$sql = "SELECT * FROM Articulos WHERE id_articulo='$articulos'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
	$iidarticulo=stripslashes($row["id_articulo"]);
	$nnombre=stripslashes($row["nombre"]);
		
}

?>
      <table width="250" border="0" align="center">
      <tr>
      	<td colspan="2" align="center">
        ¿Seguro desea eliminar el articulo?denominado <input name="articulos" type="hidden" value=<?php echo $articulos; ?> />
        </td>
       </tr>
       <tr>
       	<td align="center">
        <input name="si" type="submit" value="si" />
        </td>
        <td align="center">&nbsp;</td>
       </tr>
        
        
      </table>
      <p><a href="eliminar_e_producto.php">Cancelar</a></p>
    </form>   
	
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
