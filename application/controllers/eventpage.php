<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class EventPage extends CI_Controller {

  function __construct()
  {
    parent::__construct();
    $this->load->model('events_model');
    $this->load->model('venues_model');
  }

  function index($page = 'eventinfo')
  {
//stylesheets
    $data['page'] = $page;
// called from button on home page
    if (isset($_GET['event_id'])){
    $event_id = $_GET["event_id"];




    $search_query = $this->db->query("SELECT * FROM events INNER JOIN venues ON events.venue_id=venues.venue_id WHERE event_id = '".$event_id."'");

    if ($search_query->num_rows() == 0) {
      die ("Sorry -- that event could not be found.");
    }
    else {
         $row = $search_query->row_array(); 
         $data['event_type'] = $row['event_type'];
        $data['location_name'] = $row['venue_name'];   
        $data['street'] = $row['street'];   
        $data['city'] = $row['city'];
        $data['state'] = $row['state'];
        $data['zip'] = $row['zip'];
        $data['website_url'] = $row['website_url'];        
        $data['description'] = $row['description'];
        $data['image'] = $row['image'];
        $data['start_time'] = $row['upcoming_start'];
        $data['telephone'] = $row['telephone'];          
    }

  } else die ('We could not find that event.  Please try another!');




 //    $data['event']= "event_type='karaoke' OR event_type='trivia'";
      if($this->session->userdata('logged_in'))
      {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
     

      $data['title'] = ucfirst($page); // Capitalize the first letter
      $this->load->view('templates/prelogin_header', $data);
      $this->load->view('pages/'.$page, $data); 
      $this->load->view('templates/footer', $data);
    }
    else
    {
      $session_data = $this->session->userdata('logged_in');
      $data['username'] = $session_data['username'];
     

      $data['title'] = ucfirst($page); // Capitalize the first letter
      $this->load->view('templates/prelogin_header', $data);
      $this->load->view('pages/'.$page, $data); 
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