<?php

class About extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('events_model');
	}

	public function index($page = 'about')
{
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
     

      $data['title'] = ucfirst($page); // Capitalize the first letter
      $data['page'] = $page;
      $this->load->view('templates/header', $data);
      $this->load->view('pages/about', $data); 
      $this->load->view('templates/footer', $data);
    }
    else
    {
      //If no session, redirect to login page
      redirect('login', 'refresh');
	}
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }

}	