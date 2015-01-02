<?php
// main ajax back end
class Sundayfilter extends CI_Controller {
  // just returns time
  
public function __construct()
	{
		parent::__construct();
		$this->load->model('events_model');

	}

  public function index($page = 'filteredlist')
  {
  	$data['start_time']= 'i don't know how to do this;
	$data['title'] = ucfirst($page); // Capitalize the first letter
	$this->load->view('templates/header', $data);
	$this->load->view('./pages/filteredlist');		
	$this->load->view('templates/footer', $data);

  } 
}


error_reporting(E_ALL);
ini_set('display_errors', 1);