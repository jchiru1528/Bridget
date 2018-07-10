<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Razon extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
      $this->load->helper('url');
 }

 public function index()
 {
   $data['error']=0;
   $this->load->view('razon_view');
 }

}

?>
