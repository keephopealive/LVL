<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalog extends CI_Model {

	// Public Functions

	public function requestCatalog($request)
	{
		// echo '<pre>'; print_r($this->input->post());
		// die();
		$query ="INSERT INTO catalogs (delivery_method, first_name, last_name, company_name, email, profession, address, city, state, postal_code, country, contact_number, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, NOW(), NOW())";
		$values = array($request['delivery_method'], $request['first_name'], $request['last_name'], $request['company_name'], $request['email'], $request['profession'], $request['address'], $request['city'], $request['state'], $request['postal_code'], $request['country'], $request['contact_number'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}
	public function adminRetrieveAllCatalogs()
	{
		$query = "SELECT * FROM catalogs";
		return $this->db->query($query);
	}
}
