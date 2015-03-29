<?php
class insert_model extends CI_Model{
function __construct() {
parent::__construct();
}
function form_insert($data_event, $data_venue){
// Inserting in Table(students) of Database(college)
$this->db->insert('venues', $data_venue);
$venue_id = $this->db->insert_id();
echo $venue_id;

$this->db->set($data_event);
$this->db->set('venue_id', $venue_id);
$this->db->insert('events');






  $this->load->helper('form');
}
}

error_reporting(E_ALL);
ini_set('display_errors', 1);