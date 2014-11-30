<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$results = $this->product->retrieveAll();
		$this->load->view('productDashboard', array('products' => $results));
	}

}