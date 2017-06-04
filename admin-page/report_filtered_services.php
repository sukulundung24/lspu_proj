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

//======================= CAS 5 - 1  ==================================
$queryCASAns1_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns1_5 = @mysqli_query($dbc, $queryCASAns1_5);
$rowCASAns1_5=mysqli_fetch_array($respCASAns1_5);

$queryCASAns1_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns1_4 = @mysqli_query($dbc, $queryCASAns1_4);
$rowCASAns1_4=mysqli_fetch_array($respCASAns1_4);

$queryCASAns1_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns1_3 = @mysqli_query($dbc, $queryCASAns1_3);
$rowCASAns1_3=mysqli_fetch_array($respCASAns1_3);

$queryCASAns1_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns1_2 = @mysqli_query($dbc, $queryCASAns1_2);
$rowCASAns1_2=mysqli_fetch_array($respCASAns1_2);

$queryCASAns1_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns1_1 = @mysqli_query($dbc, $queryCASAns1_1);
$rowCASAns1_1=mysqli_fetch_array($respCASAns1_1);

$query_tbl_question = "Select * from tbl_question where id = '".$query_params['id']."'";
$resp_question = @mysqli_query($dbc,$query_tbl_question);
$row_question = mysqli_fetch_array($resp_question);

    $pdf->SetFont('Arial','B',15);
    $pdf->Cell(0,10,"      ".$row_question['question'],1,0,'L',0);
    $pdf->Ln(10);
    $pdf->Cell(50,10," ",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(100,10,"Promptness of Services",1,0,'C',0);
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
    $pdf->Cell(20,10,$rowCASAns1_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCASAns1_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCASAns1_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCASAns1_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCASAns1_1[0],1,0,'C',0);

    $CAStotal = $rowCASAns1_5[0] + $rowCASAns1_4[0] + $rowCASAns1_3[0] + $rowCASAns1_2[0] + $rowCASAns1_1[0];

    $pdf->Cell(20,10,$CAStotal,1,0,'C',0);
    $CASMean = 0;
    if($CAStotal>0){
        $CASMean = (($rowCASAns1_5[0] * 5) + ($rowCASAns1_4[0]*4) + ($rowCASAns1_3[0]*3) + ($rowCASAns1_2[0] * 2) + ($rowCASAns1_1[0] * 1)) / $CAStotal;
    }
    $pdf->Cell(20,10,sprintf('%0.2f',$CASMean),1,0,'C',0);

//======================== CTE 5 - 1 =============================

$queryCTEAns1_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns1_5 = @mysqli_query($dbc, $queryCTEAns1_5);
$rowCTEAns1_5=mysqli_fetch_array($respCTEAns1_5);

$queryCTEAns1_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns1_4 = @mysqli_query($dbc, $queryCTEAns1_4);
$rowCTEAns1_4=mysqli_fetch_array($respCTEAns1_4);

$queryCTEAns1_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns1_3 = @mysqli_query($dbc, $queryCTEAns1_3);
$rowCTEAns1_3=mysqli_fetch_array($respCTEAns1_3);

$queryCTEAns1_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns1_2 = @mysqli_query($dbc, $queryCTEAns1_2);
$rowCTEAns1_2=mysqli_fetch_array($respCTEAns1_2);

$queryCTEAns1_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns1_1 = @mysqli_query($dbc, $queryCTEAns1_1);
$rowCTEAns1_1=mysqli_fetch_array($respCTEAns1_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CTE",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCTEAns1_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCTEAns1_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCTEAns1_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCTEAns1_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCTEAns1_1[0],1,0,'C',0);

    $CTEtotal = $rowCTEAns1_5[0] + $rowCTEAns1_4[0] + $rowCTEAns1_3[0] + $rowCTEAns1_2[0] + $rowCTEAns1_1[0];

    $pdf->Cell(20,10,$CTEtotal,1,0,'C',0);
    $CTEMean = 0;
    if($CTEtotal>0){
        $CTEMean = (($rowCTEAns1_5[0] * 5) + ($rowCTEAns1_4[0]*4) + ($rowCTEAns1_3[0]*3) + ($rowCTEAns1_2[0] * 2) + ($rowCTEAns1_1[0] * 1)) / $CTEtotal;
    }

    $pdf->Cell(20,10,sprintf('%0.2f',$CTEMean),1,0,'C',0);

//======================== CFND 5 - 1 =============================

$queryCFNDAns1_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns1_5 = @mysqli_query($dbc, $queryCFNDAns1_5);
$rowCFNDAns1_5=mysqli_fetch_array($respCFNDAns1_5);

$queryCFNDAns1_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns1_4 = @mysqli_query($dbc, $queryCFNDAns1_4);
$rowCFNDAns1_4=mysqli_fetch_array($respCFNDAns1_4);

$queryCFNDAns1_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns1_3 = @mysqli_query($dbc, $queryCFNDAns1_3);
$rowCFNDAns1_3=mysqli_fetch_array($respCFNDAns1_3);

$queryCFNDAns1_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns1_2 = @mysqli_query($dbc, $queryCFNDAns1_2);
$rowCFNDAns1_2=mysqli_fetch_array($respCFNDAns1_2);

$queryCFNDAns1_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns1_1 = @mysqli_query($dbc, $queryCFNDAns1_1);
$rowCFNDAns1_1=mysqli_fetch_array($respCFNDAns1_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CFND",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCFNDAns1_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCFNDAns1_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCFNDAns1_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCFNDAns1_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCFNDAns1_1[0],1,0,'C',0);

    $CFNDtotal = $rowCFNDAns1_5[0] + $rowCFNDAns1_4[0] + $rowCFNDAns1_3[0] + $rowCFNDAns1_2[0] + $rowCFNDAns1_1[0];

    $pdf->Cell(20,10,$CFNDtotal,1,0,'C',0);

    $CFNDMean = 0;
    if($CFNDtotal>0){
        $CFNDMean = (($rowCFNDAns1_5[0] * 5) + ($rowCFNDAns1_4[0]*4) + ($rowCFNDAns1_3[0]*3) + ($rowCFNDAns1_2[0] * 2) + ($rowCFNDAns1_1[0] * 1)) / $CFNDtotal;
    }
    
    $pdf->Cell(20,10,sprintf('%0.2f',$CFNDMean),1,0,'C',0);

//======================== CHMT 5 - 1 =============================

$queryCHMTAns1_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns1_5 = @mysqli_query($dbc, $queryCHMTAns1_5);
$rowCHMTAns1_5=mysqli_fetch_array($respCHMTAns1_5);

$queryCHMTAns1_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns1_4 = @mysqli_query($dbc, $queryCHMTAns1_4);
$rowCHMTAns1_4=mysqli_fetch_array($respCHMTAns1_4);

$queryCHMTAns1_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns1_3 = @mysqli_query($dbc, $queryCHMTAns1_3);
$rowCHMTAns1_3=mysqli_fetch_array($respCHMTAns1_3);

$queryCHMTAns1_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns1_2 = @mysqli_query($dbc, $queryCHMTAns1_2);
$rowCHMTAns1_2=mysqli_fetch_array($respCHMTAns1_2);

$queryCHMTAns1_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns1_1 = @mysqli_query($dbc, $queryCHMTAns1_1);
$rowCHMTAns1_1=mysqli_fetch_array($respCHMTAns1_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CHMT",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCHMTAns1_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCHMTAns1_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCHMTAns1_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCHMTAns1_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCHMTAns1_1[0],1,0,'C',0);

    $CHMTtotal = $rowCHMTAns1_5[0] + $rowCHMTAns1_4[0] + $rowCHMTAns1_3[0] + $rowCHMTAns1_2[0] + $rowCHMTAns1_1[0];

    $pdf->Cell(20,10,$CHMTtotal,1,0,'C',0);
    $CHMTMean = 0;
    if($CHMTtotal>0){
        $CHMTMean = (($rowCHMTAns1_5[0] * 5) + ($rowCHMTAns1_4[0]*4) + ($rowCHMTAns1_3[0]*3) + ($rowCHMTAns1_2[0] * 2) + ($rowCHMTAns1_1[0] * 1)) / $CHMTtotal;
    }
    
    $pdf->Cell(20,10,sprintf('%0.2f',$CHMTMean),1,0,'C',0);

//======================== CBMA 5 - 1 =============================

$queryCBMAAns1_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns1_5 = @mysqli_query($dbc, $queryCBMAAns1_5);
$rowCBMAAns1_5=mysqli_fetch_array($respCBMAAns1_5);

$queryCBMAAns1_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns1_4 = @mysqli_query($dbc, $queryCBMAAns1_4);
$rowCBMAAns1_4=mysqli_fetch_array($respCBMAAns1_4);

$queryCBMAAns1_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns1_3 = @mysqli_query($dbc, $queryCBMAAns1_3);
$rowCBMAAns1_3=mysqli_fetch_array($respCBMAAns1_3);

$queryCBMAAns1_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns1_2 = @mysqli_query($dbc, $queryCBMAAns1_2);
$rowCBMAAns1_2=mysqli_fetch_array($respCBMAAns1_2);

$queryCBMAAns1_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns1_1 = @mysqli_query($dbc, $queryCBMAAns1_1);
$rowCBMAAns1_1=mysqli_fetch_array($respCBMAAns1_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CBMA",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCBMAAns1_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCBMAAns1_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCBMAAns1_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCBMAAns1_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCBMAAns1_1[0],1,0,'C',0);

    $CBMAtotal = $rowCBMAAns1_5[0] + $rowCBMAAns1_4[0] + $rowCBMAAns1_3[0] + $rowCBMAAns1_2[0] + $rowCBMAAns1_1[0];

    $pdf->Cell(20,10,$CBMAtotal,1,0,'C',0);

    $CBMAMean = 0;
    if($CBMAtotal>0){
        $CBMAMean = (($rowCBMAAns1_5[0] * 5) + ($rowCBMAAns1_4[0]*4) + ($rowCBMAAns1_3[0]*3) + ($rowCBMAAns1_2[0] * 2) + ($rowCBMAAns1_1[0] * 1)) / $CBMAtotal;
    }

    $pdf->Cell(20,10,sprintf('%0.2f',$CBMAMean),1,0,'C',0);

//======================== COF 5 - 1 =============================

$queryCOFAns1_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns1_5 = @mysqli_query($dbc, $queryCOFAns1_5);
$rowCOFAns1_5=mysqli_fetch_array($respCOFAns1_5);

$queryCOFAns1_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns1_4 = @mysqli_query($dbc, $queryCOFAns1_4);
$rowCOFAns1_4=mysqli_fetch_array($respCOFAns1_4);

$queryCOFAns1_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns1_3 = @mysqli_query($dbc, $queryCOFAns1_3);
$rowCOFAns1_3=mysqli_fetch_array($respCOFAns1_3);

$queryCOFAns1_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns1_2 = @mysqli_query($dbc, $queryCOFAns1_2);
$rowCOFAns1_2=mysqli_fetch_array($respCOFAns1_2);

$queryCOFAns1_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns1_1 = @mysqli_query($dbc, $queryCOFAns1_1);
$rowCOFAns1_1=mysqli_fetch_array($respCOFAns1_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  COF",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCOFAns1_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCOFAns1_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCOFAns1_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCOFAns1_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCOFAns1_1[0],1,0,'C',0);

    $COFtotal = $rowCOFAns1_5[0] + $rowCOFAns1_4[0] + $rowCOFAns1_3[0] + $rowCOFAns1_2[0] + $rowCOFAns1_1[0];

    $pdf->Cell(20,10,$COFtotal,1,0,'C',0);

    $COFMean = 0;
    if($COFtotal>0){
        $COFMean = (($rowCOFAns1_5[0] * 5) + ($rowCOFAns1_4[0]*4) + ($rowCOFAns1_3[0]*3) + ($rowCOFAns1_2[0] * 2) + ($rowCOFAns1_1[0] * 1)) / $COFtotal;
    }

    $pdf->Cell(20,10,sprintf('%0.2f',$COFMean),1,0,'C',0);


    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  Total",1,0,'L',0);
    $pdf->SetFont('Arial','',10);

    $total5 = $rowCOFAns1_5[0] + $rowCASAns1_5[0] + $rowCTEAns1_5[0] + $rowCFNDAns1_5[0] + $rowCHMTAns1_5[0] + $rowCBMAAns1_5[0];

    $pdf->Cell(20,10,$total5,1,0,'C',0);

    $total4 = $rowCOFAns1_4[0] + $rowCASAns1_4[0] + $rowCTEAns1_4[0] + $rowCFNDAns1_4[0] + $rowCHMTAns1_4[0] + $rowCBMAAns1_4[0];

    $pdf->Cell(20,10,$total4,1,0,'C',0);

    $total3 = $rowCOFAns1_3[0] + $rowCASAns1_3[0] + $rowCTEAns1_3[0] + $rowCFNDAns1_3[0] + $rowCHMTAns1_3[0] + $rowCBMAAns1_3[0];

    $pdf->Cell(20,10,$total3,1,0,'C',0);

    $total2 = $rowCOFAns1_2[0] + $rowCASAns1_2[0] + $rowCTEAns1_2[0] + $rowCFNDAns1_2[0] + $rowCHMTAns1_2[0] + $rowCBMAAns1_2[0];

    $pdf->Cell(20,10,$total2,1,0,'C',0);

    $total1 = $rowCOFAns1_1[0] + $rowCASAns1_1[0] + $rowCTEAns1_1[0] + $rowCFNDAns1_1[0] + $rowCHMTAns1_1[0] + $rowCBMAAns1_1[0];

    $pdf->Cell(20,10,$total1,1,0,'C',0);
    $finalTotal = $total5 + $total4 + $total3 + $total2 + $total1;
    $pdf->Cell(20,10,$finalTotal,1,0,'C',0);

    $finalMean = 0;
    if($finalTotal>0){
        $finalMean = (($total5*5)+($total4*4)+($total3*3)+($total2*2)+($total1*1))/$finalTotal;
    }
        $pdf->Cell(20,10,sprintf('%0.2f',$finalMean),1,0,'C',0);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  Percentage",1,0,'L',0);
    $pdf->SetFont('Arial','',10);

    $percentage5 = 0;
    if($finalTotal>0){
        $percentage5 = ($total5/$finalTotal) * 100;
    }
    
    $pdf->Cell(20,10,$percentage5,1,0,'C',0);
    
    $percentage4 = 0;
    if($finalTotal>0){
        $percentage4 = ($total4/$finalTotal) * 100;
    }
    $pdf->Cell(20,10,$percentage4,1,0,'C',0);

    $percentage3 = 0;
    if($finalTotal>0){
        $percentage3 = ($total3/$finalTotal) * 100;
    }
    $pdf->Cell(20,10,$percentage3,1,0,'C',0);

    $percentage2 = 0;
    if($finalTotal>0){
        $percentage2 = ($total2/$finalTotal) * 100;
    }
    $pdf->Cell(20,10,$percentage2,1,0,'C',0);

    $percentage1 = 0;
    if($finalTotal>0){
        $percentage1 = ($total1/$finalTotal) * 100;
    }
    $pdf->Cell(20,10,$percentage1,1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);

    $pdf->Ln(10);
    $pdf->Ln(10);
    $pdf->Cell(50,10," ",1,0,'C',0);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(100,10,"Courtesy of the Provider",1,0,'C',0);
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

//======================= CAS 5 - 1  ==================================
$queryCASAns2_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer_2='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns2_5 = @mysqli_query($dbc, $queryCASAns2_5);
$rowCASAns2_5=mysqli_fetch_array($respCASAns2_5);

$queryCASAns2_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer_2='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns2_4 = @mysqli_query($dbc, $queryCASAns2_4);
$rowCASAns2_4=mysqli_fetch_array($respCASAns2_4);

$queryCASAns2_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer_2='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns2_3 = @mysqli_query($dbc, $queryCASAns2_3);
$rowCASAns2_3=mysqli_fetch_array($respCASAns2_3);

$queryCASAns2_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer_2='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns2_2 = @mysqli_query($dbc, $queryCASAns2_2);
$rowCASAns2_2=mysqli_fetch_array($respCASAns2_2);

$queryCASAns2_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CAS' and tbl_answer.answer_2='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCASAns2_1 = @mysqli_query($dbc, $queryCASAns2_1);
$rowCASAns2_1=mysqli_fetch_array($respCASAns2_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CAS",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCASAns2_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCASAns2_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCASAns2_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCASAns2_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCASAns2_1[0],1,0,'C',0);

    $CAStotal2 =  $rowCASAns2_5[0] + $rowCASAns2_4[0] + $rowCASAns2_3[0] + $rowCASAns2_2[0] + $rowCASAns2_1[0];
    $pdf->Cell(20,10,$CAStotal2,1,0,'C',0);

    $CASMean2 = 0;
    if($CAStotal2>0){
        $CASMean2 = (($rowCASAns2_5[0] *5) + ($rowCASAns2_4[0]*4) + ($rowCASAns2_3[0]*3) + ($rowCASAns2_2[0]*2) + ($rowCASAns2_1[0]*1))/$CAStotal2;
    } 
    $pdf->Cell(20,10,sprintf('%0.2f',$CASMean2),1,0,'C',0);


    //======================= CTE 5 - 1  ==================================
$queryCTEAns2_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer_2='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns2_5 = @mysqli_query($dbc, $queryCTEAns2_5);
$rowCTEAns2_5=mysqli_fetch_array($respCTEAns2_5);

$queryCTEAns2_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer_2='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns2_4 = @mysqli_query($dbc, $queryCTEAns2_4);
$rowCTEAns2_4=mysqli_fetch_array($respCTEAns2_4);

$queryCTEAns2_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer_2='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns2_3 = @mysqli_query($dbc, $queryCTEAns2_3);
$rowCTEAns2_3=mysqli_fetch_array($respCTEAns2_3);

$queryCTEAns2_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer_2='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns2_2 = @mysqli_query($dbc, $queryCTEAns2_2);
$rowCTEAns2_2=mysqli_fetch_array($respCTEAns2_2);

$queryCTEAns2_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CTE' and tbl_answer.answer_2='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCTEAns2_1 = @mysqli_query($dbc, $queryCTEAns2_1);
$rowCTEAns2_1=mysqli_fetch_array($respCTEAns2_1);
    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CTE",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCTEAns2_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCTEAns2_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCTEAns2_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCTEAns2_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCTEAns2_1[0],1,0,'C',0);

    $CTEtotal2 = $rowCTEAns2_5[0] + $rowCTEAns2_4[0] + $rowCTEAns2_3[0] + $rowCTEAns2_2[0] + $rowCTEAns2_1[0];
    $pdf->Cell(20,10,$CTEtotal2,1,0,'C',0);

    $CTEMean2 = 0;
    if($CTEtotal2>0){
        $CTEMean2 = (($rowCTEAns2_5[0]*5) + ($rowCTEAns2_4[0]*4) + ($rowCTEAns2_3[0]*3) + ($rowCTEAns2_2[0]*2) + ($rowCTEAns2_1[0]*1))/$CTEtotal2;
    }
    $pdf->Cell(20,10,sprintf('%0.2f',$CTEMean2),1,0,'C',0);


    //======================= CFND 5 - 1  ==================================
$queryCFNDAns2_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer_2='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns2_5 = @mysqli_query($dbc, $queryCFNDAns2_5);
$rowCFNDAns2_5=mysqli_fetch_array($respCFNDAns2_5);

$queryCFNDAns2_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer_2='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns2_4 = @mysqli_query($dbc, $queryCFNDAns2_4);
$rowCFNDAns2_4=mysqli_fetch_array($respCFNDAns2_4);

$queryCFNDAns2_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer_2='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns2_3 = @mysqli_query($dbc, $queryCFNDAns2_3);
$rowCFNDAns2_3=mysqli_fetch_array($respCFNDAns2_3);

$queryCFNDAns2_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer_2='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns2_2 = @mysqli_query($dbc, $queryCFNDAns2_2);
$rowCFNDAns2_2=mysqli_fetch_array($respCFNDAns2_2);

$queryCFNDAns2_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CFND' and tbl_answer.answer_2='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCFNDAns2_1 = @mysqli_query($dbc, $queryCFNDAns2_1);
$rowCFNDAns2_1=mysqli_fetch_array($respCFNDAns2_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CFND",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCFNDAns2_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCFNDAns2_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCFNDAns2_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCFNDAns2_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCFNDAns2_1[0],1,0,'C',0);

    $CFNDtotal2 = $rowCFNDAns2_5[0] + $rowCFNDAns2_4[0] + $rowCFNDAns2_3[0] + $rowCFNDAns2_2[0] + $rowCFNDAns2_1[0];
    $pdf->Cell(20,10,$CFNDtotal2,1,0,'C',0);

    $CFNDMean2 = 0;
    if($CFNDtotal2>0){
        $CFNDMean2 = (($rowCFNDAns2_5[0]*5) + ($rowCFNDAns2_4[0]*4) + ($rowCFNDAns2_3[0]*3) + ($rowCFNDAns2_2[0]*2) + ($rowCFNDAns2_1[0]*1))/$CFNDtotal2;
    }

    $pdf->Cell(20,10,sprintf('%0.2f',$CFNDMean2),1,0,'C',0);

        //======================= CHMT 5 - 1  ==================================
$queryCHMTAns2_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer_2='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns2_5 = @mysqli_query($dbc, $queryCHMTAns2_5);
$rowCHMTAns2_5=mysqli_fetch_array($respCHMTAns2_5);

$queryCHMTAns2_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer_2='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns2_4 = @mysqli_query($dbc, $queryCHMTAns2_4);
$rowCHMTAns2_4=mysqli_fetch_array($respCHMTAns2_4);

$queryCHMTAns2_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer_2='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns2_3 = @mysqli_query($dbc, $queryCHMTAns2_3);
$rowCHMTAns2_3=mysqli_fetch_array($respCHMTAns2_3);

$queryCHMTAns2_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer_2='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns2_2 = @mysqli_query($dbc, $queryCHMTAns2_2);
$rowCHMTAns2_2=mysqli_fetch_array($respCHMTAns2_2);

$queryCHMTAns2_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CHMT' and tbl_answer.answer_2='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCHMTAns2_1 = @mysqli_query($dbc, $queryCHMTAns2_1);
$rowCHMTAns2_1=mysqli_fetch_array($respCHMTAns2_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CHMT",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCHMTAns2_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCHMTAns2_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCHMTAns2_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCHMTAns2_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCHMTAns2_1[0],1,0,'C',0);

    $CHMTtotal2 = $rowCHMTAns2_5[0] + $rowCHMTAns2_4[0] + $rowCHMTAns2_3[0] + $rowCHMTAns2_2[0] + $rowCHMTAns2_1[0];
    $pdf->Cell(20,10,$CHMTtotal2,1,0,'C',0);

    $CHMTMean2 = 0;
    if($CHMTtotal2>0){
        $CHMTMean2 = (($rowCHMTAns2_5[0]*5) + ($rowCHMTAns2_4[0]*4) + ($rowCHMTAns2_3[0]*3) + ($rowCHMTAns2_2[0]*2) + ($rowCHMTAns2_1[0]*1))/$CHMTtotal2;
    }
    
    $pdf->Cell(20,10,sprintf('%0.2f',$CHMTMean2),1,0,'C',0);

    //======================= CBMA 5 - 1  ==================================
$queryCBMAAns2_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer_2='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns2_5 = @mysqli_query($dbc, $queryCBMAAns2_5);
$rowCBMAAns2_5=mysqli_fetch_array($respCBMAAns2_5);

$queryCBMAAns2_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer_2='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns2_4 = @mysqli_query($dbc, $queryCBMAAns2_4);
$rowCBMAAns2_4=mysqli_fetch_array($respCBMAAns2_4);

$queryCBMAAns2_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer_2='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns2_3 = @mysqli_query($dbc, $queryCBMAAns2_3);
$rowCBMAAns2_3=mysqli_fetch_array($respCBMAAns2_3);

$queryCBMAAns2_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer_2='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns2_2 = @mysqli_query($dbc, $queryCBMAAns2_2);
$rowCBMAAns2_2=mysqli_fetch_array($respCBMAAns2_2);

$queryCBMAAns2_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='CBMA' and tbl_answer.answer_2='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCBMAAns2_1 = @mysqli_query($dbc, $queryCBMAAns2_1);
$rowCBMAAns2_1=mysqli_fetch_array($respCBMAAns2_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  CBMA",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCBMAAns2_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCBMAAns2_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCBMAAns2_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCBMAAns2_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCBMAAns2_1[0],1,0,'C',0);

    $CBMAtotal2 = $rowCBMAAns2_5[0] + $rowCBMAAns2_4[0] + $rowCBMAAns2_3[0] + $rowCBMAAns2_2[0] + $rowCBMAAns2_1[0];
    $pdf->Cell(20,10,$CBMAtotal2,1,0,'C',0);

    $CBMAMean2 = 0;
    if($CBMAtotal2>0){
        $CBMAMean2 = (($rowCBMAAns2_5[0]*5) + ($rowCBMAAns2_4[0]*4) + ($rowCBMAAns2_3[0]*3) + ($rowCBMAAns2_2[0]*2) + ($rowCBMAAns2_1[0]*1))/$CBMAtotal2;
    }

    $pdf->Cell(20,10,sprintf('%0.2f',$CBMAMean2),1,0,'C',0);

        //======================= COF 5 - 1  ==================================
$queryCOFAns2_5 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer_2='5' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns2_5 = @mysqli_query($dbc, $queryCOFAns2_5);
$rowCOFAns2_5=mysqli_fetch_array($respCOFAns2_5);

$queryCOFAns2_4 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer_2='4' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns2_4 = @mysqli_query($dbc, $queryCOFAns2_4);
$rowCOFAns2_4=mysqli_fetch_array($respCOFAns2_4);

$queryCOFAns2_3 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer_2='3' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns2_3 = @mysqli_query($dbc, $queryCOFAns2_3);
$rowCOFAns2_3=mysqli_fetch_array($respCOFAns2_3);

$queryCOFAns2_2 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer_2='2' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns2_2 = @mysqli_query($dbc, $queryCOFAns2_2);
$rowCOFAns2_2=mysqli_fetch_array($respCOFAns2_2);

$queryCOFAns2_1 = "Select count(*) from tbl_user INNER JOIN tbl_answer ON tbl_user.id_num = tbl_answer.username where tbl_user.college='COF' and tbl_answer.answer_2='1' and tbl_answer.question_id='".$query_params['id']."'";

$respCOFAns2_1 = @mysqli_query($dbc, $queryCOFAns2_1);
$rowCOFAns2_1=mysqli_fetch_array($respCOFAns2_1);

    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  COF",1,0,'L',0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,$rowCOFAns2_5[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCOFAns2_4[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCOFAns2_3[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCOFAns2_2[0],1,0,'C',0);
    $pdf->Cell(20,10,$rowCOFAns2_1[0],1,0,'C',0);

    $COFtotal2 = $rowCOFAns2_5[0] + $rowCOFAns2_4[0] + $rowCOFAns2_3[0] + $rowCOFAns2_2[0] + $rowCOFAns2_1[0];
    $pdf->Cell(20,10,$COFtotal2,1,0,'C',0);

    $COFMean2 = 0;
    if($COFtotal2>0){
        $COFMean2 = (($rowCOFAns2_5[0]*5) + ($rowCOFAns2_4[0]*4) + ($rowCOFAns2_3[0]*3) + ($rowCOFAns2_2[0]*2) + ($rowCOFAns2_1[0]*1))/$COFtotal2;
    }
    $pdf->Cell(20,10,sprintf('%0.2f',$COFMean2),1,0,'C',0);


    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  Total",1,0,'L',0);
    $pdf->SetFont('Arial','',10);

    $total5Ans2 = $rowCASAns2_5[0] + $rowCTEAns2_5[0] +$rowCFNDAns2_5[0] + $rowCHMTAns2_5[0] + $rowCBMAAns2_5[0] + $rowCOFAns2_5[0];
    $pdf->Cell(20,10,$total5Ans2,1,0,'C',0);

    $total4Ans2 = $rowCASAns2_4[0] + $rowCTEAns2_4[0] +$rowCFNDAns2_4[0] + $rowCHMTAns2_4[0] + $rowCBMAAns2_4[0] + $rowCOFAns2_4[0];
    $pdf->Cell(20,10,$total4Ans2,1,0,'C',0);

    $total3Ans2 = $rowCASAns2_3[0] + $rowCTEAns2_3[0] +$rowCFNDAns2_3[0] + $rowCHMTAns2_3[0] + $rowCBMAAns2_3[0] + $rowCOFAns2_3[0];
    $pdf->Cell(20,10,$total3Ans2,1,0,'C',0);

    $total2Ans2 = $rowCASAns2_2[0] + $rowCTEAns2_2[0] +$rowCFNDAns2_2[0] + $rowCHMTAns2_2[0] + $rowCBMAAns2_2[0] + $rowCOFAns2_2[0];
    $pdf->Cell(20,10,$total2Ans2,1,0,'C',0);

    $total1Ans2 = $rowCASAns2_1[0] + $rowCTEAns2_1[0] +$rowCFNDAns2_1[0] + $rowCHMTAns2_1[0] + $rowCBMAAns2_1[0] + $rowCOFAns2_1[0];
    $pdf->Cell(20,10,$total1Ans2,1,0,'C',0);

    $finalTotal2 = $total5Ans2 + $total4Ans2 + $total3Ans2 + $total2Ans2 + $total1Ans2;
    $pdf->Cell(20,10,$finalTotal2,1,0,'C',0);

    $finalMean2 = 0;
    if($finalTotal2>0){
        $finalMean2 = (($total5Ans2*5) + ($total4Ans2*4) + ($total3Ans2*3) + ($total2Ans2*2) + ($total1Ans2*1))/$finalTotal2;
    }
    $pdf->Cell(20,10,sprintf('%0.2f',$finalMean2),1,0,'C',0);


    $pdf->Ln(10);
    $pdf->SetFont('Arial','B',12);
    $pdf->Cell(50,10,"  Percentage",1,0,'L',0);
    $pdf->SetFont('Arial','',10);

    $percentage5_2 = 0;
    if($finalTotal2>0){
        $percentage5_2 = ($total5Ans2/$finalTotal2)*100;
    }
    $pdf->Cell(20,10,$percentage5_2,1,0,'C',0);

    $percentage4_2 = 0;
    if($finalTotal2>0){
        $percentage4_2 = ($total4Ans2/$finalTotal2)*100;
    }
    $pdf->Cell(20,10,$percentage4_2,1,0,'C',0);

    $percentage3_2 = 0;
    if($finalTotal2>0){
        $percentage3_2 = ($total3Ans2/$finalTotal2)*100;
    }
    $pdf->Cell(20,10,$percentage3_2,1,0,'C',0);

    $percentage2_2 = 0;
    if($finalTotal2>0){
        $percentage2_2 = ($total2Ans2/$finalTotal2)*100;
    }
    $pdf->Cell(20,10,$percentage2_2,1,0,'C',0);

    $percentage1_2 = 0;
    if($finalTotal2>0){
        $percentage1_2 = ($total1Ans2/$finalTotal2)*100;
    }
    $pdf->Cell(20,10,$percentage1_2,1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);
    $pdf->Cell(20,10,"",1,0,'C',0);

// if($resp){
//     while($row=mysqli_fetch_array($resp)){x
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