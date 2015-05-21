<?php
	include("conexion.php");
	$con=conectar();

	$busqueda="select id_platillo, nombre_plat from platillo ORDER BY nombre_plat";
	$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
	$total=mysql_num_rows($res);
	
?>


<!DOCTYPE HTML>
<html>
<head>
<title>ELEPHANT SYSTEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/style3.css" rel="stylesheet" type="text/css" media="all" />

</head>
<body>
<div class="wrap">
	<div class="main"><!-- incio de  div main -->
		<div class="grid1_of_1"><!-- inicio de cuadricula1 -->
		<div class="menu"><!-- inicio menu -->
			<ul class="mcd-menu">
				<li>
					<a href="index.php" >
						<i class="icon1"></i>
						<strong>Venta</strong>
					</a>
				</li>
				<li>
					<a href="Pagos.php" >
						<i class="icon2"></i>
						<strong>Pagos</strong>
					</a>
				</li>
				<li>
					<a href="Registro.php" class="active">
						<i class="icon3"></i>
						<strong>Registro</strong>
					</a>
				</li>
				<li>
					<a href="Ingredientes.php" >
						<i class="icon4"></i>
						<strong>Ingredientes</strong>
					</a>
				</li>
				<li>
					<a href="Admon.php" >
						<i class="icon5"></i>
						<strong>Administraci&oacute;n</strong>
					</a>
				</li>
			</ul>
		</div><!-- fin de menu -->	
		


			<form class="_form"> 
					<h4>Agregar Registro</h4>
					<br>
					<ul class="list1"> 
						
						<li>
							<input type="submit" value="Personal" name="per"> 
						</li>
						<br>
						<li>
							<input type="submit" value="Proveedores" name="prov"> 
						</li>
						<br>
						<li>
							<input type="submit" value="Insumos" name="ins"> 
						</li>
						<br>
						<li>
							<input type="submit" value="Platillos" name="plat"> 
						</li>
						
					</ul>



<form name="nuevo_usuario" method="POST" action="guardar.php">
		     <table  border='0'>
		     	<caption><h4>Mesas</h4></caption><br><br>
			
				<tr></tr>
				<tr></tr>
				<tr><td whidth="20"># Mesa</td> 
					<td whidth="60"><input type="text" name='id_m' size='18'></td>
				</tr>
				<tr><td whidth="20">Numero de Personas</td>
					<td whidth="60"><input type="text" name='per' size='18'></td>
				</tr>
				<tr><td whidth="20"><select name="Platillo">
									<option selected="" value="">[Selecciona un platillo o bebida]</option>
									<?php

										while ($fila=mysql_fetch_array($res)) 
										{
											
											echo "<option  value='". $fila["id_platillo"]."'>".$fila["nombre_plat"]."</option>";
										}
									?>
				</select></td>
					<td whidth="60"><input type="text" name='per' size='18'></td>
				</tr>
				<tr><td whidth="20">Ubicacion</td>
					<td whidth="40"><input type="text" name='ubi' size='18'></td>
				<tr><td whidth="30"><input type="reset"  name="cancelar" ></td>
					<td whidth="30"><input type='submit'  name="agregar" ></td>
				</tr>
				</table>
				</form>
			</form>	
		</div>
						
				

		</div><!--Fin de Caudricula 1-->

	</div><!--Fin de main-->
		
</div><!-- fin de div= wrap -->
		
			
			
					<img src="images/Ele.png"  alt="" class="grid1_of_2">
					<?php
						date_default_timezone_set("America/Mexico_City" ) ; 
						echo "<p>Fecha:".date("d/m/Y"). "<br>Hora:".date("h:i:s")."</p>";

			   		?>
</body>
</html>