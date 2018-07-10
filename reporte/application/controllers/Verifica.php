<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifica extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->helper(array('form', 'url'));
   $this->load->Model('login_model','', TRUE);
 }

 public function index()
 {

 
   $this->load->view('reportes_view');
 }
 
 function loginVerifica()
 {
  
     //$this->load->view('reportes_view',$data);
	 $usuario = $this->input->post('usuario');
	 $password= $this->input->post('password');
	 $consultabd= $this->login_model->login_a($usuario,$password);
	 if ($consultabd->num_rows() == 1)
			{
				
				$this->load->view('reportes_view'); 
			 }
	else
		     {  
		            $data['error']=1;  
					$data['mensaje']="Error Usuario o Contraseña Invalida"; 
					$this->load->view('login',$data); 
		      
			 }
	 
	
	 
 
	 
 }

}

?>
