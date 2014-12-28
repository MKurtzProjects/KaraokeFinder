<?php

class About extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('events_model');
	}

	public function index($page = 'about')
{
	if ( ! file_exists(APPPATH.'/views/pages/'.$page.'.php'))
	{
		echo("Whoops, we don't have a page for that!");
		show_404();
	}

	$data['title'] = ucfirst($page); // Capitalize the first letter

	$data['event_info'] = $this->events_model->get_events();
	$this->load->view('templates/header', $data);
	$this->load->view('pages/'.$page, $data);
	$this->load->view('templates/footer', $data);
}

	public function view($slug)
	{
		$data['event_info'] = $this->news_model->get_events($slug);
	}

}	
error_reporting(E_ALL);
ini_set('display_errors', '1');