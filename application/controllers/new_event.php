<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class New_Event extends CI_Controller {

  function __construct()
  {
    parent::__construct();

  $this->load->helper('form');
  $this->load->library('form_validation');


}


  function index($page = 'new_event')
  { 

    
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      $data['title'] = ucfirst($page); // Capitalize the first letter
      $data['page'] = $page;


    }
    else
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
     

      $data['title'] = ucfirst($page); // Capitalize the first letter
      $data['page'] = $page;

       
  $this->form_validation->set_rules('title', 'Title', 'required');
  $this->form_validation->set_rules('text', 'text', 'required');

  if ($this->form_validation->run() === FALSE)
  {
      $this->load->view('templates/prelogin_header', $data);
      $this->load->view('pages/new_event', $data); 
      $this->load->view('templates/footer', $data);

  }
  else
  {
    $this->news_model->set_news();
    $this->load->view('pages/success');
  }
  }
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('new_event', 'refresh');
  }


}

function event_type_filter(){

}


