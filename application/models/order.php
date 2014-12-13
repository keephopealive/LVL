<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function adminRetrieveAll()
	{
		$query = "SELECT *, orders.id AS 'id', users.id AS 'user_id' FROM orders LEFT JOIN users ON orders.user_id = users.id";
		return $this->db->query($query)->result_array();
	}
	
	public function adminRetrieveOrder($id)
	{
		$query = "SELECT *, orders.id AS 'id', users.id AS 'user_id' FROM orders LEFT JOIN users ON orders.user_id = users.id WHERE orders.id = {$id}";
		return $this->db->query($query)->row_array();
	}

	public function adminUpdateOrder($order)
	{
		$query = "UPDATE orders SET status = ?, admin_note = ?,  created_at = ?, updated_at = ? WHERE orders.id = ?";
		$values = array($order['status'], $order['admin_note'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $order['order_id']);
		return $this->db->query($query, $values);
	}


	public function retrieveAll($id)
	{
		$query = "SELECT * FROM orders WHERE user_id = {$id}";
		return $this->db->query($query)->result_array();
	}

	public function orderCreate($order)
	{
		
		$reference_no = 
			"F" .
			$order['collection'] .
			$order['size'] .
			$order['edge_screw'] .
			"-" .
			$order['mechanism'] .
			$order['finish'];
		$this->session->set_userdata('reference_no', $reference_no);
		$query = "INSERT INTO orders (user_id, reference_no, pdf, status,  note, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$values = array($this->session->userdata['user']['id'], $reference_no, "myPDFfile", "Pending", $order['note'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

	public function retrieveMechanisms($id)
	{
		$query = "SELECT * FROM mechanisms WHERE size_id = ?";
		$values = $id;
		return $this->db->query($query, $values)->result_array();
	}

	public function retrieveEdgeScrew($id)
	{
		// $query = "SELECT * FROM edge_screw WHERE size_id = ?";
		// $values = $id;
		// return $this->db->query($query, $values)->result_array();
		return true;
	}
}