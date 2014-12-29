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
	public function retrieveKeypads()
	{
		$results = $this->product->retrieveKeypads();
		echo json_encode($results);
	}
	public function retrieveOutlets()
	{
		$results = $this->product->retrieveOutlets();
		echo json_encode($results);
	}
	public function retrieveSwitches()
	{
		$results = $this->product->retrieveSwitches();
		echo json_encode($results);
	}
	public function retrieveDoorbells()
	{
		$results = $this->product->retrieveDoorbells();
		echo json_encode($results);
	}
	public function retrieveLamps()
	{
		$results = $this->product->retrieveLamps();
		echo json_encode($results);
	}
}