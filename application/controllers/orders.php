<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->output->enable_profiler(TRUE);
	}

	public function newOrder()
	{
		$this->load->view('orderNew');
	}

	public function createOrder()
	{
		// Call Method to Generate New PDF 
		// Call Model to Input New Generated Order w/PDF
		var_dump($this->input->post());
		die('in orders / create order');
		// Redirect to Dashboard
	}
}
