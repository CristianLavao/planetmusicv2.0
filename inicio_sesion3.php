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
    <td colspan="3" bgcolor="#CCCCCC" >
	<iframe src="banner.php" frameborder="0" width="900" height="170">    </iframe>
	
	</td>
</tr>
  <tr>
    <td colspan="3" bordercolor="#F0F0F0" bgcolor="#CCCCCC">
	<?php include('menu.php'); ?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"></td>
  </tr>
  <tr>
   <td width="160" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="250" height="300">   </iframe></td></td>
    <td width="640" colspan="2" bgcolor="#CCCCCC"><form id="form1" name="form1" method="post" action="phplogin.php">
  <table align="center" width="260" height="270" border="0">
    <tr>
      <th width="260"scope="row"><p><img src="img_iniciosesion.png" alt="" width="260" height="70" align="texttop" /></p>
        <p>Usuario
          <label for="textfield4"></label>
        </p>
        <p>
          <input type="text" pattern="[A-Za-z]{4-10}" title="Debe contener 4 a 10 caracteres"  name="Usuario" id="Usuario" autocomplete="off" required/>
        </p>
        <p>Contraseña</p>
        <p>
          <label for="textfield5"></label>
          <input type="password" pattern="[0-9]{3}" title="Debe contener 3 caracteres" name="Contrasena" id="Contrasena" required />
        </p>
        
       
		<a href="registrar_usuario.php" target="_parent">Registrate</a>
        <p>
          <input type="submit" name="button" id="button" value="Ingresar" />
      </p></th>
    </tr> 
  </table></form></td> 

	
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
