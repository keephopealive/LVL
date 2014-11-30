<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function retrieveAll()
	{
		$query ="SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

	public function createProduct($product)
	{
		// echo '<pre>'; print_r($this->input->post());
		// die();
		$query ="INSERT INTO products (name, description, collection, type, file_path, finish, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
		$values = array($product['name'], $product['description'], $product['collection'], $product['type'], $product['file_path'], $product['finish'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

}