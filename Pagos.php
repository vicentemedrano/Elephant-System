
<!DOCTYPE HTML>
<html>
<head>
<title>ELEPHANT SYSTEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/pag.css" rel="stylesheet" type="text/css" media="all" />

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
						<a href="Pagos.php" class="active">
						<i class="icon2"></i>
						<strong>Pagos</strong>
						</a>
					</li>
					<li>
						<a href="Registro.php">
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
						<a href="Admon.php">
						<i class="icon5"></i>
						<strong>Administraci&oacute;n</strong>
						</a>
					</li>
				</ul>
			</div><!-- fin de menu -->	

		<form class="_form"> 
					<h4>Registro de Ventas</h4>
					<br>
					

					<?php
						include("conexion.php");
						$con=conectar();

						

							$busqueda="select * from venta";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>VENTAS</h4></caption><tr><td>ID Venta</td><td>id_Pedido</td><td>Subtotal</td><td>IVA</td><td>Total</td><td>Fecha</td><td>Hora</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['id_venta']."</td>";
								echo "<td>".$dato['id_pedido']."</td>";
								echo "<td>".$dato['subtotal']."</td>";
								echo "<td>".$dato['IVA']."</td>";
								echo "<td>".$dato['total']."</td>";
								echo "<td>".$dato['fecha_ped']."</td>";
								echo "<td>".$dato['hora_ped']."</td>";
								echo "</tr>";

							}
							
							echo "<CAPTION valign= top><p>Total de Ventas Realizadas : $total</p></CAPTION>";
							echo "</table>";
						 

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