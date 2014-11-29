<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function retrieveAll()
	{
		$query = "SELECT * FROM orders";
		return $this->db->query($query);
	}

	public function create($order_content)
	{
		$query = "INSERT ";
		$values = array($order_content)
		return $this->db->query($query, $values)
	}
	
}