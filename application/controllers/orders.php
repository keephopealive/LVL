<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		// $this->output->enable_profiler(TRUE);
	}

	public function createOrder()
	{
		$order_id = $this->order->createOrder($this->session->userdata['user']['id']);
		$this->session->set_userdata('order_id', $order_id);
		redirect('/order/newOrder');
	}

	public function newOrder() // Show Order
	{
		$productitems = $this->productitem->retrieveAllOrderProducts($this->session->userdata('order_id'));
		$order = $this->order->retrieveOrder($this->session->userdata('order_id'));
		$user = $this->session->userdata['user'];
		$this->load->view('newOrder', array(
			'user' => $user, 
			'order_id' => $this->session->userdata('order_id'),
			'order' => $order, 
			'productitems' => $productitems)
		);
	}

	public function deleteOrder($id)
	{
		$this->order->deleteOrder($id);
		redirect('/dashboard');
	}
	public function updateOrder($id)
	{
		$order_items = $this->productitem->retrieveAllOrderProductsMechanisms($id);
		$user = $this->user->retrieveUser($this->session->userdata('user')['id']);
		$this->order->updateOrder($id, $order_items, $user);
		redirect('/dashboard');
	}
	public function showOrder($order_id)
	{
		$productitems = $this->productitem->retrieveAllOrderProducts($order_id);
		$this->load->view('showOrder', array('productitems' => $productitems));
	}

	public function updateOrderInfo()
	{
		$this->order->updateOrderInfo($this->input->post());
		redirect('/order/newOrder');
	}
	public function saveAdminNote()
	{
		$this->order->saveAdminNote($this->input->post());
		redirect('/admin/orderEdit/'.$this->input->post('order_id'));
	}
	public function updateStatus()
	{
		$this->order->updateStatus($this->input->post());
		redirect('/admin/orderEdit/'.$this->input->post('order_id'));
	}

}