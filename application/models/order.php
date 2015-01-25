<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function retrieveAll($id)
	{
		$query ="SELECT * FROM orders WHERE user_id = ?";
		return $this->db->query($query, $id)->result_array();
	}
	public function adminRetrieveAllOrders()
	{
		$query ="SELECT *, orders.id AS 'order_id', orders.created_at AS 'orders_created_at', orders.updated_at AS 'orders_updated_at' FROM orders LEFT JOIN users ON orders.user_id = users.id";
		return $this->db->query($query)->result_array();
	}
	
	public function createOrder($user_id)
	{
		$query ="INSERT INTO orders (user_id, status, created_at ,updated_at) VALUES (?, ?, NOW(), NOW())";
		$values = array($user_id, 'Pending');
		$this->db->query($query, $values);
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
	public function saveNote($values)
	{
		$query ="UPDATE orders SET client_note = ? WHERE id = ?";
		$values = array($values['client_note'], $values['order_id']);
		return $this->db->query($query, $values);
	}
	public function saveAdminNote($values)
	{
		$query ="UPDATE orders SET admin_note = ? WHERE id = ?";
		$values = array($values['admin_note'], $values['order_id']);
		return $this->db->query($query, $values);
	}
	public function updateStatus($values)
	{
		$query ="UPDATE orders SET order_no = ?, status = ? WHERE id = ?";
		$values = array($values['order_no'], $values['status'], $values['order_id']);
		return $this->db->query($query, $values);
	}
	public function retrieveOrder($order_id)
	{
		$query ="SELECT * FROM orders WHERE id = ?";
		return $this->db->query($query, $order_id)->row_array();
	}
}