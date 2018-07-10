<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto_in extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->helper(array('form', 'url'));
 }

 public function index()
 {
  
   $this->load->view('contacto_in_view');
 }

}

?>
