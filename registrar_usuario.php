<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="hoja_estilos.css">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Inicio-Planet_Music</title>
</head>

<body class="body">
<table width="900" border="0" align="center">
  <tr>
    <td colspan="3" bgcolor="#CCCCCC">
	<iframe src="banner.php" frameborder="0" width="900" height="170" scrolling="no">    </iframe>
	
	</td>
  </tr>
  <tr>
    <td colspan="3" bordercolor="#F0F0F0" bgcolor="#CCCCCC">
	<?php include('menu.php');?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="900" height="450" scrolling="no">   </iframe></td>
  </tr>
  <tr>
    <td width="160" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="250" height="300">   </iframe></td></td>
    <td width="640" colspan="2"><form id="form1" name="form1" method="post" action="neg_regis_usuario.php">
<table align="center" width="200" border="0">
  <tr>
  <br/>
  <br/>
  <br/>
    <th scope="row"><p>Abre tu cuenta </p></th>
    </tr>
    
    <td>
      <table align="left">
     
 
      <tr>
          <td><select name="tipo_documento" id="tipo_documento" required>
           <option value="" selected>Tipo de documento</option>
          <option disabled></option>
            <?php
            include ('conexion.php');
			$sql = "SELECT * FROM tipo_documentos";
			if(!$result=$db->query($sql))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			while($row = $result->fetch_assoc())
			{
				$iidtipo=stripslashes($row["id_tipo"]);
				$ddescripcion=stripslashes($row["descripcion"]);
				echo "<option value=".$iidtipo.">".$ddescripcion."</option>";
				}
            ?>
			
          </select></td><br>
          </tr>
          
          <tr>
          <td><input type="text" name="numero_documento" id="numero_documento" placeholder="Numero de documento" required/></td><br>
          </tr>
          <tr>
          <td><input type="text" name="nombre" id="nombre" placeholder="Nombre" required/></td>
        </tr>
        <tr>
          <td><label for="textfield2"></label>
            <input type="text" name="apellido" id="apellido" placeholder="Apellido" required/></td>
            </tr>
            <tr>
          <td><label for="textfield4"></label>
            <input type="text" name="correo" id="correo" placeholder="Correo" required/></td>
        </tr>
        <tr>
        <td><input type="text" pattern="[A-Za-z]{4-10}" title="Debe contener 4 a 10 caracteres" name="nombre_de_usuario" id="nombre_de_usuario" placeholder="Usuario" required/>
        </td>
        </tr>
        <tr>
          <td><label for="textfield5"></label>
            <input type="password" pattern="[0-9]{3}" title="Debe contener 3 caracteres"  name="contraseña" id="contraseña" placeholder="Contraseña" required/></td>
        </tr>
        <tr>
        <td>
    <input align="middle" type="submit" name="button" id="button" value="Registrarse" /></td>
  </tr>
  
  </table>
  </td>
</table>
</form></td>
  </tr>
  <tr>
    <td colspan="3"><p>
	<iframe src="footer.php" frameborder="0" width="900" height="300" scrolling="no">   </iframe>
	</p>
    </td>
  </tr>
</table>
</body>
</html>
