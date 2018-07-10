<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Consulta_reporte extends CI_Controller 
	   {
			 function __construct()
 				{
                    parent::__construct();
					$this->load->helper(array('form', 'url'));
					$this->load->library('pdf');
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
						 $datos= $this->consulta_model->buscar_b($cedula);
						 
						 $this->pdf = new Pdf('L','cm','Legal');
					// Agregamos una página
					$this->pdf->AddPage();
					// Define el alias para el número de página que se imprimirá en el pie
					$this->pdf->AliasNbPages();
			 
					/* Se define el titulo, márgenes izquierdo, derecho y
					 * el color de relleno predeterminado
					 */
					$this->pdf->SetTitle("Informe de Inscripcion");
					$this->pdf->SetLeftMargin(15);
					$this->pdf->SetRightMargin(15);
					$this->pdf->SetFillColor(200,200,200);
			 
					// Se define el formato de fuente: Arial, negritas, tamaño 9
					$this->pdf->SetFont('Arial', 'B', 9);
					/*
					 * TITULOS DE COLUMNAS
					 *
					 * $this->pdf->Cell(Ancho, Alto,texto,borde,posición,alineación,relleno);
					 */
			        $this->pdf->Cell(90,7,utf8_decode('INFORMACIÓN'),'TBL',0,'R','0');
					$this->pdf->Cell(90,7,'PERSONAL','TBR',0,'L','0');
			        $this->pdf->Ln(7);
					
			 
					$this->pdf->Cell(45,7,'Nombre','TBL',0,'C','1');
					$this->pdf->Cell(45,7,'Apellido','TB',0,'C','1');
					$this->pdf->Cell(45,7,'Edad','TB',0,'C','1');
					$this->pdf->Cell(45,7,'Fecha de Nacimiento','TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(45,5,utf8_decode($row->nombre),'BL',0,'C',0);
						$this->pdf->Cell(45,5,utf8_decode($row->apellido),'B',0,'C',0);
						$this->pdf->Cell(45,5,$row->edad,'B',0,'C',0);
						$this->pdf->Cell(45,5,$row->fechadenac,'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
					
					
					$this->pdf->Cell(90,7,'Nacionalidad','TBL',0,'C','1');
					//$this->pdf->Cell(60,7,utf8_decode('Número de Pasaporte'),'TB',0,'C','1');
					$this->pdf->Cell(90,7,utf8_decode('Cédula'),'TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(90,5,utf8_decode($row->nacionalidad),'BL',0,'C',0);
					//	$this->pdf->Cell(60,5,$row->pasaporte,'B',0,'C',0);
						$this->pdf->Cell(90,5,$row->cedula,'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
					
					//$this->pdf->Cell(45,7,utf8_decode('Cédula'),'TBL',0,'C','1');
					$this->pdf->Cell(90,7,utf8_decode('Dirección'),'TBL',0,'C','1');
					$this->pdf->Cell(45,7,utf8_decode('Teléfono'),'TB',0,'C','1');
					$this->pdf->Cell(45,7,utf8_decode('Celular'),'TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						//$this->pdf->Cell(45,5,utf8_decode($row->cedula),'BL',0,'C',0);
						$this->pdf->Cell(90,5,utf8_decode($row->direccion),'BL',0,'C',0);
						$this->pdf->Cell(45,5,$row->telefono,'B',0,'C',0);
						$this->pdf->Cell(45,5,$row->celular,'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
					
					$this->pdf->Cell(90,7,utf8_decode('Correo Electrónico'),'TBL',0,'C','1');
					$this->pdf->Cell(90,7,utf8_decode('Parroquia'),'TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(90,5,utf8_decode($row->email),'BL',0,'C',0);
						$this->pdf->Cell(90,5,utf8_decode($row->parroquia),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
					
					
					
					$this->pdf->Cell(60,7,utf8_decode('Zona'),'TBL',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('Diócesis'),'TB',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('Nivel Académico'),'TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(60,5,utf8_decode($row->vicaria),'BL',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->diosesis),'B',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->nivelaca),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
					
					$this->pdf->Cell(60,7,utf8_decode('Ocupación'),'TBL',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('Lugar de Estudio o Trabajo'),'TB',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('Dirección'),'TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(60,5,utf8_decode($row->ocupacion),'BL',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->lugardetrab),'B',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->direcciontrab),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
					
					$this->pdf->Cell(60,7,utf8_decode('Mencione El Grupo en el que Participó'),'TBL',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('Ha Participado En Alguna JMJ'),'TB',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('¿Cuál? (pais y año)'),'TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(60,5,utf8_decode($row->grupos),'BL',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->participo),'B',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->paisj),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
					
					
					
					$this->pdf->Cell(60,7,utf8_decode('En caso de Emergencia LLamar A:  '),'TBL',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('Parentezco'),'TB',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('Teléfono:'),'TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(60,5,utf8_decode($row->enombre),'BL',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->parentesco),'B',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->etel),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
					
					$this->pdf->Cell(90,7,utf8_decode('¿Padece Alguna Enfermedad?'),'TBL',0,'C','1');
					$this->pdf->Cell(90,7,utf8_decode('¿Esta Bajo Tratamiento Médico?'),'TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(90,5,utf8_decode($row->enfermedad),'BL',0,'C',0);
						$this->pdf->Cell(90,5,utf8_decode($row->tratamiento),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
						
				
					$this->pdf->Cell(60,7,utf8_decode('Toma usted Medicamento:'),'TBL',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('Tipo de Sangre'),'TB',0,'C','1');
					$this->pdf->Cell(60,7,utf8_decode('Es alérgico (Mencione):'),'TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(60,5,utf8_decode($row->medicamentos),'BL',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->sangre),'B',0,'C',0);
						$this->pdf->Cell(60,5,utf8_decode($row->alergia),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
						
					
				 $this->pdf->Cell(90,7,utf8_decode('INFORMACIÓN'),'TBL',0,'R','0');
			     $this->pdf->Cell(90,7,'GENERAL','TBR',0,'L','0');
			     $this->pdf->Ln(7);	
				 $this->pdf->Cell(90,7,utf8_decode('¿Qué Actividad Pastoral'),'TBL',0,'R','1');
			     $this->pdf->Cell(90,7,'Realiza Actualmente?','TBR',0,'L','1');
			     $this->pdf->Ln(7);	
					
				foreach ($datos->result() as $row) {
					$i=1;
					
					if( $row->catequista)
					{
						
						$arreglo[$i]="Catequista";
						$i=$i+1;
					}
					
                    if( $row->animador)	
					{
					  $arreglo[$i]="Animador de Grupos";	
					  $i=$i+1;
					}						
					
                    if( $row->coro)
					{
				       $arreglo[$i]="Coro";
					   $i=$i+1;
					}	

                       if( $row->servidor)
					{
				       $arreglo[$i]="Servicio del Alta";
					   $i=$i+1;
					}	

                        if( $row->agente)
					{
				       $arreglo[$i]="Agente de Pastoral";
					   $i=$i+1;
					}					
					
                      if( $row->participante)
					{
				       $arreglo[$i]="Participante de Grupo";
					   $i=$i+1;
					}	
                     if( $row->lector)
					{
				       $arreglo[$i]="Lector";
					   $i=$i+1;
					}	
					
					 if( $row->otros)
					{
				       $arreglo[$i]="otros";
					   $i=$i+1;
					}
				}
				
					
			$cadena="";
              for ($j=1; $j<$i; $j++) 
			  {
                   
				   $cadena=$cadena.$arreglo[$j];
					if ($j < $i-1)
					{
					$cadena=$cadena.' , '	;
					}
			  }
					
				
                 $this->pdf->Cell(180,5,utf8_decode($cadena),'BL',0,'C',0);
			     $this->pdf->Cell(0,5,utf8_decode(''),'BR',0,'C',0);	
                 $this->pdf->Ln(5);				  
			
                 $this->pdf->Cell(90,7,utf8_decode('¿Tiene usted  alguna'),'TBL',0,'R','1');
			     $this->pdf->Cell(90,7,'experiencia en?','TBR',0,'L','1');
			     $this->pdf->Ln(7);	

				foreach ($datos->result() as $row) {
					$b=1;
					
					if( $row->liturgia)
					{
						
						$aray[$b]="Liturgia";
						$b=$b+1;
					}
					
					if( $row->musica)
					{
						
						$aray[$b]=utf8_decode('Música');
						$b=$b+1;
					}
					
					
					if( $row->expresiones)
					{
						
						$aray[$b]='Expresiones Folkloricas';
						$b=$b+1;
					}
					
					if( $row->animaciones)
					{
						
						$aray[$b]=utf8_decode('Animaciones Grupales');
						$b=$b+1;
					}
					
					
					if( $row->expresionescul)
					{
						
						$aray[$b]='Expresiones Culturales';
						$b=$b+1;
					}
					
					if( $row->deportes)
					{
						
						$aray[$b]=utf8_decode('Deportes');
						$b=$b+1;
					}
                 
				 
					if( $row->actividaire)
					{
						
						$aray[$b]='Actividad al aire libre';
						$b=$b+1;
					}
					
					if( $row->campamentos)
					{
						
						$aray[$b]=utf8_decode('Campamentos');
						$b=$b+1;
					}
					
					if( $row->ejerespirit )
					{
						
						$aray[$b]='Ejercicio Espirituales';
						$b=$b+1;
					}
					
					
					
					
					
					
					
					
				}
				
				$cadena1="";
					  for ($a=1; $a<$b; $a++) 
					  {
						   
						   $cadena1=$cadena1.utf8_decode($aray[$a]);
							if ($a < $b-1)
							{
							$cadena1=$cadena1.' , '	;
							}
					  }				
								 
					
					
				 $this->pdf->Cell(180,5,utf8_decode($cadena1),'BL',0,'C',0);
			     $this->pdf->Cell(0,5,utf8_decode(''),'BR',0,'C',0);	
                 $this->pdf->Ln(5);		
					
			     $this->pdf->Cell(180,7,utf8_decode('¿Qué es lo que más le llama la atención de las jornadas Juveniles?'),'TBL',0,'C','1');
			     $this->pdf->Cell(0,7,'','TBR',0,'L','1');
			     $this->pdf->Ln(7);	
				 
				 foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(180,5,utf8_decode($row->pregunta1),'BL',0,'C',0);
						$this->pdf->Cell(0,5,utf8_decode(''),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
					}
				 $this->pdf->Cell(180,7,utf8_decode('¿A parte de esta información agrega algo que consideras que deber ser conocido por el equipo organizador?'),'TBL',0,'C','1');
			     $this->pdf->Cell(0,7,'','TBR',0,'L','1');
			     $this->pdf->Ln(7);	
				 
				 foreach ($datos->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						$this->pdf->Cell(180,10,utf8_decode($row->pregunta2),'BL',0,'C',0);
						$this->pdf->Cell(0,10,utf8_decode(''),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(7);
					}
				
				$this->pdf->Cell(90,11,utf8_decode('Firma:'),'TBL',0,'L','1');
				$this->pdf->Cell(90,11,utf8_decode('Fecha:'),'TBR',0,'L','1');
				$this->pdf->Ln(11);
					
					
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
				$this->pdf->Cell(90,11,utf8_decode('Firma Parroco Responsable:'),'BL',0,'L',0);
				$this->pdf->Cell(90,11,utf8_decode('Sello:'),'BR',0,'L',0);
						
						//Se agrega un salto de linea
				$this->pdf->Ln(10);
				$this->pdf->Cell(180,7,utf8_decode('Para Uso del Equipo Organizador'),'TBL',0,'C','1');
			     $this->pdf->Cell(0,7,'','TBR',0,'L','1');
			     $this->pdf->Ln(7);
				 
			    $this->pdf->Cell(45,5,utf8_decode('Fecha de Inscripción'),'BL',0,'C',0);
				$this->pdf->Cell(45,5,utf8_decode('Pago de Cuota de Inscripción'),'B',0,'C',0);
				$this->pdf->Cell(45,5,utf8_decode('Número de Recibo'),'B',0,'C',0);
				$this->pdf->Cell(45,5,utf8_decode('Número de Inscripción'),'BR',0,'C',0);
						
						//Se agrega un salto de linea
						$this->pdf->Ln(5);
                    $this->pdf->Cell(45,7,'','TBL',0,'C','1');
					$this->pdf->Cell(45,7,'','TB',0,'C','1');
					$this->pdf->Cell(45,7,'','TB',0,'C','1');
					$this->pdf->Cell(45,7,'','TBR',0,'C','1');
					$this->pdf->Ln(7);
					
					
                 $this->pdf->Cell(90,5,utf8_decode('Revisado Por '),'BL',0,'C',0);
			     $this->pdf->Cell(90,5,utf8_decode('Obervaciones'),'BR',0,'C',0);	
                 $this->pdf->Ln(5);				  
			
                 $this->pdf->Cell(90,7,utf8_decode(''),'TBL',0,'R','1');
			     $this->pdf->Cell(90,7,'','TBR',0,'L','1');
			     $this->pdf->Ln(7);		
					
					
					
					
					
					
					
					
					
					
					/*
					 * Se manda el pdf al navegador
					 *
					 * $this->pdf->Output(nombredelarchivo, destino);
					 *
					 * I = Muestra el pdf en el navegador
					 * D = Envia el pdf para descarga
					 *
					 */
					$this->pdf->Output("FomularioB.pdf", 'I');
						//$this->load->view('reporte_view'); 
						 
						 
					  }
		
			  }
				
		}
?>