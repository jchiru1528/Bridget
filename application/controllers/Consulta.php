<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Consulta extends CI_Controller 
	   {
			 function __construct()
 				{
                    parent::__construct();
					$this->load->helper(array('form', 'url'));
					$this->load->Model('consulta_model','', TRUE);
	
				}
// funcio index --------------------------------------------------------------------------------------
			function index()
				{
					set_time_limit(720);
					
					$this->load->view('verificate_view');
					
				}
				
// funcio upload carga el archivo--------------------------------------------------------------------------------------

			function buscar()
				{
				
				  $cedula = $this->input->post('cedula');		
                  $comboparroquia = $this->input->post('comboparroquia');	
                   if ($comboparroquia==1 )
				   {
					   $consultabd= $this->consulta_model->buscar_a($cedula);
					    if ($consultabd->num_rows() == 0)
						   {
								$data['error']=1;  
								$data['mensaje']="USTED NO ESTÁ REGISTRADO"; 
								$this->load->view('verificate_view',$data); 
									 
						    }
                        else
							{
								$this->ver_data['datos']= $this->consulta_model->buscar_a($cedula);
								$this->load->view('reportea_view',$this->ver_data);
							}
				   }	
                   else	if ($comboparroquia==2 )	
                   {					   
				       $consultabd= $this->consulta_model->buscar_b($cedula);
					    if ($consultabd->num_rows() == 0)
						   {
								$data['error']=1;  
								$data['mensaje']="USTED NO ESTÁ REGISTRADO"; 
								$this->load->view('verificate_view',$data); 
									 
						    }
                        else
							{
								$this->ver_data['datos']= $this->consulta_model->buscar_b($cedula);
								$this->load->view('reporteb_view',$this->ver_data);
								
							}
				   }
				   
				   else	if ($comboparroquia==3 )	
                   {					   
				       $consultabd= $this->consulta_model->buscar_c($cedula);
					    if ($consultabd->num_rows() == 0)
						   {
								$data['error']=1;  
								$data['mensaje']="USTED NO ESTÁ REGISTRADO"; 
								$this->load->view('verificate_view',$data); 
									 
						    }
                        else
							{
								$this->ver_data['datos']= $this->consulta_model->buscar_c($cedula);
								$this->load->view('reportec_view',$this->ver_data);
								
							}
				   }
				    else	if ($comboparroquia==4 )	
                   {					   
				       $consultabd= $this->consulta_model->buscar_d($cedula);
					    if ($consultabd->num_rows() == 0)
						   {
								$data['error']=1;  
								$data['mensaje']="NO HAY DATOS DE INSCRIPCIÓN DÍAS EN LAS DIÓCESIS PARA CÓDIGO DE INSCRIPCIÓN ".$cedula;  
								$this->load->view('verificate_view',$data); 
									 
						    }
                        else
							{
								$this->ver_data['datos']= $this->consulta_model->buscar_d($cedula);
								$this->load->view('reported_view',$this->ver_data);
								
							}
				   }
				  
		
			  }
				
		}
?>