
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Login extends CI_Controller {
 
 function __construct()
 {
   parent::__construct();
 }
 
 function index()
 {
   $this->load->helper(array('form'));
   $this->load->view('templates/login_view');
 }
 
}
 
/* session_start(); //we need to call PHP's session object to access it through CI
class Login extends CI_Controller {
  public function index()
  {   
    $this->load->library('facebook');
    $data['login_url'] = $this->facebook->get_login_url();
    $data['user_me'] =  $this->facebook->get_user();
    $data['logout_url'] = $this->facebook->get_logout_url();
    
    $this->load->view('welcome_message',$data);
             
  }
} */
/* End of file login.php */
/* Location: ./application/controllers/login.php */

