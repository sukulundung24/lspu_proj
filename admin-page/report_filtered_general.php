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
    $this->Ln(20);
    $this->Cell(80);

    // Title
    $this->Cell(40,10,'',0,50,'C');
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

$queryAns1_5 = "Select count(*) from tbl_user INNER JOIN tbl_general ON tbl_user.id_num = tbl_general.id_num where tbl_general.ans1='5' and tbl_general.description='".$query_params['description']."'";

$resp = @mysqli_query($dbc, $queryAns1_5);
$row=mysqli_fetch_array($resp);


    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(0,10,"      REGISTRARS' OFFICE",1,0,'L',0);
    $pdf->Ln(10);
    $pdf->Cell(50,10," ",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(100,10,"Quality of Service Provided",1,0,'C',0);
    $pdf->Cell(20,10," ",1,0,'C',0);
    $pdf->Cell(20,10," ",1,0,'C',0);
    $pdf->Ln(10);
    $pdf->Cell(50,10," ",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,"5",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,"4",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,"3",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,"2",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);  
    $pdf->Cell(20,10,"1",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CAS",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$row[0],1,0,'C',0);
    $pdf->Cell(20,10,"7",1,0,'C',0);
    $pdf->Cell(20,10,"2",1,0,'C',0);
    $pdf->Cell(20,10,"1",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"13",1,0,'C',0);
    $pdf->Cell(20,10,"3.92",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CTE",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"20",1,0,'C',0);
    $pdf->Cell(20,10,"9",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"29",1,0,'C',0);
    $pdf->Cell(20,10,"3.69",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CFND",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"2",1,0,'C',0);
    $pdf->Cell(20,10,"8",1,0,'C',0);
    $pdf->Cell(20,10,"10",1,0,'C',0);
    $pdf->Cell(20,10,"1",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"21",1,0,'C',0);
    $pdf->Cell(20,10,"3.52",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CHMT",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"25",1,0,'C',0);
    $pdf->Cell(20,10,"29",1,0,'C',0);
    $pdf->Cell(20,10,"13",1,0,'C',0);
    $pdf->Cell(20,10,"6",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"73",1,0,'C',0);
    $pdf->Cell(20,10,"4.00",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CBMA",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"20",1,0,'C',0);
    $pdf->Cell(20,10,"65",1,0,'C',0);
    $pdf->Cell(20,10,"38",1,0,'C',0);
    $pdf->Cell(20,10,"9",1,0,'C',0);
    $pdf->Cell(20,10,"4",1,0,'C',0);
    $pdf->Cell(20,10,"136",1,0,'C',0);
    $pdf->Cell(20,10,"3.65",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  COF",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"39",1,0,'C',0);
    $pdf->Cell(20,10,"36",1,0,'C',0);
    $pdf->Cell(20,10,"14",1,0,'C',0);
    $pdf->Cell(20,10,"1",1,0,'C',0);
    $pdf->Cell(20,10,"0",1,0,'C',0);
    $pdf->Cell(20,10,"90",1,0,'C',0);
    $pdf->Cell(20,10,"4.26",1,0,'C',0);


    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  Total",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"89",1,0,'C',0);
    $pdf->Cell(20,10,"165",1,0,'C',0);
    $pdf->Cell(20,10,"86",1,0,'C',0);
    $pdf->Cell(20,10,"18",1,0,'C',0);
    $pdf->Cell(20,10,"4",1,0,'C',0);
    $pdf->Cell(20,10,"362",1,0,'C',0);
    $pdf->Cell(20,10,"3.88",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  Percentage",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"24.59",1,0,'C',0);
    $pdf->Cell(20,10,"45.58",1,0,'C',0);
    $pdf->Cell(20,10,"23.76",1,0,'C',0);
    $pdf->Cell(20,10,"4.97",1,0,'C',0);
    $pdf->Cell(20,10,"1.10",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);




    $pdf->Ln(10);
    $pdf->Ln(10);
    $pdf->Cell(50,10," ",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(100,10,"Personnel Attitue",1,0,'C',0);
    $pdf->Cell(20,10," ",1,0,'C',0);
    $pdf->Cell(20,10," ",1,0,'C',0);
    $pdf->Ln(10);
    $pdf->Cell(50,10," ",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,"5",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,"4",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,"3",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(20,10,"2",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);  
    $pdf->Cell(20,10,"1",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CAS",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"3",1,0,'C',0);
    $pdf->Cell(20,10,"7",1,0,'C',0);
    $pdf->Cell(20,10,"2",1,0,'C',0);
    $pdf->Cell(20,10,"1",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"13",1,0,'C',0);
    $pdf->Cell(20,10,"3.92",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CTE",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"20",1,0,'C',0);
    $pdf->Cell(20,10,"9",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"29",1,0,'C',0);
    $pdf->Cell(20,10,"3.69",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CFND",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"2",1,0,'C',0);
    $pdf->Cell(20,10,"8",1,0,'C',0);
    $pdf->Cell(20,10,"10",1,0,'C',0);
    $pdf->Cell(20,10,"1",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"21",1,0,'C',0);
    $pdf->Cell(20,10,"3.52",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CHMT",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"25",1,0,'C',0);
    $pdf->Cell(20,10,"29",1,0,'C',0);
    $pdf->Cell(20,10,"13",1,0,'C',0);
    $pdf->Cell(20,10,"6",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"73",1,0,'C',0);
    $pdf->Cell(20,10,"4.00",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CBMA",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"20",1,0,'C',0);
    $pdf->Cell(20,10,"65",1,0,'C',0);
    $pdf->Cell(20,10,"38",1,0,'C',0);
    $pdf->Cell(20,10,"9",1,0,'C',0);
    $pdf->Cell(20,10,"4",1,0,'C',0);
    $pdf->Cell(20,10,"136",1,0,'C',0);
    $pdf->Cell(20,10,"3.65",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  COF",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"39",1,0,'C',0);
    $pdf->Cell(20,10,"36",1,0,'C',0);
    $pdf->Cell(20,10,"14",1,0,'C',0);
    $pdf->Cell(20,10,"1",1,0,'C',0);
    $pdf->Cell(20,10,"0",1,0,'C',0);
    $pdf->Cell(20,10,"90",1,0,'C',0);
    $pdf->Cell(20,10,"4.26",1,0,'C',0);


    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  Total",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"89",1,0,'C',0);
    $pdf->Cell(20,10,"165",1,0,'C',0);
    $pdf->Cell(20,10,"86",1,0,'C',0);
    $pdf->Cell(20,10,"18",1,0,'C',0);
    $pdf->Cell(20,10,"4",1,0,'C',0);
    $pdf->Cell(20,10,"362",1,0,'C',0);
    $pdf->Cell(20,10,"3.88",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  Percentage",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,"24.59",1,0,'C',0);
    $pdf->Cell(20,10,"45.58",1,0,'C',0);
    $pdf->Cell(20,10,"23.76",1,0,'C',0);
    $pdf->Cell(20,10,"4.97",1,0,'C',0);
    $pdf->Cell(20,10,"1.10",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);

// if($resp){
//     while($row=mysqli_fetch_array($resp)){
//         $pdf->Cell(25,10,$row['id_num'],1,0,'L',0);
//         $pdf->Cell(45,10,$row['fname'].' '.substr($row['mname'],0,1).'. '.$row['lname'],1,0,'L',0);

//         $pdf->Cell(10,10,$row['age'],1,0,'C',0);
//         $pdf->Cell(20,10,$row['sex'],1,0,'C',0);
//         $pdf->Cell(20,10,$row['course'],1,0,'C',0);
//         $pdf->Cell(25,10,$row['year_level'].' yr.',1,0,'C',0);
//         $pdf->Cell(45,10,$row['college'],1,0,'L',0);
//         $pdf->Ln(10);
//     }
// }

// for($i=1;$i<=40;$i++)
//     $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Output();
?>