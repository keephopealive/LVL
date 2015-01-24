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

	// COLLECTIONS
	public function retrieveClassique()
	{
		$results = $this->product->retrieveClassique();
		echo json_encode($results);
	}
	public function retrieveEllipse()
	{
		$results = $this->product->retrieveEllipse();
		echo json_encode($results);
	}
	public function retrievePierrot()
	{
		$results = $this->product->retrievePierrot();
		echo json_encode($results);
	}
	public function retrieveLimoges()
	{
		$results = $this->product->retrieveLimoges();
		echo json_encode($results);
	}
	public function retrieveDamier()
	{
		$results = $this->product->retrieveDamier();
		echo json_encode($results);
	}

	// TYPES
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

	// FINISH

}