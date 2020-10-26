<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LaporanProyek extends FPDF{
    // Page header
    function Header(){
        $this->setFont('Arial','I',9);
        $this->setFillColor(255,255,255);
        $this->cell(175,6,"Laporan RPP Annisah Teknik Karya",0,0,'L',1); 
        $this->cell(100,6,"(A4 - Landscape) - Printed date : " . date('d-M-Y'),0,1,'R',1); 
        $this->Line(10,$this->GetY(),285,$this->GetY());
        // Line break
        $this->Ln(5);
    }

    function Content($report){
        foreach ($report as $key) {
            $nama = $key->nama_project;
        }  
            $this->setFont('Arial','B',10);
            $this->setFillColor(255,190,0);
            $this->cell(275,10,'Rencana Pelaksanaan Proyek '.$nama,1,1,'C',1);
            $this->setFillColor(255,255,255);
            $this->cell(275,6,'',1,1,'C',1);
            $this->setFillColor(255,190,0);
            $this->cell(10,10,'No.',1,0,'C',1);
            $this->cell(65,10,'Item Pekerjaan',1,0,'C',1);
            $this->cell(15,10,'Satuan',1,0,'C',1);
            $this->cell(25,10,'Qty',1,0,'C',1);
            $this->cell(40,10,'Harsat',1,0,'C',1);
            $this->cell(40,10,'Anggaran',1,0,'C',1);
            $this->cell(40,10,'Realisasi',1,0,'C',1);
            $this->cell(40,10,'Keterangan',1,1,'C',1);
        $ya = 46;
        $rw = 6;
        $no = 1;
        $ja = 0;
        $jr = 0;
        foreach ($report as $key) {
            $this->setFont('Arial','',10);
            $this->setFillColor(255,255,255);	
            $this->cell(10,6,$no,1,0,'L',1);
            $this->cell(65,6,$key->nama_item,1,0,'L',1);
            $this->cell(15,6,$key->satuan,1,0,'L',1);
            $this->cell(25,6,$key->qty,1,0,'R',1);
            $this->cell(40,6,number_format($key->harga_satuan,0,".",","),1,0,'R',1);
            $this->cell(40,6,number_format($key->jumlah,0,".",","),1,0,'R',1);
            $this->cell(40,6,number_format($key->realisasi,0,".",","),1,0,'R',1);
            $this->cell(40,6,'',1,1,'L',1);
            $ja = $ja+$key->jumlah;
            $jr = $jr+$key->realisasi;
            $ya = $ya + $rw;
            $no++;
        }	
        $this->setFont('Arial','B',10);
        $this->setFillColor(255,255,255);	
        $this->cell(10,6,'',1,0,'L',1);
        $this->cell(145,6,'Jumlah',1,0,'L',1);
        $this->cell(40,6,number_format($ja,0,".",","),1,0,'R',1);
        $this->cell(40,6,number_format($jr,0,".",","),1,0,'R',1);
        $this->cell(40,6,'',1,1,'L',1);
    }

    // Page footer
    function Footer(){
        // Position at 1.5 cm from bottom
        $this->SetY(-15);
        //buat garis horizontal
        $this->Line(10,$this->GetY(),285,$this->GetY());
        //Arial italic 9
        $this->SetFont('Arial','I',9);
        $this->Cell(0,10,'@'.date('Y').' Annisah Teknik Karya',0,0,'L');
        //nomor halaman
        $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'R');
    }
}

// Instanciation of inherited class
$pdf = new LaporanProyek();
$pdf->AliasNbPages();
$pdf->AddPage('L','A4',0);
//$pdf->SetFont('Times','',12);
//for($i=1;$i<=40;$i++)
//    $pdf->Cell(0,10,'Printing line number '.$i,0,1);
$pdf->Content($report);
$pdf->Output('I','Rencana Pelaksanaan Proyek',false);
