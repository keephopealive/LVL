<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function retrieveAll($user)
	{
		$this->load->helper('security');
		$query = "SELECT * FROM orders";
		return $this->db->query($query)->row_array();
	}

	public function create($order_content)
	{
		$query = "INSERT ";
		$values = array($order_content)
		return $this->db->query($query, $values)
	}
	
}