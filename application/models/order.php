<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function retrieveAll($id)
	{
		$query ="SELECT * FROM orders WHERE user_id = ?";
		return $this->db->query($query, $id)->result_array();
	}
	public function adminRetrieveAllOrders()
	{
		$query ="SELECT *, orders.id AS 'order_id' FROM orders LEFT JOIN users ON orders.user_id = users.id";
		return $this->db->query($query)->result_array();
	}
	
	public function createOrder($user_id)
	{
		$query ="INSERT INTO orders (user_id, created_at ,updated_at) VALUES (?, NOW(), NOW())";
		$value = $user_id;
		$this->db->query($query, $value);
		return $this->db->insert_id();
	}
	public function deleteOrder($order_id)
	{	

		$query ="DELETE FROM productitems WHERE productitems.order_id = ?";
		$value = $order_id;
		$this->db->query($query, $value);
		$query ="DELETE FROM orders WHERE orders.id = ?";
		return $this->db->query($query, $value);
	}
	public function retrieveOrderItems($order_id)
	{
		$query ="SELECT * FROM productitems WHERE order_id = ?";
		return $this->db->query($query, $order_id)->result_array();
	}
}