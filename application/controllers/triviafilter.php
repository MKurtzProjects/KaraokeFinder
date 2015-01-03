<?php
// main ajax back end
class Triviafilter extends CI_Controller {
  // just returns time
  
public function __construct()
	{
		parent::__construct();
		$this->load->model('events_model');

	}

  public function index($page = 'Beta Login')
  {

    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
     

  	$data['event_type']= 'Trivia';

	$this->load->view('templates/header', $data);
	$this->load->view('./pages/filteredlist');		
	$this->load->view('templates/footer', $data);

    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}

  } 
}


error_reporting(E_ALL);
ini_set('display_errors', 1);