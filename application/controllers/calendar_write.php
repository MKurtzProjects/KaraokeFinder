<?php
$this->load->database();

$sql = "INSERT INTO mytable (title, name) 
        VALUES (".$this->db->escape($title).", ".$this->db->escape($name).")";

$this->db->query($sql);

echo $this->db->affected_rows();

