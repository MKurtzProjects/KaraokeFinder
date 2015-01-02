<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Karaoke extends CI_Controller {

  function __construct()
  {
    parent::__construct();
  }

  function index($page = 'home')
  {
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
      
      $data['event_type']= 'karaoke';

      $data['title'] = ucfirst($page); // Capitalize the first letter
      $this->load->view('templates/header', $data);
      $this->load->view('pages/filteredlist', $data); 
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

?>