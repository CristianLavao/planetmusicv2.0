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
	
	$usuario=$_POST["usuario"];
	
	
$sql = "SELECT * FROM Usuarios WHERE id_usuario='$usuario'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
	$iidusuario=stripslashes($row["id_usuario"]);
	$iidentificacion=stripslashes($row["numero_documento"]);
	$nnombre=stripslashes($row["nombre"]);
	$aapellido=stripslashes($row["apellido"]);
	$ccorreo=stripslashes($row["correo"]);
	$uusuario=stripslashes($row["nombre_de_usuario"]);
	$ccontrasena=stripslashes($row["contrasena"]);
	$rol=stripslashes($row["roles_id_rol"]);
	$tipo=stripslashes($row["tipo_documentos_id_tipo"]);
	
	
	//echo $row["idarticulos"]. $row["nombre"]; 
	//echo "Nombre: $nnombre   - Precio: $pprecio $articulo - $nnombre  </br>"; 
		
}

?>

<form id="form1" name="form1" method="post" action="neg_editar_usuario.php">
      <p>&nbsp;</p>
      <table width="628" border="0" bordercolor="cccccc" bgcolor="f5f5f5">
      <tr>
          <td><input type="hidden" name="id" type="text" id="id" placeholder="id del usuario" value="<?php echo $iidusuario ?>"/></td>
        </tr>
        <tr>
          <td width="304"><div align="right">Digite la identificación del usuario </div></td>
          <td width="165"><label>
            <input name="identificacion" type="text" id="identificacion" value="<?php echo $iidentificacion ?>"/>
            <br />
          </label></td>
        </tr>
           <tr>
          <td><div align="right">Seleccione el tipo de documento</div></td>
          <td width="165"> <select name="tipo" id="tipo" value="<?php echo $tipo ?>" required>
           <option value="" selected>Tipo</option>
          <option disabled></option>
            <?php
            include ('conexion.php');
			$skul = "SELECT * FROM Tipo_documentos";
			if(!$result=$db->query($skul))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$iidtipo=stripslashes($row["id_tipo"]);
				$desctipo=stripslashes($row["descripcion"]);
				echo "<option value=".$iidtipo.">".$desctipo."</option>";
				}
            ?>
			
          </select></td>
          </tr>   
        <tr>
          <td width="304"><div align="right">Digite el nombre del usuario </div></td>
          <td width="165"><label>
            <input name="nombre" type="text" id="nombre" value="<?php echo $nnombre ?>"/>
            <br />
          </label></td>
        </tr>
         <tr>
          <td width="304"><div align="right">Digite el apellido del usuario </div></td>
          <td width="165"><label>
            <input name="apellido" type="text" id="apellido" value="<?php echo $aapellido ?>"/>
            <br />
          </label></td>
        </tr>
        <tr>
          <td><div align="right">Digite el correo: </div></td>
          <td><input name="correo" type="text" id="correo" placeholder="correo" value="<?php echo $ccorreo ?>"/></td>
        </tr>
        <tr>
          <td><div align="right">Digite el alias del usuario: </div></td>
          <td><input name="usuario" type="text" id="usuario" value="<?php echo $uusuario ?>" /></td>
        </tr>
        <tr>
          <td><div align="right">Digite la contraseña: </div></td>
          <td><input name="contrasena" type="password" id="contrasena" value="<?php echo $ccontrasena ?>"/></td>
        </tr>
        <tr>
          <td><div align="right">Seleccione el rol: </div></td>
          <td width="165"> <select name="rol" id="rol"  required>
           <option value="" selected>Rol</option>
          <option disabled ></option>
            <?php
            
			$sql = "SELECT * FROM Roles";
			if(!$result=$db->query($sql))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$idrol=stripslashes($row["id_rol"]);
				$desrol=stripslashes($row["descripcion"]);
				echo "<option  value=".$idrol.">".$desrol."</option>";
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
