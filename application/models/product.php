<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Model {

	public function retrieveAll()
	{
		$query ="SELECT * FROM products";
		return $this->db->query($query)->result_array();
	}

	public function retrieveAllCollections()
	{
		$query = "SELECT * FROM products WHERE products.collection IS NOT NULL ORDER BY collection ASC";
		return $collections = $this->db->query($query)->result_array();
	}

	public function retrieveAllFinish()
	{
		$query = "SELECT * FROM products WHERE products.finish IS NOT NULL ORDER BY finish ASC";
		return $collections = $this->db->query($query)->result_array();
	}

	public function retrieveAllType()
	{
		$query = "SELECT * FROM products WHERE products.type IS NOT NULL ORDER BY type ASC";
		return $collections = $this->db->query($query)->result_array();
	}

	public function retrieveKeypads()
	{
		$query = "SELECT * FROM products WHERE products.type = 'keypad' ORDER BY type ASC";
		return $collections = $this->db->query($query)->result_array();
	}
	public function retrieveSwitches()
	{
		$query = "SELECT * FROM products WHERE products.type = 'switch' ORDER BY type ASC";
		return $collections = $this->db->query($query)->result_array();
	}
	public function retrieveDoorbells()
	{
		$query = "SELECT * FROM products WHERE products.type = 'doorbell' ORDER BY type ASC";
		return $collections = $this->db->query($query)->result_array();
	}
	public function retrieveOutlets()
	{
		$query = "SELECT * FROM products WHERE products.type = 'outlet' ORDER BY type ASC";
		return $collections = $this->db->query($query)->result_array();
	}
	public function retrieveLamps()
	{
		$query = "SELECT * FROM products WHERE products.type = 'lamp' ORDER BY type ASC";
		return $collections = $this->db->query($query)->result_array();
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