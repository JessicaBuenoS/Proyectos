<?php
require('pdf/fpdf.php');
require 'conexion.php';

$id_evento = $_POST['id_evento'];
$x=40;
$y=10;
$pdf = new FPDF();
$pdf->AddPage();//agregar nueva pagina
$pdf->SetFont('Arial','B',12);//tipo de letra/ estilo/ tamaño
$reporte=utf8_decode('Reporte: Inscritos por evento');
$evento="Id evento: ".$id_evento;
$pdf->Cell(40,10,$reporte);
$pdf->Ln();
$pdf->Cell(40,10,$evento);
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM participantes where id_evento='$id_evento'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $pdf->Cell(20,10,'Id usuario');
 
 $pdf->Ln();//saltar linea
 $pdf->SetFont('Arial','',10);
 while($row = $result->fetch_assoc()) {
 	$id_usuario=$row["id_usuario"];
 	

	$pdf->Cell(20,10,$id_usuario);
	$pdf->Ln();//saltar linea
	

 }
} else {
 $pdf->Cell(40,10,'0 resultados');
}
$conn->close();



$pdf->Output();

?>