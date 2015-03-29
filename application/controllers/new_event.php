<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class New_Event extends CI_Controller {

  function __construct()
  {
    parent::__construct();


  $this->load->library('form_validation');
  $this->load->helper('date');

}

  function index($page = '')
  { 

    
    if($this->session->userdata('logged_in'))
    {
     $session_data = $this->session->userdata('logged_in');
     $data['username'] = $session_data['username'];
 


    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
    // Validating Name Field
    $this->form_validation->set_rules('event_title', 'Event Title', 'required');
    // Validating Email Field
    $this->form_validation->set_rules('event_type', 'Email', 'required');
    // Validating Mobile no. Field
    $this->form_validation->set_rules('day_of_week', 'Day of Week', 'required');
    // Validating Address Field
    // Validating Address Field
    $this->form_validation->set_rules('venue_name', 'Venue Name', 'required');

    if ($this->form_validation->run() == FALSE)
    {
            $this->load->view('templates/prelogin_header', $data);
        $this->load->view('pages/new_event');
          $this->load->view('templates/footer', $data);
    }

    if ($this->form_validation->run() == TRUE)
    {

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    // Setting Values For Tabel Columns

    $venue_id = $this->db->insert_id();
    $this->input->post('userfile');

    echo '<br><br><br><br>'.$this->input->post('userfile');
    if (isset($_FILES['userfile']['name'])) {

    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["userfile"]["name"]);
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
        $check = getimagesize($_FILES["userfile"]["tmp_name"]);
        if($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File is not an image.";
            $uploadOk = 0;
        }
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["userfile"]["size"] > 500000) {
        echo "Sorry, your image file is too large.  Please upload a file under 500kb";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Your image was not uploaded. Only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
     //   echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["userfile"]["tmp_name"], $target_file)) {
            echo "The file ". basename( $_FILES["userfile"]["name"]). " has been uploaded.";
        } else {
       //     echo "Sorry, there was an error uploading your file.";
        }
    }
    }
    $data_venue = array(
    'image' => $target_file,
    'venue_name' => $this->input->post('venue_name'),
    'street' => $this->input->post('street'),
    'city' => $this->input->post('city'),
    'state' => $this->input->post('state'),
    'telephone' => $this->input->post('telephone'),
    'website_url' => $this->input->post('website_url'),

    //'image' => $this->input->post('image'),
    );

    $time = $this->input->post('time');
    $day_of_week = $this->input->post('day_of_week');
    $date_time = date('Y-m-d', strtotime('next '.$day_of_week)).' '.$time;

    $data_event = array(
    'event_title' => $this->input->post('event_title'),
    'event_type' => $this->input->post('event_type'),
    'day_of_week' => $this->input->post('day_of_week'),
    'description' => $this->input->post('description'),
    'venue_id' => $venue_id,
    'upcoming_start' => $date_time,
    );
    // Transfering Data To Model
    $this->load->model('insert_model');
    $this->insert_model->form_insert($data_event, $data_venue);
    // Loading View
    $this->load->helper('form');
          $this->load->view('templates/prelogin_header', $data);
    $this->load->view('pages/event_submitted', $data_event);
          $this->load->view('templates/footer', $data);
      }
    }
    else
    {
     //If no session, redirect to home page
      $this->load->view('templates/prelogin_header');
     $this->load->view('templates/login_view');

    }
  }
  
  function logout()
  {
    $this->session->unset_userdata('logged_in');
    session_destroy();
  //  redirect('new_event', 'refresh');
  }


}
?>