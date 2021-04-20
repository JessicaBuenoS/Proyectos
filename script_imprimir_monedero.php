<?php
session_start();
if($_SESSION['sesion_participante']=="creada"){
require('pdf/fpdf.php');
require 'conexion.php';

$id_usuario=$_SESSION['participante'];

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM usuarioss where id_usuario='$id_usuario'";

$pdf = new FPDF();
$pdf->AddPage();//agregar nueva pagina
$pdf->SetFont('Arial','B',12);//tipo de letra/ estilo/ tamaño
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 
 while($row = $result->fetch_assoc()) {
 	$nombre=utf8_decode($row["nombre"]);
 	$apellido1=utf8_decode($row["apellido_mat"]);
 	$apellido2=utf8_decode($row["apellido_pat"]);
 	$id_monedero=$row["id_monedero"];
 	$pdf->SetFont('Arial','B',14);
 	$pdf->Cell(20,10,'Monedero');
 	$pdf->SetFont('Arial','B',8);
 	
 	$pdf->Ln();
 	$pdf->MultiCell(80, 10, 'Id usuario: '.$id_usuario, LTR, L, false);
 	$pdf->MultiCell(80, 10, 'Id monedero: '.$id_monedero, LR, L, false);
 	$pdf->MultiCell(80, 10, 'Nombre: '.$nombre.' '.$apellido1.' '.$apellido2, LRB, L, false);

 	$pdf->SetFont('Arial','B',10);
 	
	
	
	
	

 }
}

$conn->close();



$pdf->Output();
}
?>