
<?php
	include("conexion.php");
	include ("fpdf/fpdf.php");
	$con=conectar();

	$encontrar="select id_personal, nombre_per from personal ORDER BY nombre_per";
	$cont = mysql_query($encontrar,$con) or die("Error en: $encontrar: " . mysql_error());
	$num =mysql_num_rows($cont);

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
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel='icon' href='images/iconoE.png' />
<script src='js/jquery.js'></script>
		<!--<script >
			$( document ).ready( function (){
				
				$( '#btnEnviar' ).click( function (){
					
					event.preventDefault();
					
					
					var mesa= $_POST["select"];
					Mesero = $( '.lstMesero' ).val() ;
					plato = $( '.lstPlato' ).val() ,
					cant = $( '.txtcant' ).val() ,
					coment = $( '.txtcomen' ).val() ;
					
				
					if ( mesa && Mesero && plato && cant && coment )
					{
						
						$( 'body' ).ajaxStart( function (){
							
							$( '#contenedor' ).html( '<img src="images/cargando.gif" />' );
							
						});
					
						
						$.post( 'recibir.php' , {
								mesa : mesa,
								mesero : Mesero,
								plato : plato,
								cant : cant,
								coment : coment
							}  , function ( exito ){
								
								$( '#contenedor' ).removeClass('error').html( exito ).fadeIn(  );
								
								/*$( '#verPDF' ).click( function(){
									
									window.open( "php/verDatos.php" , "Datos de la Base" , "width=600 , height = 500");
									
									$( this ).fadeOut( 1000 );
									return false;
									
								});*/
								
							});
					
					
				    $_POST["select"];
					$( '.lstMesero' ).val() ;
					$( '.lstPlato' ).val();
					$( '.txtcant' ).val() ;
					$( '.txtcomen' ).val() ;
						
					}else
					
					{
						$( '#contenedor' ).fadeIn( 500 ).addClass( 'error' ).html( 'Llena todo' ).fadeOut( 1000 );
						
						}
					
					
					
				
					
					
				});
				
			});
		</script>-->
</head>
<body>
<div class="wrap">
	<div class="main"><!-- incio de  div main -->
		<div class="grid1_of_1"><!-- inicio de cuadricula1 -->
		<div class="menu"><!-- inicio menu -->
			<ul class="mcd-menu">
				<li>
					<a href="index.php" class="active">
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
					<a href="Registro/Registro.php">
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
		
		
			<form class="_form" method="post"  action="index.php"> 


								<pre>
									<input type='submit' value='1' name='select'  style='background:url("images/Mesas.png") center no-repeat;'/>		<input type='submit' value='5' name='select'style='background:url("images/Mesas.png") center no-repeat;'/> <input type='submit' value='6' name='select' style='background:url("images/Mesas.png") center no-repeat;'/>

									<input type='submit' value='2' name='select' style='background:url("images/Mesas.png") center no-repeat;'/>		<input type='submit' value='7' name='select' style='background:url("images/Mesas.png") center no-repeat;'/> <input type='submit' value='8' name='select' style='background:url("images/Mesas.png") center no-repeat;'/>

									<input type='submit' value='3' name='select' style='background:url("images/Mesas.png") center no-repeat;'/>		 <input type='submit' value='9' name='select' style='background:url("images/Mesas.png") center no-repeat;'/> <input type='submit' value='10' name='select' style='background:url("images/Mesas.png") center no-repeat;'/>	

									<input type='submit' value='4' name='select' style='background:url("images/Mesas.png") center no-repeat;'/>

													<input type='submit' value='11' name='select'style='background:url("images/Mesas.png") center no-repeat;' />
				 
									  <input type='submit' value='12' name='select' style='background:url("images/Mesas.png") center no-repeat;' /> 		 		 <input type='submit' value='13' name='select' style='background:url("images/Mesas.png") center no-repeat;' />
								</pre>
	

				

				
<?php
//if ($_POST) {
	//echo "<h4>Mesa #".$_POST["select"]."</h4>";
if(isset($_REQUEST['select'])) {
		//$mesa=$_REQUEST['select'];
	$mesa=$_POST["select"];

?>
				
			<section class="comanda" >
				<form action="" method="post">

			<h4>COMANDA</h4>

			<?php echo "<h4>Mesa #".$mesa."</h4>";} ?>
			<!--<label>Mesa #</label>-->
			<input type='text' name="n_mesa" value="<?php echo $mesa; ?>" style="visibility:hidden"/>
			<br/><br/>
			<select name="mesero">
				<option selected="" value="" class='mesero' name='mesero'>[Mesero]</option>
				<?php

					while ($filaM=mysql_fetch_array($cont)) 
					{
						
						echo "<option  value='". $filaM["id_personal"]."'>".$filaM["nombre_per"]."</option>";
					}
				?>
			</select>
			<br/><br/>
			<select name="plat">
				<option selected="" value="" class='plat' name='plat'>[Selecciona un platillo o bebida]</option>
				<?php

					while ($filaP=mysql_fetch_array($res)) 
					{
						
						echo "<option  value='". $filaP["id_platillo"]."'>".$filaP["nombre_plat"]."</option>";
					}
				?>
				</select>
			<br/><br/>
			<label>Cantidad</label>
			<input type='text' class='txtcant' name="cant" placeholder='Cantidad de ordenes...' />
			<br/><br/>
			<label>Comentarios</label>
			<input type='text' class='txtcomen' name="comen" placeholder='Comentarios...' />
			<br/><br/>
			<!--<a href='#' id='btnEnviar' class='enviar' >Enviar</a>-->
			 <input type='submit' value='Enviar' name='Enviar' /> 
			</form>
		</section>
 	</form>
 	
 	
 </div>
				
	
	</div><!-- fin de div main -->
</div>
		<img src="images/Ele.png"  alt="" class="grid1_of_2">
		<?php
			date_default_timezone_set("America/Mexico_City" ) ; 
			echo "<p>Fecha:".date("d/m/Y"). "<br>Hora:".date("h:i:s")."</p>";

	   	?>
</body>
</html>

<?php
		if(isset($_REQUEST['Enviar'])){
			//$mesa=isset( $_REQUEST['select']);
			//$mesa=(isset( $_POST [ 'select' ]) ? strtolower ( $_POST [ 'select' ]) : NULL );
		    $n_mesa = $_POST['n_mesa' ];
			$mesero = $_POST['mesero' ];
			$id_p = $_POST['plat'];
			$cant = $_POST['cant'];
			$coment = $_POST['comen' ];
			date_default_timezone_set("America/Mexico_City" ) ; 
			$fecha = date("Y-m-d");
			$hora = date("h:i:s");
			$pre=$_POST['plat'];
			$con1=mysql_query("select precio_plat from platillo where id_platillo='$pre'") or die (mysql_error());
			$reg1=mysql_fetch_array($con1);
			$n=$reg1['precio_plat'];
			if ($cant>1) 
			{
				$precio=$cant*$n;
				mysql_query( "INSERT INTO pedido VALUES 
			('','".$id_p."', '".$cant."', '".$coment."','".$precio."','".$n_mesa."','".$mesero."'
			,'".$fecha."','".$hora."' )" )or die (mysql_error());
			echo "<h2 align= 'center'>Pedido en proceso</h2><br>"; 
			}
			else
			{
				$n=$n;
				mysql_query( "INSERT INTO pedido VALUES 
			('','".$id_p."', '".$cant."', '".$coment."','".$n."','".$n_mesa."','".$mesero."'
			,'".$fecha."','".$hora."' )" )or die (mysql_error());
			echo "<h2 align= 'center'>Pedido en proceso</h2><br>"; 
			}
			 


		    $con3=mysql_query("select nombre_plat from platillo where id_platillo='$pre'") or die (mysql_error());
			$reg3=mysql_fetch_array($con3);
			$n3=$reg3['nombre_plat'];
			$con2=mysql_query("select nombre_per from personal where id_personal='$mesero'") or die (mysql_error());
			$reg2=mysql_fetch_array($con2);
			$n2=$reg2['nombre_per'];	 
 $pdf = new FPDF();
        $pdf->AddPage();
		$pdf->Image('images/iconoE.png' , 20 , 10 , 20 , 20, 'png');
		 $pdf->Ln(20);
        $pdf->SetFont('Helvetica', 'B', 11);
        $pdf->Cell(150, 10, 'ELEPHANT SYSTEM', 0);
        $pdf->Ln();
		$pdf->Write (7,"COMANDA");
		$pdf->Ln();
		$pdf->SetFont('Helvetica', 'B', 9);
		$pdf->Write (7,$fecha);
		$pdf->Ln(); //salto de linea
		$pdf->Write (7,$hora);
		$pdf->Ln(); //salto de linea
		$pdf->Cell(7,$n2,1,0,'C');
		$pdf->Ln();//ahora salta 15 lineas 
		$pdf->SetTextColor('255','0','0');//para imprimir en rojo 
		$pdf->Write (7,$cant,$n3);
		$pdf->Ln(); //salto de linea
		$pdf->Write (7,$n_mesa);
		$pdf->Ln(); //salto de linea
        $pdf->Output("comanda.pdf",'F');
		echo "<script language='javascript'>window.open('comanda.pdf','_self','');</script>";//para ver el archivo pdf generado
		exit;		

		}
	?>		
				