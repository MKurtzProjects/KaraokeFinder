<?php
// main ajax back end
class Triviafilter extends CI_Controller {
  // just returns time
  
public function __construct()
	{
		parent::__construct();
		$this->load->model('events_model');

	}

  public function index($page = 'filteredlist')
  {
  	$data['event_type']= 'Trivia';
	$data['title'] = ucfirst($page); // Capitalize the first letter
	$this->load->view('templates/header', $data);
	$this->load->view('./pages/filteredlist');		
	$this->load->view('templates/footer', $data);

  } 
}


error_reporting(E_ALL);
ini_set('display_errors', 1);