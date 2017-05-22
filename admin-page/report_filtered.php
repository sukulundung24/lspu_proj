<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Page header
function Header()
{
    // Logo
    $this->Image('../img/cover 3.png',23,6,170);
    // Arial bold 15
    $this->SetFont('Arial','B',15);
    // Move to the right
    $this->Ln(30);
    $this->Cell(80);

    // Title
    $this->Cell(40,10,'Student List',0,50,'C');
    // Line break
    $this->Ln(10);
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

// include databases
include('get-name.php');

$link = 'http://'.$_SERVER['HTTP_HOST'].''.$_SERVER['REQUEST_URI'];

$query_str = parse_url($link, PHP_URL_QUERY);
parse_str($query_str, $query_params);

$query = "Select * from tbl_user LEFT JOIN student_survey_status ON tbl_user.id_num = student_survey_status.id_num where tbl_user.type <> 'admin' and tbl_user.".$query_params['column']." = '".$query_params['data']."' and student_survey_status.status='finish' ";
// print_r("<script>alert($query_params['data'])</script>");
$resp = @mysqli_query($dbc, $query);

    $pdf->Cell(25,10,'ID Number',1,0,'C',0);
    $pdf->Cell(45,10,'Name',1,0,'C',0);
    $pdf->Cell(10,10,'Age',1,0,'C',0);
    $pdf->Cell(20,10,'Gender',1,0,'C',0);
    $pdf->Cell(20,10,'Course',1,0,'C',0);
    $pdf->Cell(25,10,'Year Level',1,0,'C',0);
    $pdf->Cell(45,10,'College/Department',1,0,'C',0);
    $pdf->Ln(10);
if($resp){
    while($row=mysqli_fetch_array($resp)){
        $pdf->Cell(25,10,$row['id_num'],1,0,'L',0);
        $pdf->Cell(45,10,$row['fname'].' '.substr($row['mname'],0,1).'. '.$row['lname'],1,0,'L',0);

        $pdf->Cell(10,10,$row['age'],1,0,'C',0);
        $pdf->Cell(20,10,$row['sex'],1,0,'C',0);
        $pdf->Cell(20,10,$row['course'],1,0,'C',0);
        $pdf->Cell(25,10,$row['year_level'].' yr.',1,0,'C',0);
        $pdf->Cell(45,10,$row['college'],1,0,'L',0);
        $pdf->Ln(10);
    }
}

// for($i=1;$i<=40;$i++)
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>