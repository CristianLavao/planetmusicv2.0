<?php
include ('seguridad_usuario.php');
?>
<!DOCTYPE html>
<html>
<head>
<link rel="icon" type="image/png" href="img_planet.png" />
<link rel="stylesheet" type="text/css" href="hoja_estilos.css">
	<meta charset="utf-8">
	<title>Planet Music</title>
	<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
	<!--<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">-->
</head>
<body class="body">
<body class="container">
	<div class="table">



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
	<?php include('menu_usuario.php');?>
	
	</td>
  </tr>
  <tr>
    <td colspan="3"><iframe src="slider.php" frameborder="0" width="870" height="450" scrolling="no" >   </iframe></td>
  </tr>
  <tr>
    <td width="160" height="264" bgcolor="#CCCCCC"><iframe src="publicidad.php" frameborder="0" width="250" height="300" scrolling="no">   </iframe></td>
    <td width="724" colspan="2">
	

<?php 
	@$Producto=$_POST['Articulo'];
	
	
	
	@$cantidad=$_POST['Cantidad'];
	$Precio="0";
	$_SESSION['cont']=0;
	/*-------------------------------------------*/
	
	
	
	
	
	
	
	
	
	/*-------------------------------------------*/
	
	
            include ('conexion.php');
			//echo "El prodcuto es: $Producto";
			$sql = "SELECT * FROM articulos WHERE nombre='$Producto'";
			if(!$result=$db->query($sql))
			{
				die('Lo sentimos, ocurrio un erro en la consulta. Por favor pongase en contacto con el suminsitrador de servicios.['. $db->error.']');
			}
			
			$algo="";
			
echo "<center><table summary='745' width=0 border=1 bordercolor=cccccc bgcolor=f5f5f5>
			<tr>
			<td width='200'><center><strong>Producto".$algo." </strong>   </td>
			<td width='200'><center><strong>Precio".$algo."  </strong>  </td>
			<td width='200'><center><strong>Cantidad".$algo." </strong>   </td>
			<td width='200'><center><strong>Total".$algo." </strong>   </td>
			</tr>
			"; 
			
			
			
			while($row = $result->fetch_assoc())
			{
				$Precio=stripslashes($row["precio"]);
				
				
			}
    ?>
	<?php
	
	
	/*-------------------------------------------*/
	
	$_SESSION['cont']=$_SESSION['cont']+1;
	
	$cont=$_SESSION['cont'];
	$CarroTemp=$Precio*$cantidad;

	$_SESSION['productos'][$cont]=$Producto;
	$_SESSION['precio'][$cont]=$Precio;
	$_SESSION['cantidad'][$cont]=$cantidad;
	$_SESSION['total'][$cont]=$CarroTemp;
	$contT=1;
?>




	
	
	
		<?php
		echo "<br>";
		echo "<br>";
		
					while ($contT<=$cont){
						
						echo "
			<tr>
			<td width='200'>".$_SESSION['productos'][$contT]."    </td>
			<td width='200'>".$_SESSION['precio'][$contT]."    </td>
			<td width='200'>".$_SESSION['cantidad'][$contT]."    </td>
			<td width='200'>".$_SESSION['total'][$contT]."    </td>
			</tr>
			";		
			
			
			echo "</table></center>";
						$contT=$contT+1;
					}
					echo "Total de la Compra: ";
					$_SESSION['Total_compra']=$_SESSION['Total_compra']+$_SESSION['total'][$cont];
				?>
				<?php echo "$".$_SESSION['Total_compra']."<br>"; ?>
	</div>
    <p>&nbsp;</p>
    <p><a href="Cancelar_Car.php">Cancelar Compra</a></p>
	<p><a href="indexcarrito.php">Añadir otro producto</a></p>
    <tr>
    <td colspan="3"><p>
	<iframe src="footer.php" frameborder="0" width="900" height="300" scrolling="no">   </iframe>
	</p>
    </td>
  </tr>
</body>
</html>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Carro de compras</title>
<link rel="stylesheet" type="text/css" href="css/materialize.min.css">
</head>
</html>
