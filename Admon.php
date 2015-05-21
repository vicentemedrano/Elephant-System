<!DOCTYPE HTML>
<html>
<head>
<title>ELEPHANT SYSTEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/style5.css" rel="stylesheet" type="text/css" media="all" />
<script src="js/jquery.js"></script>
<script >
	$(document).ready(function(){
		console.log("Bien Hecho");
	});
</script>
<script >
$( '#verPDF' ).click( function(){
									
									window.open( "Platillos.php" , "Datos de la Base" , "width=600 , height = 500");
									
									$( this ).fadeOut( 1000 );
									return false;
									
								});
</script>
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
					<a href="Registro.php" >
						<i class="icon3"></i>
						<strong>Registro</strong>
					</a>
				</li>
				<li>
					<a href="Ingredientes.php">
						<i class="icon4"></i>
						<strong>Ingredientes</strong>
					</a>
				</li>
				<li>
					<a href="Admon.php" class="active">
						<i class="icon5"></i>
						<strong>Administraci&oacute;n</strong>
					</a>
				</li>
			</ul>
		</div><!-- fin de menu -->	
		
			
				<form class="_form"> 
						<h4 >Administraci&oacute;n</h4>
					<ul class="list1"> 
						<br><br>
						<li>
							<input type="submit" value="Platillos" name="platillos"> 
						</li>
						<br>
						<li>
							<input type="submit" value="Personal" name="personal">
						</li>
						<br>
						<li>
							<input type="submit"  value="Mesas" name="mesas">
						</li>
						<br>
						<li>
							<input type="submit" value="Proveedores" name="proveedor">
						</li>
						<br>
						<li>
							<input type="submit" value="Insumos" name="insumos">
						</li>
					</ul>
					<?php
						include("conexion.php");
						$con=conectar();

						if(isset($_REQUEST['platillos']))
						{

							$busqueda="select * from platillo";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);


							echo "<table border='2'><caption><h4>PLATILLOS</h4></caption><tr><td>ID</td><td>Platillo</td><td>Precio</td><td>Tipo</td><td>Desripci&oacute;n</td></tr>";
							
							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['id_platillo']."</td>";
								echo "<td>".$dato['nombre_plat']."</td>";
								echo "<td>".$dato['precio_plat']."</td>";
								echo "<td>".$dato['tipo']."</td>";
								echo "<td>".$dato['descripcion_p']."</td>";
								echo "</tr>";

							}

							echo "<CAPTION valign= top><p>Total de Platillos Registrados : $total</p></CAPTION>";
							echo "</table>";
							echo "<input type= 'submit' value= 'IMPRIMIR' name= 'verPDF'> ";
							
						}

						if(isset($_REQUEST['personal']))
						{

							$busqueda="select * from personal";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>PERSONAL</h4></caption><tr><td>ID</td><td>Nombre</td><td>Direccion</td><td>Telefono</td><td>Puesto</td><td>Turno</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['id_personal']."</td>";
								echo "<td>".$dato['nombre_per']."</td>";
								echo "<td>".$dato['direccion_per']."</td>";
								echo "<td>".$dato['telefono_per']."</td>";
								echo "<td>".$dato['puesto']."</td>";
								echo "<td>".$dato['turno']."</td>";
								echo "</tr>";

							}

							echo "<CAPTION valign= top><p>Total de Personas Registradas : $total</p></CAPTION>";
							echo "</table>";
							
						}

						if(isset($_REQUEST['mesas']))
						{

							$busqueda="select * from mesa";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>MESAS</h4></caption><tr><td>Numero</td><td>cantidad Personas</td><td>Ubicaci&oacute;n</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['id_mesa']."</td>";
								echo "<td>".$dato['num_personas']."</td>";
								echo "<td>".$dato['Ubicacion']."</td>";
								echo "</tr>";

							}

							echo "<CAPTION valign= top><p>Total de Mesas Registradas : $total</p></CAPTION>";
							echo "</table>";
							
						}

						if(isset($_REQUEST['proveedor']))
						{

							$busqueda="select * from proveedor";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>PROVEEDORES</h4></caption><tr><td>ID</td><td>Proveedor</td><td>Direccion</td><td>Telefono</td><td>Correo Electr&oacute;nico</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['id_proveedor']."</td>";
								echo "<td>".$dato['nombre_p']."</td>";
								echo "<td>".$dato['direccion_p']."</td>";
								echo "<td>".$dato['telefono_p']."</td>";
								echo "<td>".$dato['correo_p']."</td>";
								echo "</tr>";

							}

							echo "<CAPTION valign= top><p>Total de Proveedores Registrados : $total</p></CAPTION>";
							echo "</table>";
							
						}

						if(isset($_REQUEST['insumos']))
						{

							$busqueda="select * from insumo";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>INSUMOS</h4></caption><tr><td>ID</td><td>Proveedor</td><td>Insumo</td><td>Cantidad</td><td>Unidad</td><td>Precio</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['id_insumo']."</td>";
								echo "<td>".$dato['nom_proveedor']."</td>";
								echo "<td>".$dato['nombre_ins']."</td>";
								echo "<td>".$dato['cantidad_ins']."</td>";
								echo "<td>".$dato['unidad_medida']."</td>";
								echo "<td>".$dato['precio_ins']."</td>";
								echo "</tr>";

							}

							echo "<CAPTION valign= top><p>Total de Insumos Registrados : $total</p></CAPTION>";
							echo "</table>";
							
						}


						?>
				</div>
						
				</form>	

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

