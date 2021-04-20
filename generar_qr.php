<?php
if(isset($_POST['id_evento'])){


$id_evento=$_POST['id_evento'];
$id_usuario=$_POST['id_usuario'];

$x= "20";
$y= "120";
$width= "50"; 
$height= "50";

$x2= "60";
$y2= "200";
$width2= "100"; 
$height2= "100";

require('pdf/fpdf.php');
//Agregamos la libreria para genera códigos QR
require "phpqrcode/qrlib.php"; 
require 'conexion.php';
	$dir = 'temp/';
	if (!file_exists($dir))
        mkdir($dir);
	//$nombre2=$matricula;
	$filename = $dir.$id_usuario.$id_evento.'.png';
	$tamaño = 10; //Tamaño de Pixel
	$level = 'L'; //Precisión Baja
	$framSize = 3; //Tamaño en blanco
	$contenido = $id_usuario." ".$id_evento ; //Texto
	
        //Enviamos los parametros a la Función para generar código QR 
	QRcode::png($contenido, $filename, $level, $tamaño, $framSize); 

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM eventos where id_evento='$id_evento'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
 	$nombre_evento=utf8_decode($row["nombre_evento"]);
 }

}

$sql = "SELECT * FROM usuarioss where id_usuario='$id_usuario'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
 	$nombre=utf8_decode($row["nombre"]);
 	$apellido1=utf8_decode($row["apellido_mat"]);
 	$apellido2=utf8_decode($row["apellido_pat"]);
 }

}
	
	
$pdf = new FPDF();//indicar que es un archivo pdf
$pdf->AddPage();//genere pagina
$pdf->SetFont('Arial','B',20);//tipo,estilo y tamaño,
$pdf->Cell(40,10,'¡Gracias por registrarte en este evento!');//cuadro o parrafo(cell-celda)coordenada en x y coordenada en y y el texto
$pdf->Ln(20);//saltar una linea
$pdf->SetFont('Times','',16);//cambia tipo de letra
$pdf->Ln(10);//saltar una linea
$pdf->Cell(3,13,'Evento:  '.$nombre_evento);
$pdf->Ln(10);//saltar una linea
$pdf->Cell(3,13,'Participante:  '.$nombre.' '.$apellido1.' '.$apellido2);
$pdf->Ln(20);//saltar una linea
$pdf->SetFont('Helvetica','',12);//cambia tipo de letra
$pdf->Cell(3,19,'El dia del evento es indispensable que presentes esta hoja');
$pdf->Ln(10);//saltar una linea
$pdf->Cell(3,15,'para poder registrar tu entrada y salida.');

$pdf->Image('temp/'.$id_usuario.$id_evento.'.png', $x, $y, $width, $height);
$pdf->Ln(10);//saltar una linea
//$pdf->Image('Ruta_de_mi_imagen.jpg', $x, $y, $width, $height);
$pdf->Image('imagenes/logo2.png', $x2, $y2, $width2, $height2);
$pdf->Output();//muestre ene l navegador
$conn->close();
}

?>
