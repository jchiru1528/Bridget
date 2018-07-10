<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formulario3 extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->helper(array('form', 'url'));
 }

 public function index()
 {
   $data['error']=0;
   $this->load->view('formulario3_view',$data);
 }

}

?>
