<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->output->enable_profiler(TRUE);
	}

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

	public function edit($id)
	{
		$order = $this->order->adminRetrieveOrder($id);
		$this->load->view('adminOrderEdit', array('order' => $order));
	}

	public function update()
	{
		$result = $this->order->adminUpdateOrder($this->input->post());
		echo json_encode($result);
	}
}