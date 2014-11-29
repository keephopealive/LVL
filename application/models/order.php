<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

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

		// echo '<pre>'; print_r($reference_no); 
		// echo '<pre>'; print_r($this->session->userdata['user']['id']); die('<br> Marker ');
			
		$query = "INSERT INTO orders (user_id, reference_no, pdf, status,  note, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$values = array($this->session->userdata['user']['id'], $reference_no, "myPDFfile", "myStatus", "myNote", date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

}