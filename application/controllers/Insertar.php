<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Insertar extends CI_Controller 
	   {
			 function __construct()
 				{
                    parent::__construct();
					$this->load->helper(array('form', 'url'));
					$this->load->library('form_validation');
					$this->load->Model('insertar_info','', TRUE);
					$this->load->Model('consulta_model','', TRUE);
					//$this->load->library('email');
	
	
				}
// funcio index --------------------------------------------------------------------------------------
			function index()
				{
					set_time_limit(720);
					
					$this->load->view('registrate_view');
					
				}
				
// funcio upload carga el archivo--------------------------------------------------------------------------------------

			function insertar_dato()
				{
				// Datos Personales 
				  $nombre = $this->input->post('nombre');
				  $parroquia= $this->input->post('parroquia');
				  $apellido = $this->input->post('apellido');
			      $cedula= $this->input->post('cedula');
				  $combosexo = $this->input->post('combosexo');
				  $fecha = $this->input->post('fecha');
				  $domicilio= $this->input->post('domicilio');
				  $telefono = $this->input->post('telefono');
				  $celular= $this->input->post('celular');
				  $email = $this->input->post('email');
				  $tipodoc = $this->input->post('tipodoc');
				  $numdoc= $this->input->post('numdoc');
				  $combosangre = $this->input->post('combosangre');
		
				    //if(trim($nombre)== false )
					if($combosexo== "Seleccione El Sexo" )
					{
					 $combosexo="";
				  
					}
					if($parroquia== "Seleccione la Parroquia" )
					{
					 $parroquia="";
				  
					}
					if($combosangre== "Seleccione Su Tipo de Sangre" )
					{
					 $combosangre="";
				  
					}
				 
                    //Area 		

					  $preparacion = $this->input->post('preparacion');
					  $acogida= $this->input->post('acogida');
					  $voluntarios = $this->input->post('voluntarios');
					  $logistica = $this->input->post('logistica');
					  $catequesis =$this->input->post('catequesis');
					  $festival = $this->input->post('festival');
					  $area= $this->input->post('area');
					  $si = $this->input->post('si');
					  $no= $this->input->post('no');
					
                    // Horarios disponibles para los peregrinos    
					  $dispo1 = $this->input->post('dispo1');
					  $dispo2= $this->input->post('dispo2');
					  $dispo3 = $this->input->post('dispo3');
					  $horarioM = $this->input->post('horarioM');
					  $horarioT =$this->input->post('horarioT');
					  $horarioI = $this->input->post('horarioI');
					  $volun1= $this->input->post('volun1');
					  $volun2 = $this->input->post('volun2');
					  $volun3= $this->input->post('volun3');	
					  
					  
					// Grados de Estudios   
					  $estudio1 = $this->input->post('estudio1');
					  $estudio2 = $this->input->post('estudio2');
					  $estudio3 = $this->input->post('estudio3');
					  $estudio4 = $this->input->post('estudio4');
					  $estudio5 = $this->input->post('estudio5');
					  $otroest  = $this->input->post('otroest');
					
                    // Horarios disponibles para los peregrinos    
					  $idioma1 = $this->input->post('idioma1');
					  $comboIngles  = $this->input->post('comboIngles');
					  $idioma2 = $this->input->post('idioma2');
					  $comboFrances = $this->input->post('comboFrances');
					  $idioma3 = $this->input->post('idioma3');
					  $comboAleman  = $this->input->post('comboAleman');
					  $idioma4 = $this->input->post('idioma4');
					  $comboItaliano= $this->input->post('comboItaliano');
					  $idioma5 = $this->input->post('idioma5');
					  $comboPortu = $this->input->post('comboPortu');
					  $idioma6 = $this->input->post('idioma6');
					  $comboOtro    = $this->input->post('comboOtro');
					  $idioma7 = $this->input->post('idioma7');

						if($comboIngles== "Seleccione el Nivel" )
						{
						 $comboIngles="";
					  
						}
						if($comboFrances== "Seleccione el Nivel" )
						{
						 $comboFrances="";
					  
						}
						if($comboAleman== "Seleccione el Nivel" )
						{
						 $comboAleman="";
					  
						}
						if($comboItaliano== "Seleccione el Nivel" )
						{
						 $comboItaliano="";
					  
						}
						if($comboPortu== "Seleccione el Nivel" )
						{
						 $comboPortu="";
					  
						}
						if($comboOtro== "Seleccione el Nivel" )
						{
						 $comboOtro ="";
						}
						
					// Experiencia  
					  $administracion = $this->input->post('administracion');
					  $turismo        = $this->input->post('turismo');
					  $informatica    = $this->input->post('informatica');
					  $seguridad      = $this->input->post('seguridad');
					  $educacion      = $this->input->post('educacion');
					  $sanidad        = $this->input->post('sanidad');
					  $traduccion     = $this->input->post('traduccion');
					  $recursohumano  = $this->input->post('recursohumano');
					  $otro           = $this->input->post('otro');
					  $conducir       = $this->input->post('conducir');
					  $auto           = $this->input->post('auto');
					  $discapa        = $this->input->post('discapa');
					  
					  $consultabd= $this->consulta_model->buscar_a($cedula);
				      if ($consultabd->num_rows() == 1)
					     {
							$data['error']=1;  
							$data['mensaje']="Ya esta registrado "; 
							$this->load->view('registrate_view',$data); 
					     }
				      else
				      {  
				        $this->insertar_info->insertar_datos(  $parroquia,$nombre ,$apellido ,$cedula,$combosexo,$fecha,
																	$domicilio,$telefono,$celular, $email  ,$tipodoc,$numdoc,
                                                                    $combosangre,$preparacion ,$acogida,$voluntarios , $logistica ,$catequesis,
																	$festival ,$area,$si ,$no, $dispo1 ,$dispo2,
																	$dispo3,$horarioM,$horarioT , $horarioI, $volun1,$volun2 ,
																	$volun3, $estudio1 ,$estudio2 ,$estudio3 ,$estudio4 ,$estudio5, 
                                                                    $otroest , $idioma1 ,$comboIngles, $idioma2 ,  $comboFrances ,$idioma3 , $comboAleman ,
                                                                    $idioma4 ,$comboItaliano,$idioma5 ,$comboPortu,$idioma6 ,$comboOtro , $idioma7 , $administracion , $turismo,
																	$informatica  ,$seguridad, $educacion, $sanidad ,$traduccion,$recursohumano ,
																	$otro,$conducir , $auto  ,$discapa    
					                                             );
						$data['error']=1;  
						$data['mensaje']="Sus datos han sido grabados Correctamente Su Id Para Verificar es ".$cedula; 	            
						$this->load->view('registrate_view',$data);
                      }
				}
				
				
				
				function insertar_datoi()
				{
				// Datos Personales 
				  $nombre = $this->input->post('nombre');
				  $parroquia= $this->input->post('parroquia');
				  $apellido = $this->input->post('apellido');
			      $cedula= $this->input->post('cedula');
				  $combosexo = $this->input->post('combosexo');
				  $fecha = $this->input->post('fecha');
				  $domicilio= $this->input->post('domicilio');
				  $telefono = $this->input->post('telefono');
				  $celular= $this->input->post('celular');
				  $email = $this->input->post('email');
				  $tipodoc = $this->input->post('tipodoc');
				  $numdoc= $this->input->post('numdoc');
				  $combosangre = $this->input->post('combosangre');
		
				    //if(trim($nombre)== false )
					if($combosexo== "Gender" )
					{
					 $combosexo="";
				  
					}
					if($parroquia== "Seleccione la Parroquia" )
					{
					 $parroquia="";
				  
					}
					if($combosangre== "Select Your Type of Bloodss" )
					{
					 $combosangre="";
				  
					}
				 
                    //Area 		

					  $preparacion = $this->input->post('preparacion');
					  $acogida= $this->input->post('acogida');
					  $voluntarios = $this->input->post('voluntarios');
					  $logistica = $this->input->post('logistica');
					  $catequesis =$this->input->post('catequesis');
					  $festival = $this->input->post('festival');
					  $area= $this->input->post('area');
					  $si = $this->input->post('si');
					  $no= $this->input->post('no');
					
                    // Horarios disponibles para los peregrinos    
					  $dispo1 = $this->input->post('dispo1');
					  $dispo2= $this->input->post('dispo2');
					  $dispo3 = $this->input->post('dispo3');
					  $horarioM = $this->input->post('horarioM');
					  $horarioT =$this->input->post('horarioT');
					  $horarioI = $this->input->post('horarioI');
					  $volun1= $this->input->post('volun1');
					  $volun2 = $this->input->post('volun2');
					  $volun3= $this->input->post('volun3');	
					  
					  
					// Grados de Estudios   
					  $estudio1 = $this->input->post('estudio1');
					  $estudio2 = $this->input->post('estudio2');
					  $estudio3 = $this->input->post('estudio3');
					  $estudio4 = $this->input->post('estudio4');
					  $estudio5 = $this->input->post('estudio5');
					  $otroest  = $this->input->post('otroest');
					
                    // Horarios disponibles para los peregrinos    
					  $idioma1 = $this->input->post('idioma1');
					  $comboIngles  = $this->input->post('comboIngles');
					  $idioma2 = $this->input->post('idioma2');
					  $comboFrances = $this->input->post('comboFrances');
					  $idioma3 = $this->input->post('idioma3');
					  $comboAleman  = $this->input->post('comboAleman');
					  $idioma4 = $this->input->post('idioma4');
					  $comboItaliano= $this->input->post('comboItaliano');
					  $idioma5 = $this->input->post('idioma5');
					  $comboPortu = $this->input->post('comboPortu');
					  $idioma6 = $this->input->post('idioma6');
					  $comboOtro    = $this->input->post('comboOtro');
					  $idioma7 = $this->input->post('idioma7');

						if($comboIngles== "Select the level" )
						{
						 $comboIngles="";
					  
						}
						if($comboFrances== "Select the level" )
						{
						 $comboFrances="";
					  
						}
						if($comboAleman== "Select the level" )
						{
						 $comboAleman="";
					  
						}
						if($comboItaliano== "Select the level" )
						{
						 $comboItaliano="";
					  
						}
						if($comboPortu== "Select the level" )
						{
						 $comboPortu="";
					  
						}
						if($comboOtro== "Seleccione el Nivel" )
						{
						 $comboOtro ="";
						}
						
					// Experiencia  
					  $administracion = $this->input->post('administracion');
					  $turismo        = $this->input->post('turismo');
					  $informatica    = $this->input->post('informatica');
					  $seguridad      = $this->input->post('seguridad');
					  $educacion      = $this->input->post('educacion');
					  $sanidad        = $this->input->post('sanidad');
					  $traduccion     = $this->input->post('traduccion');
					  $recursohumano  = $this->input->post('recursohumano');
					  $otro           = $this->input->post('otro');
					  $conducir       = $this->input->post('conducir');
					  $auto           = $this->input->post('auto');
					  $discapa        = $this->input->post('discapa');
					  
					  $consultabd= $this->consulta_model->buscar_a($cedula);
				      if ($consultabd->num_rows() == 1)
					     {
							$data['error']=1;  
							$data['mensaje']="Ya esta registrado "; 
							$this->load->view('registrate_in_view',$data); 
					     }
				      else
				      {  
				        $this->insertar_info->insertar_datos(  $parroquia,$nombre ,$apellido ,$cedula,$combosexo,$fecha,
																	$domicilio,$telefono,$celular, $email  ,$tipodoc,$numdoc,
                                                                    $combosangre,$preparacion ,$acogida,$voluntarios , $logistica ,$catequesis,
																	$festival ,$area,$si ,$no, $dispo1 ,$dispo2,
																	$dispo3,$horarioM,$horarioT , $horarioI, $volun1,$volun2 ,
																	$volun3, $estudio1 ,$estudio2 ,$estudio3 ,$estudio4 ,$estudio5, 
                                                                    $otroest , $idioma1 ,$comboIngles, $idioma2 ,  $comboFrances ,$idioma3 , $comboAleman ,
                                                                    $idioma4 ,$comboItaliano,$idioma5 ,$comboPortu,$idioma6 ,$comboOtro , $idioma7 , $administracion , $turismo,
																	$informatica  ,$seguridad, $educacion, $sanidad ,$traduccion,$recursohumano ,
																	$otro,$conducir , $auto  ,$discapa    
					                                             );
						$data['error']=1;  
						$data['mensaje']="Your data has been recorded correctly. Your Id To Verify is ".$cedula; 	            
						$this->load->view('registrate_in_view',$data);
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