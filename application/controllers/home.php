<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//class Login extends CI_Controller {
//function __construct()
// { parent::__construct();} function index($page = 'Home'){
//	$this->load->view('templates/footer', $data);   $this->load->helper(array('form'));}}

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Login extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('events_model');
        $data['day'] = "";
  error_reporting(E_ALL);
ini_set('display_errors', 1);
  }

  function index($page = 'home')
  { 

    $filter = "SELECT * FROM events WHERE (event_type='karaoke' OR event_type='trivia')";
    $data['select'] = "";
    $data['day'] = "";

//filter actions
 if (isset($_GET['select'])){
    $select = $_GET["select"];
    $filter = "SELECT * FROM event_info WHERE (event_type LIKE '%".$select."%' OR location_name LIKE '%".$select."%')";
    $data['select'] = $select;
 }

 if (isset($_GET['day'])) {
  $day = $_GET["day"];
  $filter = $filter."AND day_of_week ='".$day."'";
  $data['day'] = $day;
 }
    $data['search_filter'] = $filter;


    
    if($this->session->userdata('logged_in'))
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
     

      $data['title'] = ucfirst($page); // Capitalize the first letter
      $data['page'] = $page;
 //     $this->load->view('templates/prelogin_header', $data);
      $this->load->view('pages/home', $data); 
      $this->load->view('templates/footer', $data);

    }
    else
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
     

      $data['title'] = ucfirst($page); // Capitalize the first letter
      $data['page'] = $page;
  //     $this->load->view('templates/prelogin_header', $data);
      $this->load->view('pages/home', $data); 
      $this->load->view('templates/footer', $data);
	}
}
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
    redirect('home', 'refresh');
  }


}

function event_type_filter(){
  error_reporting(E_ALL);
ini_set('display_errors', 1);
}
