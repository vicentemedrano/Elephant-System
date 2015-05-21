<?php

include ("/fpdf/fpdf.php");
include("conexion.php");
$con=conectar();


class  MiPDF extends FPDF {
		
		public function Header(){
			
			//$this -> Image( "../images/Ele.png" , 5 , 5 , 10 , 10);
			$this -> SetFont ( 'ARIAL' , 'B' , 20 );
			$this -> Cell( 100, 10 , "PLATILLOS" , 0 , 0 , 'C' );
			$this -> Ln( 30 );
			
			
		}
	
}

$cabeceraT = array(
"ID " , "Platillo" ,"Precio ", "Tipo" , "Descripci&oacute;n"
);


$mipdf = new MiPDF();

$mipdf -> addPage();

for ($i = 0; $i < count( $cabeceraT ) ; $i++)
{
	$mipdf -> SetFont( 'Courier' , 'B' , 9 );
	$mipdf -> SetTextColor( 255 , 255 , 255);
	$mipdf -> Cell ( 35 , 15, $cabeceraT[ $i ] , 1 , 0 , 'C' , true );
	
	
}

$mipdf -> Ln( 10);

$consulta = mysql_query( "SELECT * FROM platillo " );

while ( $datos = mysql_fetch_array( $consulta ) )
{
	$ID = $datos [ 'id_platillo' ];
	$platillo = $datos [ 'nombre_plat' ];
	$precio = $datos [ 'precio_plat' ];
	$tipo = $datos [ 'tipo' ];
	$descripcion = $datos [ 'descripcion_p' ];

	$mipdf -> SetFillColor( 100 , 100 , 200 );	
	$mipdf -> Cell(  35 , 15 , $ID , 1, 0, 'C' , true );
	$mipdf -> Cell(  35 , 15 , $platillo , 1, 0, 'C' , true );
	$mipdf -> Cell(  35 , 15 , $precio, 1, 0, 'C' , true );
	$mipdf -> Cell(  35 , 15 , $tipo, 1, 0, 'C' , true );
	$mipdf -> Cell(  35 , 15 , $descripcion , 1, 0, 'C' , true );
	$mipdf -> Ln( 10);
	
}
 

$mipdf -> Output();


?>


