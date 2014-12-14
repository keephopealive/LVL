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
		// $productitems = $this->productitem->retrieveAllOrders();
		// var_dump($productitems);
		// die('here');
		$productitems = $this->productitem->retrieveAllOrderProducts($this->session->userdata('order_id'));
		$user = $this->session->userdata['user'];
		$this->load->view('newOrder', array(
			'user' => $user, 
			'order_id' => $this->session->userdata('order_id'),
			'productitems' => $productitems)
		);
	}

	public function deleteOrder($id)
	{
		$this->order->deleteOrder($id);
		redirect('/dashboard');
	}
	public function showOrder($order_id)
	{
		$productitems = $this->productitem->retrieveAllOrderProducts($order_id);
		$this->load->view('showOrder', array('productitems' => $productitems));
	}

}