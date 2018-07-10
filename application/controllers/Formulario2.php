<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Formulario2 extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->helper(array('form', 'url'));
 }

 public function index()
 {
   $data['error']=0;
   $this->load->view('formulario2_view',$data);
 }

}

?>
