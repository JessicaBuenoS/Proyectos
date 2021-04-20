<?php
require('pdf/fpdf.php');
require 'conexion.php';

$id_organizador = $_POST['id_organizador'];
$x=40;
$y=10;
$pdf = new FPDF();
$pdf->AddPage();//agregar nueva pagina
$pdf->SetFont('Arial','B',12);//tipo de letra/ estilo/ tamaño
$reporte=utf8_decode('Reporte: Eventos por organizador');
$organizador="Id organizador: ".$id_organizador;
$pdf->Cell(40,10,$reporte);
$pdf->Ln();
$pdf->Cell(40,10,$organizador);
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM eventos where id_coordinador='$id_organizador'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $pdf->Cell(20,10,'Id evento');
 $pdf->Cell(30,10,'Lugar');
 $pdf->Cell(40,10,'Fecha inicio');
 $pdf->Cell(40,10,'Fecha fin');
 
 $pdf->Ln();//saltar linea
 $pdf->SetFont('Arial','',10);
 while($row = $result->fetch_assoc()) {
 	$id_evento=$row["id_evento"];
 	$lugar=utf8_decode($row["lugar"]);
 	$fecha_inicio=$row["fecha_inicio"];
 	$fecha_fin=$row["fecha_fin"];
 	$pdf->Cell(20,10,$id_evento);
	$pdf->Cell(30,10,$lugar);
	$pdf->Cell(40,10,$fecha_inicio);
	$pdf->Cell(40,10,$fecha_fin);

	
	$pdf->Ln();//saltar linea
	

 }
} else {
 $pdf->Cell(40,10,'0 resultados');
}
$conn->close();



$pdf->Output();

?>