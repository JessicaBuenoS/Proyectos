<?php
require('pdf/fpdf.php');
require 'conexion.php';
$fecha=date("Y-m-d H:i:s");

$x=40;
$y=10;
$pdf = new FPDF();
$pdf->AddPage();//agregar nueva pagina
$pdf->SetFont('Arial','B',12);//tipo de letra/ estilo/ tamaño
$reporte=utf8_decode('Reporte: Eventos activos');
$pdf->Cell(40,10,$reporte);
$pdf->Ln();
$pdf->SetFont('Arial','B',10);
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM eventos where fecha_inicio>'$fecha'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 $pdf->Cell(20,10,'Id evento');
 $pdf->Cell(30,10,'Lugar');
 $pdf->Cell(40,10,'Fecha inicio');
 $pdf->Cell(40,10,'Fecha fin');
 $pdf->Cell(15,10,'cupo');
 $pdf->Cell(15,10,'costo');
 $pdf->Cell(25,10,'coordinador');
 $pdf->Cell(10,10,'carrera');
 $pdf->Ln();//saltar linea
 $pdf->SetFont('Arial','',10);
 while($row = $result->fetch_assoc()) {
 	$id_evento=$row["id_evento"];
 	$lugar=utf8_decode($row["lugar"]);
 	$fecha_inicio=$row["fecha_inicio"];
 	$fecha_fin=$row["fecha_fin"];
 	$cupo=$row["cupo"];
 	$costo=$row["costo"];
 	$coordinador=$row["id_coordinador"];
 	$carrera=$row["id_carrera"];

	$pdf->Cell(20,10,$id_evento);
	$pdf->Cell(30,10,$lugar);
	$pdf->Cell(40,10,$fecha_inicio);
	$pdf->Cell(40,10,$fecha_fin);
	$pdf->Cell(15,10,$cupo);
	$pdf->Cell(15,10,$costo);
	$pdf->Cell(25,10,$coordinador);
	$pdf->Cell(10,10,$carrera);
	$pdf->Ln();//saltar linea
	

 }
} else {
 $pdf->Cell(40,10,'0 resultados');
}
$conn->close();



$pdf->Output();

?>