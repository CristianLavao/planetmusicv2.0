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
	<iframe src="banner.php" frameborder="0" width="880" height="170">    </iframe>
	
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
    <td width="724" colspan="2"><form id="form1" name="form1" method="post" action="neg_cargar_usuario.php">
      <p>&nbsp;</p>
      <table width="628" border="0" bordercolor="cccccc" bgcolor="f5f5f5">
        <tr>
          <td width="304"><div align="right">Digite La Identificación </div></td>
          <td width="165"><label>
            <input name="identificacion" type="text" id="identificacion" required/>
            <br />
          </label></td>
        </tr>
        <tr>
          <td><div align="right">Seleccione Tipo de Identificación</div></td>
          <td width="165"> <select name="tipo" id="tipo" required>
          <option value="" selected="selected">Tipo</option>
          <option disabled></option>
            <?php
            include ('conexion.php');
			$skul = "SELECT * FROM tipo_documentos";
			if(!$result=$db->query($skul))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$idtipo=stripslashes($row["id_tipo"]);
				$ddescripcion=stripslashes($row["descripcion"]);
				echo "<option value=".$idtipo.">".$ddescripcion."</option>";
				}
            ?>
			
          </select></td>
          </tr>      
        <tr>
          <td><div align="right">Digite el nombre </div></td>
          <td><input name="nombre" type="text" id="nombre"  required/></td>
        </tr>
        <tr>
          <td><div align="right">Digite el apellido: </div></td>
          <td><input name="apellido" type="text" id="apellido" required/></td>
        </tr>
        <tr>
          <td><div align="right">Digite el correo: </div></td>
          <td><input name="correo" type="text" id="correo" required/></td>
        </tr>
        
        <tr>
          <td><div align="right">Digite el nombre de usuario: </div></td>
          <td><input name="usuario" type="text" id="usuario" required/></td>
        </tr>
        
        <tr>
          <td><div align="right">Digite la contraseña: </div></td>
          <td><input name="contrasena" type="password" id="contrasena" required/></td>
        </tr>
        
                <tr>
          <td><div align="right">Seleccione Rol</div></td>
          <td width="165"> <select name="rol" id="rol" required>
          <option value="" selected="selected">Rol</option>
          <option disabled></option>
            <?php
            include ('conexion.php');
			$skul = "SELECT * FROM Roles";
			if(!$result=$db->query($skul))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$idrol=stripslashes($row["id_rol"]);
				$ddescriprol=stripslashes($row["descripcion"]);
				echo "<option value=".$idrol.">".$ddescriprol."</option>";
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
    </form>    <p>&nbsp;</p>
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
