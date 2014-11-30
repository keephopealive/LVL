<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->output->enable_profiler(TRUE);
	}

// Admin Dashboard
	public function index()
	{
		$user = $this->session->userdata['user'];
		$orders = $this->order->adminRetrieveAll();
		$alldata = array(
			'user' => $user,
			'orders' =>$orders
		);
		$this->load->view('adminDashboard', $alldata);
	}

// ORDERS - ADMIN

// Edit Order (ViewPage)
	public function edit($id)
	{
		$order = $this->order->adminRetrieveOrder($id);
		$this->load->view('adminOrderEdit', array('order' => $order));
	}

// Update Order (Action)
	public function update()
	{
		$result = $this->order->adminUpdateOrder($this->input->post());
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
				'type' => 'createOrder',
				'status' => 'failed',
				'errors' => validation_errors()
			);
			// echo json_encode($test);
			$this->session->set_flashdata('errors', validation_errors());
		}
		else
		{
			$result = $this->product->createProduct($this->input->post());
			if($result)
			{
				$arr = array(
					'type' => 'createOrder',
					'status' => 'success'
				);
				// echo json_encode($arr);
				$this->session->set_flashdata('errors', "Successful Product Creation");
			}
		}
		redirect('/admin/dashboard');
	}
}