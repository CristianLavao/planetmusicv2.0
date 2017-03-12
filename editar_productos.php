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
	
	$articulo=$_POST["articulos"];
	
	
$sql = "SELECT * FROM articulos WHERE id_articulo='$articulo'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
	$iidarticulos=stripslashes($row["id_articulo"]);
	$nnombre=stripslashes($row["nombre"]);
	$fecha=stripslashes($row["fecha_entrada"]);
	$pprecio=stripslashes($row["precio"]);
	$ccantidad=stripslashes($row["cantidad"]);
	$iimagen=stripslashes($row["imagen"]);
	$categoria=stripslashes($row["categorias_id_categoria"]);
	$proveedor=stripslashes($row["proveedores_id_proveedor"]);
	
	
	//echo $row["idarticulos"]. $row["nombre"]; 
	//echo "Nombre: $nnombre   - Precio: $pprecio $articulo - $nnombre  </br>"; 
		
}

?>

<form id="form1" name="form1" method="post" action="neg_editar_productos.php">
      <p>&nbsp;</p>
      <table width="628" border="0" bordercolor="cccccc" bgcolor="f5f5f5">
      <tr>
          <td><input type="hidden" name="id_articulo" type="text" id="id_articulo" placeholder="id del articulo" value="<?php echo $iidarticulos ?>"/></td>
        </tr>
        <tr>
          <td width="304"><div align="right">Digite el nombre del Producto </div></td>
          <td width="165"><label>
            <input name="nombre" type="text" id="nombre" value="<?php echo $nnombre ?>"/>
            <br />
          </label></td>
        </tr>
        <tr>
          <td><div align="right">Digite la fecha de entrada: </div></td>
          <td><input name="fecha_entrada" type="text" id="fecha_entrada" placeholder="año-mes-dia" value="<?php echo $fecha ?>"/></td>
        </tr>
        <tr>
          <td><div align="right">Digite el precio: </div></td>
          <td><input name="precio" type="text" id="precio" value="<?php echo $pprecio ?>" /></td>
        </tr>
        <tr>
          <td><div align="right">Digite la cantidad: </div></td>
          <td><input name="cantidad" type="text" id="cantidad" value="<?php echo $ccantidad ?>"/></td>
        </tr>
        <tr>
          <td><div align="right">Digite la ubicacion de la imagen: </div></td>
          <td><input name="imagen" type="text" id="imagen" value="<?php echo $iimagen ?>"/></td>
        </tr>
        
        <tr>
          <td><div align="right">Seleccione categoria</div></td>
          <td width="165"> <select name="categoria" id="categoria"  required>
           <option value="" selected>categoria</option>
          <option disabled ></option>
            <?php
            include ('conexion.php');
			$sql = "SELECT * FROM Categorias";
			if(!$result=$db->query($sql))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$idcategoria=stripslashes($row["id_categoria"]);
				$nomcategoria=stripslashes($row["descripcion"]);
				echo "<option  value=".$idcategoria.">".$nomcategoria."</option>";
				}
            ?>
			
          </select></td>
          </tr> 
                 
          
         <tr> 
         <tr>
          <td><div align="right">Seleccione el proveedor</div></td>
          <td width="165"> <select name="proveedor" id="proveedor" value="<?php echo $proveedor ?>" required>
           <option value="" selected>proveedor</option>
          <option disabled></option>
            <?php
            include ('conexion.php');
			$skul = "SELECT * FROM Proveedores";
			if(!$result=$db->query($skul))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$idproveedor=stripslashes($row["id_proveedor"]);
				$nomproveedor=stripslashes($row["nombre"]);
				echo "<option value=".$idproveedor.">".$nomproveedor."</option>";
				}
            ?>
			
          </select></td>
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
