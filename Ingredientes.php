<!DOCTYPE HTML>
<html>
<head>
<title>ELEPHANT SYSTEM</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href="css/style4.css" rel="stylesheet" type="text/css" media="all" />

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
					<a href="Ingredientes.php" class="active">
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
					<h4>Platillos</h4>
					<br>
					<ul class="list1"> 
						
						<li>
							<input type="submit" value="Entradas" name="ent"> 
						</li>
						<br>
						<li>
							<input type="submit" value="Ensaladas" name="ensal"> 
						</li>
						<br>
						<li>
							<input type="submit" value="Sopas" name="sopa"> 
						</li>
						<br>
						<li>
							<input type="submit" value="Pastas" name="pasta"> 
						</li>
						<br>
						<li>
							<input type="submit" value="Carnes" name="carne"> 
						 </li>
						 <br>
						 <li>
							<input type="submit" value="Bebidas" name="bebidas"> 
						 </li>
					</ul>

					<?php
						include("conexion.php");
						$con=conectar();

						if(isset($_REQUEST['ent']))
						{
							$busqueda="select * from platillo where tipo=4";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>PLATILLOS DE ENTRADA</h4></caption><tr><td>Platillo</td><td>Precio</td><td>Tipo</td><td>Desripci&oacute;n</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['mombre_plat']."</td>";
								echo "<td>".$dato['precio_plat']."</td>";
								echo "<td>".$dato['tipo']."</td>";
								echo "<td>".$dato['descripcion_p']."</td>";
								echo "</tr>";

							}
							echo "<CAPTION valign= top><p>Total de Platillos Registrados : $total</p></CAPTION>";
							echo "</table>";
						 }

						 if(isset($_REQUEST['ensal']))
						{
							$busqueda="select * from platillo where tipo=01";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>ENSALADAS</h4></caption><tr><td>Platillo</td><td>Precio</td><td>Tipo</td><td>Desripci&oacute;n</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['nombre_plat']."</td>";
								echo "<td>".$dato['precio_plat']."</td>";
								echo "<td>".$dato['tipo']."</td>";
								echo "<td>".$dato['descripcion_p']."</td>";
								echo "</tr>";

							}
							echo "<CAPTION valign= top><p>Total de Platillos Registrados : $total</p></CAPTION>";
							echo "</table>";
						 }

						 if(isset($_REQUEST['sopa']))
						{
							$busqueda="select * from platillo where id_tipop=2";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>SOPAS</h4></caption><tr><td>Platillo</td><td>Precio</td><td>Tipo</td><td>Desripci&oacute;n</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['mombre_plat']."</td>";
								echo "<td>".$dato['precio_plat']."</td>";
								echo "<td>".$dato['tipo']."</td>";
								echo "<td>".$dato['descripcion_p']."</td>";
								echo "</tr>";

							}
							echo "<CAPTION valign= top><p>Total de Platillos Registrados : $total</p></CAPTION>";
							echo "</table>";
						 }

						 if(isset($_REQUEST['pasta']))
						{
							$busqueda="select * from platillo where id_tipop=2";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>PASTAS</h4></caption><tr><td>Platillo</td><td>Precio</td><td>Tipo</td><td>Desripci&oacute;n</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['mombre_plat']."</td>";
								echo "<td>".$dato['precio_plat']."</td>";
								echo "<td>".$dato['tipo']."</td>";
								echo "<td>".$dato['descripcion_p']."</td>";
								echo "</tr>";

							}
							echo "<CAPTION valign= top><p>Total de Platillos Registrados : $total</p></CAPTION>";
							echo "</table>";
						 }

						 if(isset($_REQUEST['carne']))
						{
							$busqueda="select * from platillo where tipo=02";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>CARNES</h4></caption><tr><td>Platillo</td><td>Precio</td><td>Tipo</td><td>Desripci&oacute;n</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['nombre_plat']."</td>";
								echo "<td>".$dato['precio_plat']."</td>";
								echo "<td>".$dato['tipo']."</td>";
								echo "<td>".$dato['descripcion_p']."</td>";
								echo "</tr>";

							}
							echo "<CAPTION valign= top><p>Total de Platillos Registrados : $total</p></CAPTION>";
							echo "</table>";
						 }

						 if(isset($_REQUEST['bebidas']))
						{
							$busqueda="select * from platillo where tipo=02";
							$res = mysql_query($busqueda,$con) or die("Error en: $busqueda: " . mysql_error());
							$total=mysql_num_rows($res);

							echo "<table border='2'><caption><h4>BEBIDAS</h4></caption><tr><td>Platillo</td><td>Precio</td><td>Tipo</td><td>Desripci&oacute;n</td></tr>";

							while($dato=mysql_fetch_array($res))
							{

								echo "<tr>";
								echo "<td>".$dato['nombre_plat']."</td>";
								echo "<td>".$dato['precio_plat']."</td>";
								echo "<td>".$dato['tipo']."</td>";
								echo "<td>".$dato['descripcion_p']."</td>";
								echo "</tr>";

							}
							echo "<CAPTION valign= top><p>Total de Bebidas Registradas : $total</p></CAPTION>";
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