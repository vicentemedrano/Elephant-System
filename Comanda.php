<?php

include "fpdf/fpdf.php";
include "conexion.php";
$con=conectar();

/* tenemos que generar una instancia de la clase */
        $pdf = new FPDF();
        $pdf->AddPage();
       
        	$n_mesa = $_POST['n_mesa' ];
			$mesero = $_POST['mesero' ];
			$id_p = $_POST['plat'];
			$cant = $_POST['cant'];
			$coment = $_POST['comen' ];
			date_default_timezone_set("America/Mexico_City" ) ; 
			$fecha = date("Y-m-d");
			$hora = date("h:i:s");
			$pre=$_POST['plat'];
			$con1=mysql_query("select nombre_plat from platillo where id_platillo='$pre'") or die (mysql_error());
			$reg1=mysql_fetch_array($con1);
			$n=$reg1['nombre_plat'];
			$con2=mysql_query("select nombre_per from personal where id_personal='$mesero'") or die (mysql_error());
			$reg2=mysql_fetch_array($con2);
			$n2=$reg2['nombre_per'];
			

/* seleccionamos el tipo, estilo y tamaño de la letra a utilizar */
 $pdf->Image('images/iconoE.png' , 20 , 10 , 20 , 20, 'png');
		 $pdf->Ln(20);
        $pdf->SetFont('Helvetica', 'B', 11);
        $pdf->Cell(150, 10, 'ELEPHANT SYSTEM"', 0);
        $pdf->Ln();
		$pdf->Write (7,"COMANDA");
		$pdf->Ln();
		$pdf->SetFont('Helvetica', 'B', 9);
		$pdf->Write (7,$fecha);
		$pdf->Ln(); //salto de linea
		$pdf->Write (7,$hora);
		$pdf->Ln(); //salto de linea
		$pdf->Cell(60,7,$n2,1,0,'C');
		$pdf->Ln();//ahora salta 15 lineas 
		$pdf->SetTextColor('255','0','0');//para imprimir en rojo 
		$pdf->Write (7,$n);
		$pdf->Ln(); //salto de linea
		$pdf->Write (7,$cant);
		$pdf->Ln(); //salto de linea
		$pdf->Write (7,$n_mesa);
		$pdf->Ln(); //salto de linea
        $pdf->Output("comanda.pdf",'F');
		echo "<script language='javascript'>window.open('comanda.pdf','_self','');</script>";//para ver el archivo pdf generado
		exit;
	?>