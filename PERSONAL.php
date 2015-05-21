<?php

include ("/fpdf/fpdf.php");
include("conexion.php");
$con=conectar();


class  MiPDF extends FPDF {
		
		public function Header(){
			
			//$this -> Image( "../images/Ele.png" , 5 , 5 , 10 , 10);
			$this -> SetFont ( 'ARIAL' , 'B' , 0 );
			$this -> Cell( 100, 20 , "PERSONAL" , 0 , 0 , 'C' );
			$this -> Ln( 30 );
			
			
		}
	
}

$cabeceraT = array(
"ID " , "Nombre" ,"Direccion ", "Telefono" , "Puesto", "Turno"
);


$mipdf = new MiPDF();

$mipdf -> addPage();

for ($i = 0; $i < count( $cabeceraT ) ; $i++)
{
	$mipdf -> SetFont( 'Courier' , 'B' , 9 );
	$mipdf -> SetTextColor( 69, 73, 63);
	$mipdf -> Cell ( 35 , 15, $cabeceraT[ $i ] , 1 , 0 , 'C' , true );
	
	
}

$mipdf -> Ln( 10);

$consulta = mysql_query( "SELECT * FROM personal " );

while ( $datos = mysql_fetch_array( $consulta ) )
{
	$ID = $datos [ 'id_personal' ];
	$nombre = $datos [ 'nombre_per' ];
	$direc = $datos [ 'direccion_per' ];
	$tel = $datos [ 'telefono_per' ];
	$puesto = $datos [ 'puesto' ];
	$turno = $datos [ 'turno' ];

	$mipdf -> SetFillColor( 246, 205, 100 );	
	$mipdf -> Cell(  35 , 15 , $ID , 1, 0, 'C' , true );
	$mipdf -> Cell(  35 , 15 , $nombre , 1, 0, 'C' , true );
	$mipdf -> Cell(  35 , 15 , $direc, 1, 0, 'C' , true );
	$mipdf -> Cell(  35 , 15 , $tel , 1, 0, 'C' , true );
	$mipdf -> Cell(  35 , 15 , $puesto, 1, 0, 'C' , true );
	$mipdf -> Cell(  35 , 15 , $turno , 1, 0, 'C' , true );
	$mipdf -> Ln( 10);
	
}
 

$mipdf -> Output();


?>
