<?php
// main ajax back end
class City extends CI_Controller {
  // just returns time
  public function index()
  {
  		$city = 'boston';
        $query1 = $this->db->query("SELECT * FROM event_info WHERE city = '".$city."'"); 		



  } 
}
?>