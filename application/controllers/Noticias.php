<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Noticias extends CI_Controller {

 public function __construct()
 {
   parent::__construct();
   $this->load->helper(array('form', 'url'));
 }

 public function index()
 {
   $data['error']=0;
   $this->load->view('noticias_view');
 }

}

?>
