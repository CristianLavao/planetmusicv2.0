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
	<?php include('menu_admin.php');?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="870" height="450" scrolling="no">   </iframe></td>
  </tr>
  <tr>
    <td width="160" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="250" height="300">   </iframe></td>
    <td width="724" colspan="2">
	<?php
	
	$proveedor=$_POST["proveedor"];
	
	
$sql = "SELECT * FROM Proveedores WHERE id_proveedor='$proveedor'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
	$iidproveedor=stripslashes($row["id_proveedor"]);
	$nnombrepro=stripslashes($row["nombre"]);
	$ttelefono=stripslashes($row["telefono"]);
	$ddireccion=stripslashes($row["direccion"]);
	$ccorreo=stripslashes($row["correo"]);
	
	
	//echo $row["idarticulos"]. $row["nombre"]; 
	//echo "Nombre: $nnombre   - Precio: $pprecio $articulo - $nnombre  </br>"; 
		
}

?>

<form id="form1" name="form1" method="post" action="neg_editar_proveedor.php">
      <p>&nbsp;</p>
      <table width="628" border="0" bordercolor="cccccc" bgcolor="f5f5f5">
      <tr>
          <td><input type="hidden" name="id_proveedor" type="text" id="id_proveedor" placeholder="id del proveedor" value="<?php echo $iidproveedor ?>"/></td>
        </tr>
        <tr>
          <td width="304"><div align="right">Digite el nombre del Proveedor </div></td>
          <td width="165"><label>
            <input name="nombre" type="text" id="nombre" value="<?php echo $nnombrepro ?>"/>
            <br />
          </label></td>
        </tr>
        <tr>
          <td><div align="right">Digite el telefono de contacto: </div></td>
          <td><input name="telefono" type="text" id="telefono" placeholder="Contacto del proveedor" value="<?php echo $ttelefono ?>"/></td>
        </tr>
        <tr>
          <td><div align="right">Digite la dirección del proveedor: </div></td>
          <td><input name="direccion" type="text" id="direccion" value="<?php echo $ddireccion ?>" /></td>
        </tr>
        <tr>
          <td><div align="right">Digite el correo del proveedor: </div></td>
          <td><input name="correo" type="text" id="correo" value="<?php echo $ccorreo ?>"/></td>
        </tr>
        
         <tr> 
         <td><input type="submit" name="Submit" value="Enviar" />
        </div>
          </label></td>
          </tr>
      </table>
      <p>&nbsp;</p>
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

<?php 
ob_end_flush();
?>
