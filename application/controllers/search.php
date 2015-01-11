<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class EventPage extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('events_model');
    $this->load->controller('search');
  }

  function index($page = 'home')
  {
//stylesheets
    $data['page'] = $page;
// called from button on home page
    if (isset($_GET['city'])){
    $event_id = $_GET["city"];


    $search_query = $this->db->query("SELECT * FROM event_info WHERE city = '".$city."'");

    if ($search_query->num_rows() == 0) {
      die ("That event could not be found!");
    }
    else {
         $row = $search_query->row_array(); 
         $data['event_type'] = $row['event_type'];
        $data['location_name'] = $row['location_name'];   
        $data['street'] = $row['street'];   
        $data['city'] = $row['city'];
        $data['state'] = $row['state'];
        $data['zip'] = $row['zip'];
        $data['website_url'] = $row['website_url'];        
        $data['description'] = $row['description'];
        $data['image'] = $row['image'];
        $data['start_time'] = $row['start_time'];
        $data['telephone'] = $row['telephone'];          
    }

  } else die ('We could not find that event.  Please try another!');




 //    $data['event']= "event_type='karaoke' OR event_type='trivia'";
      if($this->session->userdata('logged_in'))
      {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
     

      $data['title'] = ucfirst($page); // Capitalize the first letter
      $this->load->view('templates/header', $data);
      $this->load->view('pages/'.$page, $data); 
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