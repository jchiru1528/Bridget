<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class InsertarB extends CI_Controller 
	   {
			 function __construct()
 				{
                    parent::__construct();
					$this->load->helper(array('form', 'url'));
				    //$this->load->library('form_validation');
					$this->load->Model('insertarB_model','', TRUE);
					$this->load->Model('consulta_model','', TRUE);
					//$this->load->library('email');
	
	
				}
// funcio index --------------------------------------------------------------------------------------
			function index()
				{
					set_time_limit(720);
					
					$this->load->view('formulario2_view');
					
				}
				
// funcio upload carga el archivo--------------------------------------------------------------------------------------

			function insertar_dato()
				{
				
				  $nombre = $this->input->post('nombre');
				  $apellido = $this->input->post('apellido');
				  $edad = $this->input->post('edad');
				  $fehca_naci = $this->input->post('fehca_naci');
				  $nacionalidad = $this->input->post('nacionalidad');
				  $num_pasap = $this->input->post('num_pasap');
				  $fecha_expasa = $this->input->post('fecha_expasa');
				  $cedula = $this->input->post('cedula');
				  $direc = $this->input->post('direc');
				  $telefo = $this->input->post('telefo');
				  $Cel = $this->input->post('Cel');
				  $email = $this->input->post('email');
				  $parro = $this->input->post('parro');
				  
				 if($parro== "Seleccione la Parroquia" )
					{
					 $parro="";
				  
					}
				  $vicaria = $this->input->post('vicaria');
				  $Diocesis = $this->input->post('Diocesis');
				  //echo $telefono1;
				  $nivel_acade = $this->input->post('nivel_acade');
				  $ocupacion = $this->input->post('ocupacion');
				  $ltrabajo  = $this->input->post('ltrabajo');
				  $direc_estu = $this->input->post('direc_estu');
				  $participo = $this->input->post('participo');
				  $grupo = $this->input->post('grupo');
				  $pais_particio = $this->input->post('pais_particio');
				  $emergencia = $this->input->post('emergencia');
				  $parentesco = $this->input->post('parentesco');
				  $telefo_emerge = $this->input->post('telefo_emerge');
				  $pa_enfermedad = $this->input->post('pa_enfermedad');
				  $tratamiento= $this->input->post('tratamiento');
				  $medica = $this->input->post('medica');
				  $combosangre = $this->input->post('combosangre');
				  $alergico = $this->input->post('alergico');
				  // Chech 
				  $catequista= $this->input->post('catequista');
				  $animador = $this->input->post('animador');
				  $coordinador = $this->input->post('$coordinador');
				  $coro= $this->input->post('coro');
				  $servicio = $this->input->post('servicio');
				  $agente = $this->input->post('agente');
				  $participante= $this->input->post('participante');
				  $lector= $this->input->post('lector');
				  $otrochec = $this->input->post('otrochec');
				  //chech
				  $liturgia= $this->input->post('liturgia');
				  $musica = $this->input->post('musica');
				  $floklore = $this->input->post('floklore');
				  $animaciones= $this->input->post('animaciones');
				  $exp_grupal= $this->input->post('exp_grupal');
				  $exp_cultu = $this->input->post('exp_cultu');
				  $deportes= $this->input->post('deportes');
				  $airelibre = $this->input->post('airelibre');
				  $campamentos = $this->input->post('campamentos');
				  $ejercicio_espiri= $this->input->post('ejercicio_espiri');
				  $volun_social = $this->input->post('volun_social');
				  $act_espi= $this->input->post('act_espi');
				  $otras= $this->input->post('otras');
				  
				  $message1= $this->input->post('message1');
				  $message2= $this->input->post('message2');
			
				  
				  $consultabd= $this->consulta_model->buscar_b($cedula);
				   if ($consultabd->num_rows() == 1)
					  
					  {
						$data['error']=1;  
					    $data['mensaje']="Ya esta registrado "; 
						$this->load->view('formulario2_view',$data); 
  
					  }
		 
				  else
				  {
				 $this->insertarB_model->insertar_datos(  $nombre,$apellido ,$edad, $fehca_naci,$nacionalidad,
														  $num_pasap ,$fecha_expasa, $cedula, $direc,
														  $telefo , $Cel,$email,$parro,
														  $vicaria ,$Diocesis ,$nivel_acade ,$ocupacion ,
														  $ltrabajo  ,$direc_estu,$participo,$grupo,
														  $pais_particio ,$emergencia ,$parentesco ,$telefo_emerge ,
														  $pa_enfermedad ,$tratamiento,$medica ,$combosangre ,
														  $alergico ,$catequista,$animador ,$coordinador ,
														  $coro,$servicio,$agente , $participante,
														  $lector,$otrochec,$liturgia,$musica,
														  $floklore,$animaciones,$exp_grupal,$exp_cultu ,
														  $deportes, $airelibre ,$campamentos,$ejercicio_espiri,
														  $volun_social,$act_espi,$otras,$message1,$message2	
													   );
				    $data['error']=1;  
				    $data['mensaje']="Sus datos han sido grabados Correctamente Su Id Para Verificar es ".$cedula; 
					$this->load->view('formulario2_view',$data);
				
				  }
		
				}
				
				function correo()
				{
						$config['protocol']    = 'smtp';
						$config['smtp_host']    = 'ssl://smtp.gmail.com';
						$config['smtp_port']    = '465';
						$config['smtp_timeout'] = '7';
						$config['smtp_user']    = 'chirujavier12@gmail.com';
						$config['smtp_pass']    = 'ingj@vier';
						$config['charset']    = 'utf-8';
						$config['newline']    = "\r\n";
						$config['mailtype'] = 'text'; // or html
						$config['validation'] = TRUE; // bool whether to validate email or not      

						$this->email->initialize($config);


						$this->email->from('chirujavier12@gmail.com', 'myname');
						$this->email->to('target@gmail.com'); 

						$this->email->subject('Email Test');
						$this->email->message('Testing the email class.');  

						$this->email->send();
					
					
					
					
				}
				
				
				
				
		}
?>