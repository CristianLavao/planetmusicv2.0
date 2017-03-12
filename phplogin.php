<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" charset="utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<?php




class Login
{
	public function iniciosesion($Usuario, $Contrasena)
	{
		include('conexion.php');
		
		session_start();

$usuario=$_POST["Usuario"];
$contrasena=$_POST["Contrasena"];
	
//hhhhhhhhhhhhhhhhhhhhhhhhhhhh
$sql = "SELECT * FROM Usuarios WHERE nombre_de_usuario='$usuario'";
if(!$result = $db->query($sql)){
  die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
}
while($row = $result->fetch_assoc()){
			$uusername=stripslashes($row["nombre_de_usuario"]);
			$ccontrasena=stripslashes($row["contrasena"]);
			
	
			$rroles_id_rol=stripslashes($row["roles_id_rol"]);
			
			//-----traer texto del id del rol -------
				$sql2 = "SELECT * FROM Roles WHERE id_rol='$rroles_id_rol'";
				if(!$result2 = $db->query($sql2)){
  				die('Hay un error corriendo en la consulta o datos no encontrados!!! [' . $db->error . ']');
				}
					while($row2 = $result2->fetch_assoc()){
				$iidrol=stripslashes($row2["id_rol"]);	
				$ddescripcion=stripslashes($row2["descripcion"]);	
				
				echo "";
				
						
				}			
			//-----traer texto del id del rol -------	

}		

//$usuariocorrecto="alejo";
//$contrasenacorrecta="123"; 


//Esta es la consulta de la DB  (Select * from jsdfjsdhfkj WHERE usuario="'$usuario'")
//hhhhhhhhhhhhhhhhhhhhhhhhhhhh

//echo "esta es una página confidencial";

if (($usuario==$uusername) && ($contrasena == $ccontrasena))
{
echo "todo admin. Supongamos que aqui hay un reporte confidencial";
$_SESSION['login']="1";
$_SESSION['Usuario']=$usuario;
if ($ddescripcion=="Administrador")
{
$_SESSION['rol']=$ddescripcion;

header ('Location: index_admin.php');
}
}





if (($usuario==$uusername) && ($contrasena == $ccontrasena))
{
echo "todo ok. Supongamos que aqui hay un reporte confidencial";
$_SESSION['login']="1";
$_SESSION['Usuario']=$usuario;
if ($ddescripcion=="Usuario")
{
$_SESSION['rol']=$ddescripcion;
header ('Location: index_usuario.php');

}
}










if (($usuario!=$uusername) || ($contrasena != $ccontrasena))
{
	echo "
	<script language='JavaScript'>
	var n = 'contrase\u00f1a';
	alert('Nombre de usuario y '+n+' incorrectos vuelve a intentar');
	</script>
		";
		header('Refresh:0, URL=inicio_sesion3.php');
	
	
	
//crear variable de sesion
//header ("Location: index.php");

}


}

}

$nuevo=new Login();
$nuevo-> iniciosesion($_POST['Usuario'], $_POST['Contrasena']);


?>

</body>
</html>
