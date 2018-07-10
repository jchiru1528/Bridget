<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Reportea extends CI_Controller 
	   {
			 function __construct()
 				{
                    parent::__construct();
					$this->load->helper(array('form', 'url'));
					$this->load->library('pdfa');
					$this->load->Model('consulta_model','', TRUE);
	
				}
// funcio index --------------------------------------------------------------------------------------
			function index()
				{
					set_time_limit(720);
					
					$this->load->view('reporteb_view');
					
				}
				
// funcio upload carga el archivo--------------------------------------------------------------------------------------

			function decargar()
				{
				
				  $cedula = $this->input->post('cedula');
				  
				  
				  if(trim($cedula)== false )
					  {
						 
						 
						  
					  }

				  else
					  {
						 $datos= $this->consulta_model->rpt_a($cedula);
						 
						 $this->pdf = new Pdfa('L','cm','Letter');
					// Agregamos una página
					$this->pdf->AddPage();
					// Define el alias para el número de página que se imprimirá en el pie
					$this->pdf->AliasNbPages();
			 
					/* Se define el titulo, márgenes izquierdo, derecho y
					 * el color de relleno predeterminado
					 */
					$this->pdf->SetTitle("FomularioA");
					
					$this->pdf->SetFillColor(200,200,200);
			 
					// Se define el formato de fuente: Arial, negritas, tamaño 9
					$this->pdf->SetFont('Arial', 'B', 10);
					/*
					 * TITULOS DE COLUMNAS
					 *
					 * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
					 */

			        $this->pdf->Cell(90,7,utf8_decode('DATOS PERSONALES'),0,'L','0');
				
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(90,7,utf8_decode($row->parro),0,'R','0');
				
						
					}
						
			        $this->pdf->Ln(7);
					
			        $this->pdf->setFont('Arial','',9);
					$this->pdf->Cell(195,0,'','TB',0,'C','1');
					$this->pdf->Ln(3);
					$this->pdf->Cell(33,7,utf8_decode('Nombre y Apellidos:'),0,'U','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(55,7,utf8_decode($row->nombreR),0,'N','0');	
					}
					$this->pdf->Cell(10,7,utf8_decode('Sexo:'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(30,7,utf8_decode($row->sexo),0,'R','0');	
					}
					$this->pdf->Cell(25,7,utf8_decode('Fecha de Nac.:'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(30,7,utf8_decode($row->fehca_naci),0,'R','0');	
					}
					$this->pdf->Ln(5);
					$this->pdf->Cell(45,7,utf8_decode('Domicilio Dirección Completa:'),0,'U','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(120,7,utf8_decode($row->domicilio),0,'R','0');	
					}
					$this->pdf->Ln(5);
					$this->pdf->Cell(15,7,utf8_decode('Teléfono:'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(40,7,utf8_decode($row->telefono),0,'R','0');	
					}
					$this->pdf->Cell(15,7,utf8_decode('Celular:'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(50,7,utf8_decode($row->celular),0,'R','0');	
					}
					$this->pdf->Cell(12,7,utf8_decode('E-Mail:'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(40,7,utf8_decode($row->email),0,'R','0');	
					}
					$this->pdf->Ln(5);
					$this->pdf->Cell(20,7,utf8_decode('Tipo de Doc:'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(35,7,utf8_decode($row->tipo_doc),0,'R','0');	
					}
					$this->pdf->Cell(25,7,utf8_decode('N de Documento:'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(40,7,utf8_decode($row->numero_doc),0,'R','0');	
					}
					$this->pdf->Cell(25,7,utf8_decode('Tipo de Sangre:'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(40,7,utf8_decode($row->tipo_sangre),0,'R','0');	
					}

                    $this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(12);
					$this->pdf->Cell(195,0,'','TBL',0,'C','1');
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(3);
					$this->pdf->Cell(25,7,utf8_decode('ÁREA:'),0,'L','0');
					
				
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->pre_pasto),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Preparación Pastoral '),0,'L','0');
					}
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->acodiga),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Acogida'),0,'L','0');
					}
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->voluntario),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Discapacitados'),0,'L','0');
					}
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->logistica),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Logística'),0,'L','0');	
					}
					$this->pdf->Ln(10);
					$this->pdf->Cell(25,7,'',0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->catequesis),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Catequesis'),0,'L','0');
					}					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->festival),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Festival de la Juv.'),0,'L','0');
					}
					
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(12);
					$this->pdf->Cell(195,0,'','TBL',0,'C','1');
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(3);
					$this->pdf->Cell(38,7,utf8_decode('RESPONSABLE ÁREA:'),0,'L','0');
					
				
					
			
					
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->si),1, 0 , 'C', false );
					    $this->pdf->Cell(8,7,utf8_decode('SI'),0,'L','0');	
					}
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->no),1, 0 , 'C', false );
					    $this->pdf->Cell(8,7,utf8_decode('NO'),0,'L','0');	
					}
					
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(12);
					$this->pdf->Cell(195,0,'','TBL',0,'C','1');
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(3);
					$this->pdf->Cell(30,7,utf8_decode('DISPONIBILIDAD'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->fin_semana),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Fin de Semanas '),0,'L','0');
					}
					$this->pdf->Cell(23,7,utf8_decode('HORARIOS'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->manana),1, 0 , 'C', false );
					    $this->pdf->Cell(25,7,utf8_decode('Mañana'),0,'L','0');
					}
					$this->pdf->Cell(29,7,utf8_decode('VOLUNTARIADO'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->volun_ante),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Antes de la JMJ'),0,'L','0');
					}
					$this->pdf->Ln(12);
					$this->pdf->Cell(30,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->lun_a_vier),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('De Lunes a Viernes'),0,'L','0');
					}
					$this->pdf->Cell(23,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->tarde),1, 0 , 'C', false );
					    $this->pdf->Cell(25,7,utf8_decode('Tarde'),0,'L','0');
					}
					$this->pdf->Cell(29,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->volun_desp),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Antes de la JMJ'),0,'L','0');
					}	
					$this->pdf->Ln(12);
					$this->pdf->Cell(30,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->toda_semana),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Toda la Semana'),0,'L','0');
					}
					$this->pdf->Cell(23,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->independiente),1, 0 , 'C', false );
					    $this->pdf->Cell(25,7,utf8_decode('Indiferente'),0,'L','0');
					}
					$this->pdf->Cell(29,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->volun_todo),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Todo el Tiempo'),0,'L','0');
					}	
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(12);
					$this->pdf->Cell(195,0,'','TBL',0,'C','1');
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(3);
					$this->pdf->Cell(30,7,utf8_decode('ESTUDIOS'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->estu_basico),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Estudios Básicos'),0,'L','0');
					}
					$this->pdf->Cell(23,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->estu_bachiller),1, 0 , 'C', false );
					    $this->pdf->Cell(25,7,utf8_decode('Bachiller'),0,'L','0');
					}
					$this->pdf->Cell(29,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->volun_todo),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Formación Profesional'),0,'L','0');
					}
					$this->pdf->Ln(12);
					$this->pdf->Cell(30,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->estu_tecnico),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Técnico'),0,'L','0');
					}
					$this->pdf->Cell(23,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->estu_pregrado),1, 0 , 'C', false );
					    $this->pdf->Cell(25,7,utf8_decode('Licenciatura o Ingenería Superior'),0,'L','0');
					}
					$this->pdf->Cell(29,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->estu_otro),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Otros'),0,'L','0');
					}
					$Bajo=false;
					$Medio=false;
					$Alto=false;
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(12);
					$this->pdf->Cell(195,0,'','TBL',0,'C','1');
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(3);
					$this->pdf->Cell(25,7,utf8_decode('IDIOMAS:'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(8,7,utf8_decode($row->idioma_ingles),1, 0 , 'C', false );			
					    $this->pdf->Cell(15,7,utf8_decode('Ingles '),0,'L','0');
						if ($row->nivel_ingles==1)
						{
							$Bajo=true;
						}
						else if ($row->nivel_ingles==2)
						{
							$Medio=true;
						}
						else if ($row->nivel_ingles==3)
						{
							$Alto=true;
						}
					}
					
					$this->pdf->Cell(15,7,utf8_decode('Bajo'),0, 0 , 'C',$Bajo);
					$this->pdf->Cell(15,7,utf8_decode('Medio'),0, 0 , 'C',$Medio);
					$this->pdf->Cell(15,7,utf8_decode('Alto'),0, 0 , 'C',$Alto);
					$this->pdf->Cell(5,7,utf8_decode(''),0,'L','0');
					$Bajo=false;
					$Medio=false;
					$Alto=false;
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(8,7,utf8_decode($row->idioma_frances),1, 0 , 'C', false );			
					    $this->pdf->Cell(15,7,utf8_decode('Francés'),0,'L','0');
						if ($row->nivel_frances==1)
						{
							$Bajo=true;
						}
						else if ($row->nivel_frances==2)
						{
							$Medio=true;
						}
						else if ($row->nivel_frances==3)
						{
							$Alto=true;
						}
					}
					$this->pdf->Cell(15,7,utf8_decode('Bajo'),0, 0 , 'C',$Bajo);
					$this->pdf->Cell(15,7,utf8_decode('Medio'),0, 0 , 'C',$Medio);
					$this->pdf->Cell(15,7,utf8_decode('Alto'),0, 0 , 'C',$Alto);
					$this->pdf->Cell(5,7,utf8_decode(''),0,'L','0');
					$this->pdf->Ln(12);
					$this->pdf->Cell(25,7,utf8_decode(''),0,'L','0');
					$Bajo=false;
					$Medio=false;
					$Alto=false;
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(8,7,utf8_decode($row->idioma_aleman),1, 0 , 'C', false );			
					    $this->pdf->Cell(15,7,utf8_decode('Alemán'),0,'L','0');
						if ($row->nivel_aleman==1)
						{
							$Bajo=true;
						}
						else if ($row->nivel_aleman==2)
						{
							$Medio=true;
						}
						else if ($row->nivel_aleman==3)
						{
							$Alto=true;
						}
					}
					$this->pdf->Cell(15,7,utf8_decode('Bajo'),0, 0 , 'C',$Bajo);
					$this->pdf->Cell(15,7,utf8_decode('Medio'),0, 0 , 'C',$Medio);
					$this->pdf->Cell(15,7,utf8_decode('Alto'),0, 0 , 'C',$Alto);
					$this->pdf->Cell(5,7,utf8_decode(''),0,'L','0');
					$Bajo=false;
					$Medio=false;
					$Alto=false;
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(8,7,utf8_decode($row->idioma_italiano),1, 0 , 'C', false );			
					    $this->pdf->Cell(15,7,utf8_decode('Italiano'),0,'L','0');
						if ($row->nivel_italiano==1)
						{
							$Bajo=true;
						}
						else if ($row->nivel_italiano==2)
						{
							$Medio=true;
						}
						else if ($row->nivel_italiano==3)
						{
							$Alto=true;
						}
					}
					$this->pdf->Cell(15,7,utf8_decode('Bajo'),0, 0 , 'C',$Bajo);
					$this->pdf->Cell(15,7,utf8_decode('Medio'),0, 0 , 'C',$Medio);
					$this->pdf->Cell(15,7,utf8_decode('Alto'),0, 0 , 'C',$Alto);
					$this->pdf->Cell(5,7,utf8_decode(''),0,'L','0');
					
					$this->pdf->Ln(12);
					$this->pdf->Cell(25,7,utf8_decode(''),0,'L','0');
					$Bajo=false;
					$Medio=false;
					$Alto=false;
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(8,7,utf8_decode($row->idioma_portu),1, 0 , 'C', false );			
					    $this->pdf->Cell(15,7,utf8_decode('Portugués'),0,'L','0');
						if ($row->nivel_portu==1)
						{
							$Bajo=true;
						}
						else if ($row->nivel_portu==2)
						{
							$Medio=true;
						}
						else if ($row->nivel_portu==3)
						{
							$Alto=true;
						}
					}
					$this->pdf->Cell(15,7,utf8_decode('Bajo'),0, 0 , 'C',$Bajo);
					$this->pdf->Cell(15,7,utf8_decode('Medio'),0, 0 , 'C',$Medio);
					$this->pdf->Cell(15,7,utf8_decode('Alto'),0, 0 , 'C',$Alto);
					$this->pdf->Cell(5,7,utf8_decode(''),0,'L','0');
					$Bajo=false;
					$Medio=false;
					$Alto=false;
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(8,7,utf8_decode($row->idioma_otro),1, 0 , 'C', false );			
					    $this->pdf->Cell(15,7,utf8_decode('Otro'),0,'L','0');
						if ($row->nivel_otro==1)
						{
							$Bajo=true;
						}
						else if ($row->nivel_otro==2)
						{
							$Medio=true;
						}
						else if ($row->nivel_otro==3)
						{
							$Alto=true;
						}
					}
					$this->pdf->Cell(15,7,utf8_decode('Bajo'),0, 0 , 'C',$Bajo);
					$this->pdf->Cell(15,7,utf8_decode('Medio'),0, 0 , 'C',$Medio);
					$this->pdf->Cell(15,7,utf8_decode('Alto'),0, 0 , 'C',$Alto);
					$this->pdf->Cell(5,7,utf8_decode(''),0,'L','0');
					$this->pdf->Ln(7);
					$this->pdf->Cell(98,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
					$this->pdf->Cell(60,7,utf8_decode($row->otro_idioma),'B',0,'C','0');
					}
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(12);
					$this->pdf->Cell(195,0,'','TBL',0,'C','1');
					$this->pdf->setFont('Arial','',9);
					$this->pdf->Ln(3);
					$this->pdf->Cell(30,7,utf8_decode('EXPERIENCIA'),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_admin),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Administración'),0,'L','0');
					}
					$this->pdf->Cell(23,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_turismos),1, 0 , 'C', false );
					    $this->pdf->Cell(25,7,utf8_decode('Turismo'),0,'L','0');
					}
					$this->pdf->Cell(29,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_informatica),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Informática'),0,'L','0');
					}
					$this->pdf->Ln(12);
					$this->pdf->Cell(30,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_seguridad),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Seguridad'),0,'L','0');
					}
					$this->pdf->Cell(23,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_educacion),1, 0 , 'C', false );
					    $this->pdf->Cell(25,7,utf8_decode('Educación '),0,'L','0');
					}
					$this->pdf->Cell(29,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_sanidad),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Sanidad'),0,'L','0');
					}
					$this->pdf->Ln(12);
					$this->pdf->Cell(30,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_traduccion),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Traducción'),0,'L','0');
					}
					$this->pdf->Cell(23,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_recurso_h),1, 0 , 'C', false );
					    $this->pdf->Cell(25,7,utf8_decode('Recursos Humanos'),0,'L','0');
					}
					$this->pdf->Cell(29,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_otro),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Otros'),0,'L','0');
					}
					$this->pdf->Ln(12);
					$this->pdf->Cell(30,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_con_discapacitado),1, 0 , 'C', false );
					    $this->pdf->Cell(35,7,utf8_decode('Exp. con discapacitados'),0,'L','0');
					}
					$this->pdf->Cell(23,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->exp_conducir),1, 0 , 'C', false );
					    $this->pdf->Cell(25,7,utf8_decode('Lic. de conducir'),0,'L','0');
					}
					$this->pdf->Cell(29,7,utf8_decode(''),0,'L','0');
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(7,7,utf8_decode($row->tien_auto),1, 0 , 'C', false );
					    $this->pdf->Cell(45,7,utf8_decode('Tiene auto'),0,'L','0');
					}
					
					
					
					
					
					
					/*
					
					
					/*
					 * Se manda el pdf al navegador
					 *
					 * $this->pdf->Output(nombredelarchivo, destino);
					 *
					 * I = Muestra el pdf en el navegador
					 * D = Envia el pdf para descarga
					 *
					 */
					$this->pdf->Output("FomularioA.pdf", 'I');
						//$this->load->view('reporte_view'); 
						 
						 
					  }
		
			  }
				
		}
?>