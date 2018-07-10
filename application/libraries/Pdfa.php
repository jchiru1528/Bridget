<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
    // Incluimos el archivo fpdf
    require_once APPPATH."/third_party/fpdf/fpdf.php";
 
    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdfa extends FPDF {
        public function __construct() {
            parent::__construct();
        }
        // El encabezado del PDF
        public function Header(){
            $this->Image('images/logoReporteB.jpg',10,8,25);
			$this->Image('images/logo2ReporteB.jpg',178,8,28);
            $this->SetFont('Arial','B',12);
            $this->Cell(30);
            $this->Cell(120,10,utf8_decode('DIÓCESIS DE COLON KUNA YALA'),0,0,'C');
            $this->Ln('5');
            $this->SetFont('Arial','B',12);
            $this->Cell(30);
            $this->Cell(120,10,'FORMULARIO PARA VOLUNTARIOS DIOCESANO',0,0,'C');
			$this->Ln('4');
            $this->SetFont('Arial','B',12);
            $this->Cell(30);
			$this->Cell(120,10,utf8_decode('DÍAS EN LAS DIÓCESIS '),0,0,'C');
            $this->Ln(20);
       }
       // El pie del pdf
       public function Footer(){
           $this->SetY(-15);
           $this->SetFont('Arial','I',8);
           //$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
      }
    }
?>