<?php
class Events extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('events_model');
	}

	public function index()
	{		

		$this->load->view('templates/header');
		$this->load->view('views/home', $data);
		$this->load->view('templates/footer');
	}

	public function view($slug)
	{
		$data['event_info'] = $this->news_model->get_events($slug);
	}
}

