<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Info_logo_in extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
      $this->load->helper('url');
 }

 public function index()
 {
   $data['error']=0;
   $this->load->view('infologo_in_view');
 }

}

?>
