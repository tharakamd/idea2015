<?php

// Redirect output to a client’s web browser (Excel5) 
header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="results.xls"');
header('Cache-Control: max-age=0');
require_once '../Classes/PHPExcel.php';

$dbhost = "localhost"; //your MySQL Server 
$dbuser = "idea_challenge"; //your MySQL User Name 
$dbpass = "Xhallenge0099-123Zx"; //your MySQL Password 
$dbname = "idea_challenge";
$tablename = "register_details"; //your MySQL Table Name which one you have to create excel   file 
// your mysql query here , we can edit this for your requirement 
$sql = "Select * from $tablename ";
//create  code for connecting to mysql 
$Connect = @mysql_connect($dbhost, $dbuser, $dbpass)
        or die("Couldn't connect to MySQL:<br>" . mysql_error() . "<br>" . mysql_errno());
//select database 
$dbh = @mysql_select_db($dbname, $Connect)
        or die("Couldn't select database:<br>" . mysql_error() . "<br>" . mysql_errno());
//execute query 
$result = @mysql_query($sql, $Connect)
        or die("Couldn't execute query:<br>" . mysql_error() . "<br>" . mysql_errno());

$number_0f_rows = mysql_num_rows($result);

error_reporting(E_ALL);


$objPHPExcel = new PHPExcel(); //Create a New Excel
// Set the active Excel worksheet to sheet 0 
$objPHPExcel->setActiveSheetIndex(0);
$sheet = $objPHPExcel->getActiveSheet();

try {

    //Set Up Worksheet Title
    //Use to merge cells
    $sheet->mergeCells('F1:H1');
    $sheet->mergeCells('F2:H2');

    //Use to align inner text to be in center
    $sheet->getStyle('F1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
    $sheet->getStyle('F2')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    //Set up Headings
    $sheet->setCellValue('F1', "Idea Challenge - 2013");
    $sheet->setCellValue('F2', "Team Registration Information");

    //Cell Font Formatings
    $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setName('Candara');
    $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setSize(30);
    $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->setUnderline(PHPExcel_Style_Font::UNDERLINE_SINGLE);
    $objPHPExcel->getActiveSheet()->getStyle('F1')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_DARKGREEN);

    $objPHPExcel->getActiveSheet()->getStyle('F2')->getFont()->setName('Candara');
    $objPHPExcel->getActiveSheet()->getStyle('F2')->getFont()->setSize(15);
    $objPHPExcel->getActiveSheet()->getStyle('F2')->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->getStyle('F3')->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);

    //Add Idea Challenge Logo to the sheet
    $objDrawing = new PHPExcel_Worksheet_Drawing();
    $objDrawing->setName('Idea Challenge Logo');
    $objDrawing->setDescription('Idea Challenge Logo');
    $objDrawing->setPath('./images/idealogo.png');
    $objDrawing->setHeight(36);
    $objDrawing->setWidth(36);
    
    $objDrawing->setCoordinates('E1');
    $objDrawing->setOffsetX(50);
    $objDrawing->setWorksheet($objPHPExcel->getActiveSheet());

    //Add Private Note
    $objRichText = new PHPExcel_RichText();

    $objPayable = $objRichText->createTextRun('This file is  About the teams that registered with the Idea Challenge - 2013 ');
    $objPayable->getFont()->setBold(true);
    $objPayable->getFont()->setItalic(true);
    $objPayable->getFont()->setColor(new PHPExcel_Style_Color(PHPExcel_Style_Color::COLOR_DARKGREEN));

    $objPayable = $objRichText->createTextRun(',You are not allowed to copy or distibute this document.');
    $objPayable->getFont()->setBold(true);
    $objPayable->getFont()->setItalic(true);
    $objPayable->getFont()->setColor(new PHPExcel_Style_Color(PHPExcel_Style_Color::COLOR_RED));

    $objPHPExcel->getActiveSheet()->getCell('E' . ($number_0f_rows + 10))->setValue($objRichText);

    //Merge Rich Text Cells
    $cellleft = 'E' . ($number_0f_rows + 10);
    $cellright = 'I' . ($number_0f_rows + 10);

    $objPHPExcel->getActiveSheet()->mergeCells($cellleft . ':' . $cellright);

    //Center Rich Text
    $sheet->getStyle('E' . $cellleft)->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);


    //##############################################
    //Adding Link To The Page
    $sheet->setCellValue('F'.($number_0f_rows + 11), 'Worksheet Design By :');
    $objPHPExcel->getActiveSheet()->getStyle('F'.($number_0f_rows + 11))->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->getStyle('F'.($number_0f_rows + 11))->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLACK);
    $sheet->getStyle('F'.($number_0f_rows + 11))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_RIGHT);
    $sheet->setCellValue('G'.($number_0f_rows + 11), 'Chamika Kasun');
    $objPHPExcel->getActiveSheet()->getStyle('G'.($number_0f_rows + 11))->getFont()->setBold(true);
    $objPHPExcel->getActiveSheet()->getStyle('G'.($number_0f_rows + 11))->getFont()->getColor()->setARGB(PHPExcel_Style_Color::COLOR_BLUE);
    $sheet->getStyle('G'.($number_0f_rows + 11))->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);
    $sheet->getCell('G'.($number_0f_rows + 11))->getHyperlink()->setUrl('https://www.facebook.com/kasun.chamika');
    $sheet->getCell('G'.($number_0f_rows + 11))->getHyperlink()->setTooltip('Visit My Facebook Page');


    //Set Up Table Headers
    $sheet->setCellValue('A4', "Register ID");
    $sheet->setCellValue('B4', "School Name");
    $sheet->setCellValue('C4', "First Student Name");
    $sheet->setCellValue('D4', "First Student Email");
    $sheet->setCellValue('E4', "Second Student Name");
    $sheet->setCellValue('F4', "Second Student Email");
    $sheet->setCellValue('G4', "Third Student Name");
    $sheet->setCellValue('H4', "Third Student Email");
    $sheet->setCellValue('I4', "Fourth Student Name");
    $sheet->setCellValue('J4', "Fourth Student Email");
    $sheet->setCellValue('K4', "Group Leader");
    $sheet->setCellValue('L4', "Group Leader Mobile");
    $sheet->setCellValue('M4', "Mentor Name");
    $sheet->setCellValue('N4', "Mentor Email");
    $sheet->setCellValue('O4', "Mentor Mobile");

    $sheet->getStyle('A4')->getFont()->setBold(true);
    $sheet->getStyle('B4')->getFont()->setBold(true);
    $sheet->getStyle('C4')->getFont()->setBold(true);
    $sheet->getStyle('D4')->getFont()->setBold(true);
    $sheet->getStyle('E4')->getFont()->setBold(true);
    $sheet->getStyle('F4')->getFont()->setBold(true);
    $sheet->getStyle('G4')->getFont()->setBold(true);
    $sheet->getStyle('H4')->getFont()->setBold(true);
    $sheet->getStyle('I4')->getFont()->setBold(true);
    $sheet->getStyle('J4')->getFont()->setBold(true);
    $sheet->getStyle('K4')->getFont()->setBold(true);
    $sheet->getStyle('L4')->getFont()->setBold(true);
    $sheet->getStyle('M4')->getFont()->setBold(true);
    $sheet->getStyle('N4')->getFont()->setBold(true);
    $sheet->getStyle('O4')->getFont()->setBold(true);

    $sheet->getColumnDimension('A')->setAutoSize(true);
    $sheet->getColumnDimension('B')->setAutoSize(true);
    $sheet->getColumnDimension('C')->setAutoSize(true);
    $sheet->getColumnDimension('D')->setAutoSize(true);
    $sheet->getColumnDimension('E')->setAutoSize(true);
    $sheet->getColumnDimension('F')->setAutoSize(true);
    $sheet->getColumnDimension('G')->setAutoSize(true);
    $sheet->getColumnDimension('H')->setAutoSize(true);
    $sheet->getColumnDimension('I')->setAutoSize(true);
    $sheet->getColumnDimension('J')->setAutoSize(true);
    $sheet->getColumnDimension('K')->setAutoSize(true);
    $sheet->getColumnDimension('L')->setAutoSize(true);
    $sheet->getColumnDimension('M')->setAutoSize(true);
    $sheet->getColumnDimension('N')->setAutoSize(true);
    $sheet->getColumnDimension('O')->setAutoSize(true);


    $style1 = array(
        'borders' => array(
            'bottom' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array(
                    'rgb' => '000000'
                )
            ),
            'right' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array(
                    'rgb' => '000000'
                )
            )
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'startcolor' => array(
                'rgb' => 'c5eeda',
            ),
        ),
    );

    $style2 = array(
        'borders' => array(
            'bottom' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array(
                    'rgb' => '000000'
                )
            ),
            'right' => array(
                'style' => PHPExcel_Style_Border::BORDER_THIN,
                'color' => array(
                    'rgb' => '000000'
                )
            )
        ),
        'fill' => array(
            'type' => PHPExcel_Style_Fill::FILL_SOLID,
            'startcolor' => array(
                'rgb' => 'b8f4a2',
            ),
        ),
    );

    $objPHPExcel->getActiveSheet()->getStyle('A5:A' . ($number_0f_rows + 4))->applyFromArray($style1);
    $objPHPExcel->getActiveSheet()->getStyle('B5:B' . ($number_0f_rows + 4))->applyFromArray($style2);
    $objPHPExcel->getActiveSheet()->getStyle('C5:C' . ($number_0f_rows + 4))->applyFromArray($style1);
    $objPHPExcel->getActiveSheet()->getStyle('D5:D' . ($number_0f_rows + 4))->applyFromArray($style2);
    $objPHPExcel->getActiveSheet()->getStyle('E5:E' . ($number_0f_rows + 4))->applyFromArray($style1);
    $objPHPExcel->getActiveSheet()->getStyle('F5:F' . ($number_0f_rows + 4))->applyFromArray($style2);
    $objPHPExcel->getActiveSheet()->getStyle('G5:G' . ($number_0f_rows + 4))->applyFromArray($style1);
    $objPHPExcel->getActiveSheet()->getStyle('H5:H' . ($number_0f_rows + 4))->applyFromArray($style2);
    $objPHPExcel->getActiveSheet()->getStyle('I5:I' . ($number_0f_rows + 4))->applyFromArray($style1);
    $objPHPExcel->getActiveSheet()->getStyle('J5:J' . ($number_0f_rows + 4))->applyFromArray($style2);
    $objPHPExcel->getActiveSheet()->getStyle('K5:K' . ($number_0f_rows + 4))->applyFromArray($style1);
    $objPHPExcel->getActiveSheet()->getStyle('L5:L' . ($number_0f_rows + 4))->applyFromArray($style2);
    $objPHPExcel->getActiveSheet()->getStyle('M5:M' . ($number_0f_rows + 4))->applyFromArray($style1);
    $objPHPExcel->getActiveSheet()->getStyle('N5:N' . ($number_0f_rows + 4))->applyFromArray($style2);
    $objPHPExcel->getActiveSheet()->getStyle('O5:O' . ($number_0f_rows + 4))->applyFromArray($style1);


    //Set Header Banner
    $objPHPExcel->getActiveSheet()->getStyle('A4:O4')->getFill()->setFillType(PHPExcel_Style_Fill::FILL_SOLID);
    $objPHPExcel->getActiveSheet()->getStyle('A4:O4')->getFill()->getStartColor()->setARGB('26FA6C');



    //Get Mysql Database Data Into Cells
    $rowCount = 5;
    while ($row = mysql_fetch_array($result)) {
        $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $row['register_id']);
        $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $row['school_name']);
        $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $row['first_student_name']);
        $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $row['first_student_email']);
        $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $row['second_student_name']);
        $objPHPExcel->getActiveSheet()->SetCellValue('F' . $rowCount, $row['second_student_email']);
        $objPHPExcel->getActiveSheet()->SetCellValue('G' . $rowCount, $row['third_student_name']);
        $objPHPExcel->getActiveSheet()->SetCellValue('H' . $rowCount, $row['third_student_email']);
        $objPHPExcel->getActiveSheet()->SetCellValue('I' . $rowCount, $row['fourth_student_name']);
        $objPHPExcel->getActiveSheet()->SetCellValue('J' . $rowCount, $row['fourth_student_email']);
        $objPHPExcel->getActiveSheet()->SetCellValue('K' . $rowCount, $row['group_leader']);
        $objPHPExcel->getActiveSheet()->SetCellValue('L' . $rowCount, $row['group_leader_mobile']);
        $objPHPExcel->getActiveSheet()->SetCellValue('M' . $rowCount, $row['mentor_name']);
        $objPHPExcel->getActiveSheet()->SetCellValue('N' . $rowCount, $row['mentor_email']);
        $objPHPExcel->getActiveSheet()->SetCellValue('O' . $rowCount, $row['mentor_mobile']);
        $rowCount++;
    }


    $dbh = null;
} catch (PDOException $e) {
    echo $e->getMessage();
    $dbh = null;
}

$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
$objWriter->save('php://output');
$name = $_GET['name'] ;
require 'downloader_details.php?name=' . $name . '';

exit;
?>
