<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class InsertarC extends CI_Controller 
	   {
			 function __construct()
 				{
                    parent::__construct();
					$this->load->helper(array('form', 'url'));
				    //$this->load->library('form_validation');
					$this->load->Model('insertarC_model','', TRUE);
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
				
				  $nombre = $this->input->post('nombre');
				  $contacto = $this->input->post('contacto');
				  $miembros = $this->input->post('miembros');
				  $direc = $this->input->post('direc');
				  $telefono1= $this->input->post('telefono1');
				  $telefono2= $this->input->post('telefono2');
				  $email = $this->input->post('email');
				  $guia = $this->input->post('guia');
				  $parro = $this->input->post('parro');
				  
				 if($parro== "Seleccione la Parroquia" )
					{
					 $parro="";
				  
					}
				  $tiempo = $this->input->post('tiempo');
				  $musica1 = $this->input->post('musica1');
				
				  $musica2 = $this->input->post('musica2');
				  $message1= $this->input->post('message1');
				  $otrasparro= $this->input->post('otrasparro');
				 
				  
				 $this->insertarC_model->insertar_datos(  	  $nombre ,$contacto, $miembros , $direc,
															  $telefono1, $telefono2,$email ,$guia ,
															  $parro ,$tiempo , $musica1, $musica2 , 
															  $message1	, $otrasparro
													   );
				    
				//$consultabd= $this->consulta_model->buscar_c($nombre);
				$data['error']=1;  
				$data['mensaje']="Sus datos han sido grabados Correctamente Su Id Para Nombre del Grupo ".$nombre; 
				$this->load->view('formulario3_view',$data);
				
				
		
			}
			
				function insertar_datoi()
			{
				
				  $nombre = $this->input->post('nombre');
				  $contacto = $this->input->post('contacto');
				  $miembros = $this->input->post('miembros');
				  $direc = $this->input->post('direc');
				  $telefono1= $this->input->post('telefono1');
				  $telefono2= $this->input->post('telefono2');
				  $email = $this->input->post('email');
				  $guia = $this->input->post('guia');
				  $parro = $this->input->post('parro');
				  
				 if($parro== "Seleccione la Parroquia" )
					{
					 $parro="";
				  
					}
				  $tiempo = $this->input->post('tiempo');
				  $musica1 = $this->input->post('musica1');
				
				  $musica2 = $this->input->post('musica2');
				  $message1= $this->input->post('message1');
				  $otrasparro= $this->input->post('otrasparro');
				 
				  
				 $this->insertarC_model->insertar_datos(  	  $nombre ,$contacto, $miembros , $direc,
															  $telefono1, $telefono2,$email ,$guia ,
															  $parro ,$tiempo , $musica1, $musica2 , 
															  $message1	, otrasparro
													   );
				    
				//$consultabd= $this->consulta_model->buscar_c($nombre);
				$data['error']=1;  
				$data['mensaje']="Your data has been recorded correctly Your Id For Group Name ".$nombre; 
				$this->load->view('formulario3_in_view',$data);
				
				
		
			}
				
				function correo()
				{
						$config['protocol']    = 'smtp';
						$config['smtp_host']    = 'ssl://smtp.gmail.com';
						$config['smtp_port']    = '465';
						$config['smtp_timeout'] = '7';
						$config['smtp_user']    = '';
						$config['smtp_pass']    = '';
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