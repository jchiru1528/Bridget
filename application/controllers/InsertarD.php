<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class InsertarD extends CI_Controller 
	   {
			function __construct()
 				{
                    parent::__construct();
					$this->load->helper(array('form', 'url'));
				    //$this->load->library('form_validation');
					$this->load->Model('insertarD_model','', TRUE);
					$this->load->Model('consulta_model','', TRUE);
					//$this->load->library('email');
	
	
				}
				// funcio index -----------
			function index()
				{
					set_time_limit(720);
					
					$this->load->view('formulario4_view');
					
				}
				
                 // funcio upload carga el archivo--------------------------------------------------------------------------------------

			function insertar_dato()
			{
				
                $codigo_jmj=$this->input->post('codigo_jmj');
				$nombre_grupo=$this->input->post('nombre_grupo');
				$nacion=$this->input->post('nacion');
				$ciudad=$this->input->post('ciudad');
				$lengua_ma =$this->input->post('lengua_ma');
				$multilingue =$this->input->post('multilingue');
				$nacional_si =$this->input->post('nacional_si');
				$nacional_no =$this->input->post('nacional_no');
				$diocesano =$this->input->post('diocesano');
				$comunidad =$this->input->post('comunidad');
				$otros_a =$this->input->post('otros_a');
				$total_parti =$this->input->post('total_parti');
				$total_hombres =$this->input->post('total_hombres');
				$total_mujeres =$this->input->post('total_mujeres');
				$menor_si =$this->input->post('menor_si');
				$menor_no =$this->input->post('menor_no');
				$total_menor =$this->input->post('total_menor');
				$necesidad_si =$this->input->post('necesidad_si');
				$necesidad_no =$this->input->post('necesidad_no');
				$auditiva =$this->input->post('auditiva');
				$total_audi =$this->input->post('total_audi');
				$motora =$this->input->post('motora');
				$total_motora =$this->input->post('total_motora');
				$cognitiva =$this->input->post('cognitiva');
				$total_cogn =$this->input->post('total_cogn');
				$visual =$this->input->post('visual');
				$total_visual =$this->input->post('total_visual');
				$mental =$this->input->post('mental');
				$total_mental =$this->input->post('total_mental');
				$visceral =$this->input->post('visceral');
				$total_visceral =$this->input->post('total_visceral');
				$cronica =$this->input->post('cronica');
				$total_cronica =$this->input->post('total_cronica');
				$religioso_si =$this->input->post('religioso_si');
				$religioso_no =$this->input->post('religioso_no');
				$nombre_resp =$this->input->post('nombre_resp');
				$apellido_resp =$this->input->post('apellido_resp');
				$sexo_resp =$this->input->post('sexo_resp');
				$fecha_resp =$this->input->post('fecha_resp');
				$pasap_resp =$this->input->post('pasap_resp');
				$cedula_resp =$this->input->post('cedula_resp');
				$ndoc_resp =$this->input->post('ndoc_resp');
				$postal_resp =$this->input->post('postal_resp');
				$ciudad_resp =$this->input->post('ciudad_resp');
				$nacion_resp =$this->input->post('nacion_resp');
				$telofi_resp =$this->input->post('telofi_resp');
				$teldom_resp =$this->input->post('teldom_resp');
				$movil_resp   =$this->input->post('movil_resp');
				$fax_resp =$this->input->post('fax_resp');
				$email_resp =$this->input->post('email_resp');
				$remail_resp =$this->input->post('remail_resp');
				$idioma_resp =$this->input->post('idioma_resp');
				$notas_resp =$this->input->post('notas_resp');
				$nombre_vice =$this->input->post('nombre_vice');
				$apellido_vice =$this->input->post('apellido_vice');
				$sexo_vice =$this->input->post('sexo_vice');
				$fecha_vice =$this->input->post('fecha_vice');
				$pasap_vice =$this->input->post('pasap_vice');
				$cedula_vice =$this->input->post('cedula_vice');
				$ndoc_vice =$this->input->post('ndoc_vice');
				$postal_vice =$this->input->post('postal_vice');
				$ciudad_vice =$this->input->post('ciudad_vice');
				$nacion_vice =$this->input->post('nacion_vice');
				$telofi_vice =$this->input->post('telofi_vice');
				$teldom_vice =$this->input->post('teldom_vice');
				$movil_vice   =$this->input->post('movil_vice');
				$fax_vice =$this->input->post('fax_vice');
				$email_vice =$this->input->post('email_vice');
				$remail_vice =$this->input->post('remail_vice');
				$idioma_vice =$this->input->post('idioma_vice');
				$notas_vice =$this->input->post('notas_vice');
				$total_orient =$this->input->post('total_orient');
				$notas_orient =$this->input->post('notas_orient');
				$acepto =$this->input->post('acepto');
				$nombre_opci =$this->input->post('nombre_opci');
				$apellido_opci =$this->input->post('apellido_opci');
				$sexo_opci =$this->input->post('sexo_opci');
				
				if($sexo_opci== "Seleccione El Sexo" )
					{
					 $sexo_opci="";
				  
					}
				
				$fecha_opci =$this->input->post('fecha_opci');
				$pasap_opci =$this->input->post('pasap_opci');
				$cedula_opci =$this->input->post('cedula_opci');
				$ndoc_opci =$this->input->post('ndoc_opci');
				$ciudad_opci =$this->input->post('ciudad_opci');
				$nacion_opci =$this->input->post('nacion_opci');
				$telofi_opci =$this->input->post('telofi_opci');
				$teldom_opci =$this->input->post('teldom_opci');
				$movil_opci    =$this->input->post('movil_opci');
				$nombre_tutor =$this->input->post('nombre_tutor');
				$apellido_tutor =$this->input->post('apellido_tutor');
				$direc_tutor =$this->input->post('direc_tutor');
				$telofi_tutor =$this->input->post('telofi_tutor');
				$teldom_tutor =$this->input->post('teldom_tutor');
				$movil_tutor =$this->input->post('movil_tutor');
				$auditiva_opci =$this->input->post('auditiva_opci');
				$motora_opci =$this->input->post('motora_opci');
				$cognitiva_opci =$this->input->post('cognitiva_opci');
				$visual_opci =$this->input->post('visual_opci');
				$mental_opci =$this->input->post('mental_opci');
				$visceral_opci =$this->input->post('visceral_opci');
				$cronica_opci =$this->input->post('cronica_opci');
				$interprete_opci =$this->input->post('interprete_opci');
				$sruedas_opci =$this->input->post('sruedas_opci');
             
				$this->insertarD_model->insertar_datos( 		$codigo_jmj,
																$nombre_grupo,
																$nacion,
																$ciudad,
																$lengua_ma,
																$multilingue,
																$nacional_si,
																$nacional_no,
																$diocesano,
																$comunidad,
																$otros_a,
																$total_parti,
																$total_hombres,
																$total_mujeres,
																$menor_si,
																$menor_no,
																$total_menor,
																$necesidad_si,
																$necesidad_no,
																$auditiva,
																$total_audi,
																$motora,
																$total_motora,
																$cognitiva,
																$total_cogn,
																$visual,
																$total_visual,
																$mental,
																$total_mental,
																$visceral,
																$total_visceral,
																$cronica,
																$total_cronica,
																$religioso_si,
																$religioso_no,
																$nombre_resp,
																$apellido_resp,
																$sexo_resp,
																$fecha_resp,
																$pasap_resp,
																$cedula_resp,
																$ndoc_resp,
																$postal_resp,
																$ciudad_resp,
																$nacion_resp,
																$telofi_resp,
																$teldom_resp,
																$movil_resp,
																$fax_resp,
																$email_resp,
																$remail_resp,
																$idioma_resp,
																$notas_resp,
																$nombre_vice,
																$apellido_vice,
																$sexo_vice,
																$fecha_vice,
																$pasap_vice,
																$cedula_vice,
																$ndoc_vice,
																$postal_vice,
																$ciudad_vice,
																$nacion_vice,
																$telofi_vice,
																$teldom_vice,
																$movil_vice,
																$fax_vice,
																$email_vice,
																$remail_vice,
																$idioma_vice,
																$notas_vice,
																$total_orient,
																$notas_orient,
																$acepto,
																$nombre_opci,
																$apellido_opci,
																$sexo_opci,
																$fecha_opci,
																$pasap_opci,
																$cedula_opci,
																$ndoc_opci,
																$ciudad_opci,
																$nacion_opci,
																$telofi_opci,
																$teldom_opci,
																$movil_opci,
																$nombre_tutor,
																$apellido_tutor,
																$direc_tutor,
																$telofi_tutor,
																$teldom_tutor,
																$movil_tutor,
																$auditiva_opci,
																$motora_opci,
																$cognitiva_opci,
																$visual_opci,
																$mental_opci,
																$visceral_opci,
																$cronica_opci,
																$interprete_opci,
																$sruedas_opci);
				    
				//$consultabd= $this->consulta_model->buscar_c($nombre);
				$data['error']=1;  
				$data['mensaje']="Sus datos han sido grabados Correctamente Su Id es ".$codigo_jmj ;
				$this->load->view('formulario4_view',$data);
				
				
		
			}
			function insertar_datoi()
			{
				
                $codigo_jmj=$this->input->post('codigo_jmj');
				$nombre_grupo=$this->input->post('nombre_grupo');
				$nacion=$this->input->post('nacion');
				$ciudad=$this->input->post('ciudad');
				$lengua_ma =$this->input->post('lengua_ma');
				$multilingue =$this->input->post('multilingue');
				$nacional_si =$this->input->post('nacional_si');
				$nacional_no =$this->input->post('nacional_no');
				$diocesano =$this->input->post('diocesano');
				$comunidad =$this->input->post('comunidad');
				$otros_a =$this->input->post('otros_a');
				$total_parti =$this->input->post('total_parti');
				$total_hombres =$this->input->post('total_hombres');
				$total_mujeres =$this->input->post('total_mujeres');
				$menor_si =$this->input->post('menor_si');
				$menor_no =$this->input->post('menor_no');
				$total_menor =$this->input->post('total_menor');
				$necesidad_si =$this->input->post('necesidad_si');
				$necesidad_no =$this->input->post('necesidad_no');
				$auditiva =$this->input->post('auditiva');
				$total_audi =$this->input->post('total_audi');
				$motora =$this->input->post('motora');
				$total_motora =$this->input->post('total_motora');
				$cognitiva =$this->input->post('cognitiva');
				$total_cogn =$this->input->post('total_cogn');
				$visual =$this->input->post('visual');
				$total_visual =$this->input->post('total_visual');
				$mental =$this->input->post('mental');
				$total_mental =$this->input->post('total_mental');
				$visceral =$this->input->post('visceral');
				$total_visceral =$this->input->post('total_visceral');
				$cronica =$this->input->post('cronica');
				$total_cronica =$this->input->post('total_cronica');
				$religioso_si =$this->input->post('religioso_si');
				$religioso_no =$this->input->post('religioso_no');
				$nombre_resp =$this->input->post('nombre_resp');
				$apellido_resp =$this->input->post('apellido_resp');
				$sexo_resp =$this->input->post('sexo_resp');
				$fecha_resp =$this->input->post('fecha_resp');
				$pasap_resp =$this->input->post('pasap_resp');
				$cedula_resp =$this->input->post('cedula_resp');
				$ndoc_resp =$this->input->post('ndoc_resp');
				$postal_resp =$this->input->post('postal_resp');
				$ciudad_resp =$this->input->post('ciudad_resp');
				$nacion_resp =$this->input->post('nacion_resp');
				$telofi_resp =$this->input->post('telofi_resp');
				$teldom_resp =$this->input->post('teldom_resp');
				$movil_resp   =$this->input->post('movil_resp');
				$fax_resp =$this->input->post('fax_resp');
				$email_resp =$this->input->post('email_resp');
				$remail_resp =$this->input->post('remail_resp');
				$idioma_resp =$this->input->post('idioma_resp');
				$notas_resp =$this->input->post('notas_resp');
				$nombre_vice =$this->input->post('nombre_vice');
				$apellido_vice =$this->input->post('apellido_vice');
				$sexo_vice =$this->input->post('sexo_vice');
				$fecha_vice =$this->input->post('fecha_vice');
				$pasap_vice =$this->input->post('pasap_vice');
				$cedula_vice =$this->input->post('cedula_vice');
				$ndoc_vice =$this->input->post('ndoc_vice');
				$postal_vice =$this->input->post('postal_vice');
				$ciudad_vice =$this->input->post('ciudad_vice');
				$nacion_vice =$this->input->post('nacion_vice');
				$telofi_vice =$this->input->post('telofi_vice');
				$teldom_vice =$this->input->post('teldom_vice');
				$movil_vice   =$this->input->post('movil_vice');
				$fax_vice =$this->input->post('fax_vice');
				$email_vice =$this->input->post('email_vice');
				$remail_vice =$this->input->post('remail_vice');
				$idioma_vice =$this->input->post('idioma_vice');
				$notas_vice =$this->input->post('notas_vice');
				$total_orient =$this->input->post('total_orient');
				$notas_orient =$this->input->post('notas_orient');
				$acepto =$this->input->post('acepto');
				$nombre_opci =$this->input->post('nombre_opci');
				$apellido_opci =$this->input->post('apellido_opci');
				$sexo_opci =$this->input->post('sexo_opci');
				
				if($sexo_opci== "Seleccione El Sexo" )
					{
					 $sexo_opci="";
				  
					}
				
				$fecha_opci =$this->input->post('fecha_opci');
				$pasap_opci =$this->input->post('pasap_opci');
				$cedula_opci =$this->input->post('cedula_opci');
				$ndoc_opci =$this->input->post('ndoc_opci');
				$ciudad_opci =$this->input->post('ciudad_opci');
				$nacion_opci =$this->input->post('nacion_opci');
				$telofi_opci =$this->input->post('telofi_opci');
				$teldom_opci =$this->input->post('teldom_opci');
				$movil_opci    =$this->input->post('movil_opci');
				$nombre_tutor =$this->input->post('nombre_tutor');
				$apellido_tutor =$this->input->post('apellido_tutor');
				$direc_tutor =$this->input->post('direc_tutor');
				$telofi_tutor =$this->input->post('telofi_tutor');
				$teldom_tutor =$this->input->post('teldom_tutor');
				$movil_tutor =$this->input->post('movil_tutor');
				$auditiva_opci =$this->input->post('auditiva_opci');
				$motora_opci =$this->input->post('motora_opci');
				$cognitiva_opci =$this->input->post('cognitiva_opci');
				$visual_opci =$this->input->post('visual_opci');
				$mental_opci =$this->input->post('mental_opci');
				$visceral_opci =$this->input->post('visceral_opci');
				$cronica_opci =$this->input->post('cronica_opci');
				$interprete_opci =$this->input->post('interprete_opci');
				$sruedas_opci =$this->input->post('sruedas_opci');
             
				$this->insertarD_model->insertar_datos( 		$codigo_jmj,
																$nombre_grupo,
																$nacion,
																$ciudad,
																$lengua_ma,
																$multilingue,
																$nacional_si,
																$nacional_no,
																$diocesano,
																$comunidad,
																$otros_a,
																$total_parti,
																$total_hombres,
																$total_mujeres,
																$menor_si,
																$menor_no,
																$total_menor,
																$necesidad_si,
																$necesidad_no,
																$auditiva,
																$total_audi,
																$motora,
																$total_motora,
																$cognitiva,
																$total_cogn,
																$visual,
																$total_visual,
																$mental,
																$total_mental,
																$visceral,
																$total_visceral,
																$cronica,
																$total_cronica,
																$religioso_si,
																$religioso_no,
																$nombre_resp,
																$apellido_resp,
																$sexo_resp,
																$fecha_resp,
																$pasap_resp,
																$cedula_resp,
																$ndoc_resp,
																$postal_resp,
																$ciudad_resp,
																$nacion_resp,
																$telofi_resp,
																$teldom_resp,
																$movil_resp,
																$fax_resp,
																$email_resp,
																$remail_resp,
																$idioma_resp,
																$notas_resp,
																$nombre_vice,
																$apellido_vice,
																$sexo_vice,
																$fecha_vice,
																$pasap_vice,
																$cedula_vice,
																$ndoc_vice,
																$postal_vice,
																$ciudad_vice,
																$nacion_vice,
																$telofi_vice,
																$teldom_vice,
																$movil_vice,
																$fax_vice,
																$email_vice,
																$remail_vice,
																$idioma_vice,
																$notas_vice,
																$total_orient,
																$notas_orient,
																$acepto,
																$nombre_opci,
																$apellido_opci,
																$sexo_opci,
																$fecha_opci,
																$pasap_opci,
																$cedula_opci,
																$ndoc_opci,
																$ciudad_opci,
																$nacion_opci,
																$telofi_opci,
																$teldom_opci,
																$movil_opci,
																$nombre_tutor,
																$apellido_tutor,
																$direc_tutor,
																$telofi_tutor,
																$teldom_tutor,
																$movil_tutor,
																$auditiva_opci,
																$motora_opci,
																$cognitiva_opci,
																$visual_opci,
																$mental_opci,
																$visceral_opci,
																$cronica_opci,
																$interprete_opci,
																$sruedas_opci);
				    
				//$consultabd= $this->consulta_model->buscar_c($nombre);
				$data['error']=1;  
				$data['mensaje']="Your data has been recorded correctly. Your Id is ".$codigo_jmj ;
				$this->load->view('formulario4_in_view',$data);
				
				
		
			}

				
				
				
		}
?>