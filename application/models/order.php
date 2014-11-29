<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function retrieveAll($id)
	{
		$query = "SELECT * FROM orders WHERE user_id = {$id}";
		return $this->db->query($query)->result_array();
	}

}