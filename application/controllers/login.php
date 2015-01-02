<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index($page = 'Beta Login')
 {


	$data['title'] = ucfirst($page); // Capitalize the first letter
	$this->load->view('templates/prelogin_header', $data);
   $this->load->helper(array('form'));
   $this->load->view('login_view');
	$this->load->view('templates/footer', $data);   $this->load->helper(array('form'));



 }
 
 
}