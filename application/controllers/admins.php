<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		// $this->output->enable_profiler(TRUE);
	}

// Admin Dashboard
	public function index()
	{
		$user = $this->session->userdata['user'];
		$productitems = $this->productitem->adminRetrieveAll();
		$alldata = array(
			'user' => $user,
			'productitems' =>$productitems
		);
		$this->load->view('adminDashboard', $alldata);
	}

// ProductitemS - ADMIN

// Edit productitem (ViewPage)
	public function edit($id)
	{
		$productitem = $this->productitem->adminRetrieveproductitem($id);
		$this->load->view('adminproductitemEdit', array('productitem' => $productitem));
	}

// Update productitem (Action)
	public function updateProductItem()
	{
		$result = $this->productitem->adminUpdateproductitem($this->input->post());
		echo json_encode($result);
	}


// Add Product
	public function createProduct()
	{
		$config = array(
			array(
				'field' => 'file_path',
				'label' => 'file path',
				'rules' => 'trim|required'
			)
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE )
		{
			$test = array(
				'type' => 'createProduct',
				'status' => 'failed',
				'errors' => validation_errors()
			);
			echo json_encode($test);
		}
		else
		{
			$result = $this->product->createProduct($this->input->post());
			if($result)
			{
				$arr = array(
					'type' => 'createProduct',
					'status' => 'success'
				);
				echo json_encode($arr);
			}
		}
	}
}