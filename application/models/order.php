<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function retrieveAll()
	{
		$query = "SELECT * FROM orders";
		return $this->db->query($query);
	}


}