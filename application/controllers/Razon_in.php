<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Razon_in extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
      $this->load->helper('url');
 }

 public function index()
 {
   $data['error']=0;
   $this->load->view('razon_in_view');
 }

}

?>
