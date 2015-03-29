 <?php 
class insert_view extends CI_Controller {

  function __construct()
  {
    parent::__construct();

  $this->load->helper('form');
  $this->load->library('form_validation');

}
  function index($page = 'insert_view')
  { 
    
    if($this->session->userdata('logged_in'))
    {

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
      $this->load->view('pages/insert_view', $data); 
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
    redirect('insert_view', 'refresh');
  }


}



