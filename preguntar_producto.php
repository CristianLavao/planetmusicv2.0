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
	<iframe src="banner.php" frameborder="0" width="880" height="170" scrolling="no">    </iframe>
	
	</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#F0F0F0" bgcolor="#CCCCCC">
	<?php include('menu_admin.php'); ?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="900" height="450" scrolling="no">   </iframe></td>
  </tr>
  <tr>
    <td width="160" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="250" height="300">   </iframe></td>
    <td width="724" colspan="2"><form id="form1" name="form1" method="post" action="datos_listar_producto_individual.php">
      <table width="419" border="1">
        <tr>
          <td width="207">Selecciones</td>
          <td width="196">
           <select name="articulos" id="articulos" required>
           <option value="" selected>Categoria</option>
          <option disabled></option>
            <?php
            include ('conexion.php');
			$sql = "SELECT * FROM Articulos";
			if(!$result=$db->query($sql))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$idarticulos=stripslashes($row["id_articulo"]);
				$nomarticulos=stripslashes($row["nombre"]);
				echo "<option value=".$idarticulos.">".$nomarticulos."</option>";
				}
            ?>
			
          </select></td>
        </tr>
        <tr>
          <td colspan="2">
            <div align="center">
              <input type="submit" name="Submit" value="Consultar" />
              </div>
		</td>
          </tr>
      </table>
      <p>&nbsp;</p>
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
