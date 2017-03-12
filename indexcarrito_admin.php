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
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
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
	<?php include('menu_admin.php'); ?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="870" height="450" scrolling="no" >   </iframe></td>
  </tr>
  <tr>
    <td width="160" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="250" height="300">   </iframe></td>
    <td width="724" colspan="2">
	

<form id="form1" name="form1" method="post" action="Neg_Carro_admin.php" autocomplete="OFF">
      <p>&nbsp;</p>
      <table width="628" border="0" bordercolor="cccccc" bgcolor="f5f5f5">
      <tr>
          <td><input type="hidden" name="idarticulos" type="text" id="idarticulos" placeholder="Id del articulo"/></td>
        </tr>
		<tr>
          <td><div align="right">Seleccione Articulo</div></td>
          <td width="165"> <select name="Articulo" id="Articulo"  required>
          <option value="" selected>Articulo</option>
          <option disabled ></option>
            <?php
            include ('conexion.php');
			$sql = "SELECT * FROM articulos";
			if(!$result=$db->query($sql))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$idarticulos=stripslashes($row["id_articulo"]);
				$nombre=stripslashes($row["nombre"]);
				  
				echo "<option value=".$nombre.">".$nombre."</option>"; 
				}
            ?>
			
          </select></td>
          </tr> 
       
		         <tr>
          <td><div align="right">Seleccione Cantidad</div></td>
          <td width="165"><label for="textfield"></label>
            <input type="text" name="Cantidad" id="Cantidad" required /></td>
          </tr>                  
        
       
      
        
                 
          
         <tr> 

          
         <tr> 
         <td>					<button type="submit" class="waves-effect waves-light btn">Añadir al carrito</button>
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
<script type="text/javascript" src="js/jquery.js"></script>
	<script src="js/materialize.js"></script>
	<script>
		$(document).ready(function() {
    	$('select').material_select(); 
    	});
	</script>
</html>

<?php 
ob_end_flush();
?>