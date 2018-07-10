<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Reporte extends CI_Controller 
	   {
			 function __construct()
 				{
                    parent::__construct();
					$this->load->library('Excel');
					$this->load->helper(array('form', 'url'));
					$this->load->Model('consulta_model','', TRUE);
	
				}
// funcio index --------------------------------------------------------------------------------------
			function index()
				{
					set_time_limit(720);
					
					$this->load->view('reportes_view');
					
				}
				
// funcio upload carga el archivo--------------------------------------------------------------------------------------

			function buscar()
				{
			
                $comboparroquia = $this->input->post('comboparroquia');	
					   if ($comboparroquia==1 )
					   {
						  $this->formulary_voluntario();
						  
					   }	
					   else	if ($comboparroquia==2 )	
					   {	
				   
						   $this->formulary_peregrino();
						
					   }
					   
					   else	if ($comboparroquia==3 )	
					   {					   
						    $this->formulary_festival();
							
							
					   }
					   
					    else if ($comboparroquia==4 )	
					   {					   
						   $this->formulary_dias();
							
							
					   }
					
						
				 
		
			  }
			  
			  function formulary_voluntario() 	
				{
					$consultabd=$this->consulta_model->buscar_a();
					
					$objPHPExcel= new Excel();
					$objPHPExcel->getProperties()->setTitle("export")->setDescription("none");
					$objPHPExcel->setActiveSheetIndex(0);
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,1,'NOMBRE');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,1,'APELLIDO');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,1,'FECHA DE NAC.');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,1,'CEDULA');					
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4,1,'TELEFONO');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5,1,'CELULAR');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,1,'PARROQUIA');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7,1,'EMAIL');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8,1,'TIPO DOC.');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9,1,'N. DOC');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,1,'FECHA DE INSCRI.');
					$fila=2;
					
					foreach ($consultabd->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 0 ,$fila ,$row->nombre);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 1 ,$fila ,$row->apellido);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 2 ,$fila ,$row-> fehca_naci);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 3 ,$fila ,$row->cedula);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 4 ,$fila ,$row->telefono);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 5 ,$fila ,$row->celular);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 6 ,$fila ,$row->parro);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 7 ,$fila ,$row->email);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 8 ,$fila ,$row->tipo_doc);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 9 ,$fila ,$row->numero_doc);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 10,$fila ,$row->fecharegis );
						
						$fila=$fila+1;
              
					}
					
					$objPHPExcel->setActiveSheetIndex(0);
					// Redirect output to a client’s web browser (Excel2007)
					/*header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
					header('Content-Disposition: attachment;filename="reporteVoluntario.xlsx"');
					header('Cache-Control: max-age=0');
					$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
					$objWriter->save('php://output');*/
					$xlsName = 'ReporteVoluntario.xls';
					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="'.$xlsName.'"');
					header('Cache-Control: max-age=0');	
					$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
					$objWriter->save('php://output');
					
				
				
					
				}
			  
		 
				function formulary_peregrino() 	
				{
					$consultabd=$this->consulta_model->buscar_b();
					
					$objPHPExcel= new Excel();
					$objPHPExcel->getProperties()->setTitle("export")->setDescription("none");
					$objPHPExcel->setActiveSheetIndex(0);
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,1,'NOMBRE');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,1,'APELLIDO');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,1,'EDAD');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,1,'FECHA DE NAC.');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4,1,'NACIONALIDAD');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5,1,'CEDULA');					
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,1,'TELEFONO');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7,1,'CELULAR');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8,1,'PARROQUIA');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9,1,'EMERGENCIA LLAMAR A');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,1,'PARENTESCO');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11,1,'TEL. EMERGENCIA');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12,1,'PADECE ENFERMEDAD');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,1,'FECHA DE INSCRI.');
					$fila=2;
					
					foreach ($consultabd->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 0 ,$fila ,$row->nombre);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 1 ,$fila ,$row->apellido);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 2 ,$fila ,$row->edad);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 3 ,$fila ,$row->fechadenac);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 4 ,$fila ,$row->nacionalidad);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 5 ,$fila ,$row->cedula);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 6 ,$fila ,$row->telefono);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 7 ,$fila ,$row->celular);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 8 ,$fila ,$row->parroquia);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 9 ,$fila ,$row->enombre);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 10,$fila ,$row->parentesco );
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 11,$fila ,$row->etel);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 12,$fila ,$row->enfermedad);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 13,$fila ,$row->fecharegis);
						
						$fila=$fila+1;
              
					}
					$xlsName = 'ReportePeregrinos.xls';
					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="'.$xlsName.'"');
					header('Cache-Control: max-age=0');	
					$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
					$objWriter->save('php://output');
			
				
					
				}	

			function formulary_festival() 	
				{
					$consultabd=$this->consulta_model->buscar_c();
					
					$objPHPExcel= new Excel();
					$objPHPExcel->getProperties()->setTitle("export")->setDescription("none");
					$objPHPExcel->setActiveSheetIndex(0);
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,1,'NOMBRE DEL GRUPO');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,1,'PERSONA DE CONTACTO ');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,1,'TOTAL DE MIEMBROS ');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,1,'DIRECCION');					
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4,1,'TELEFONO 1');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5,1,'TELEFONO 1');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,1,'PARROQUIA');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7,1,'OTRA PARROQUIA');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8,1,'EMAIL');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9,1,'FECHA DE INSCRI.');
					$fila=2;
					
					foreach ($consultabd->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 0 ,$fila ,$row->nombre);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 1 ,$fila ,$row->contacto);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 2 ,$fila ,$row->total);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 3 ,$fila ,$row->domicilio);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 4 ,$fila ,$row->telefono1);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 5 ,$fila ,$row->telefono2);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 6 ,$fila ,$row->parroquia);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 7 ,$fila ,$row->otraparro);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 8 ,$fila ,$row->email);
						 $objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 9,$fila ,$row->fecharegis);
						
						$fila=$fila+1;
              
					}
					
					$objPHPExcel->setActiveSheetIndex(0);
					// Redirect output to a client’s web browser (Excel2007)
					/*header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
					header('Content-Disposition: attachment;filename="reporteFestival.xlsx"');
					header('Cache-Control: max-age=0');
					$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
					$objWriter->save('php://output');*/
					$xlsName = 'ReporteFestival.xls';
					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="'.$xlsName.'"');
					header('Cache-Control: max-age=0');	
					$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
					$objWriter->save('php://output');
			
				
				
					
				}	

                
                
				function formulary_dias() 	
				{
					        
							
				   $consultabd=$this->consulta_model->buscar_d();
					
					$objPHPExcel= new Excel();
					$objPHPExcel->getProperties()->setTitle("export")->setDescription("none");
					$objPHPExcel->setActiveSheetIndex(0);
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(0,1,'REGISTRO');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(1,1,'CODIGO JMJ');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(2,1,'PAIS');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(3,1,'COMUNIDAD');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(4,1,'NOMBRE RESPONSABLE');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(5,1,'APELLIDO RESPONSABLE');					
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(6,1,'NOMBRE VICERESPONSABLE');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(7,1,'APELLIDO VICERESPONSABLE');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(8,1,'NOMBRE GRUPO');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(9,1,'TOTAL DE PARTICPANTES');
					$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(10,1,'FECHA DE INSCRIPCION');
					//$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(11,1,'TEL. EMERGENCIA');
					//$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(12,1,'PADECE ENFERMEDAD');
					//$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow(13,1,'FECHA DE INSCRI.');
					$fila=2;
					$registro=1;
					
					foreach ($consultabd->result() as $row) {
						// se imprime el numero actual y despues se incrementa el valor de $x en uno
						
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 0 ,$fila ,$registro);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 1 ,$fila ,$row->codigo_jmj);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 2 ,$fila ,$row->nacion);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 3 ,$fila ,$row->comunidad);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 4 ,$fila ,$row->nombre_resp);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 5 ,$fila ,$row->apellido_resp);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 6 ,$fila ,$row->nombre_vice);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 7 ,$fila ,$row->apellido_vice);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 8 ,$fila ,$row->nombre_grupo);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 9 ,$fila ,$row->total_parti);
						$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 10,$fila ,$row->fecha_creacion);
						 //$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 11,$fila ,$row->etel);
						 //$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 12,$fila ,$row->enfermedad);
						 //$objPHPExcel->getActiveSheet()->setCellValueByColumnAndRow( 13,$fila ,$row->fecharegis);
						
						$fila=$fila+1;
						$registro=$registro+1;
              
					}
					$xlsName = 'ReporteDias.xls';
					header('Content-Type: application/vnd.ms-excel');
					header('Content-Disposition: attachment;filename="'.$xlsName.'"');
					header('Cache-Control: max-age=0');	
					$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5');
					$objWriter->save('php://output');
				
							
							
							
							
							
							
							
							
							
				
					
				}





				
				
	}
?>