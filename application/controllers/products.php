<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		// $this->output->enable_profiler(TRUE);
	}

	public function index()
	{
		$results = $this->product->retrieveAll();
		$this->load->view('productDashboard', array(
								'products' => $results)
		);
	}

	public function retrieveAllCollections()
	{
		$results = $this->product->retrieveAllCollections();
		echo json_encode($results);
	}

	public function retrieveAllFinish()
	{
		$results = $this->product->retrieveAllFinish();
		echo json_encode($results);
	}

	public function retrieveAllType()
	{
		$results = $this->product->retrieveAllType();
		echo json_encode($results);
	}
}