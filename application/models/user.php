<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	// Public Functions

	public function registration($user)
	{
		$this->load->helper('security');
		$salt = bin2hex(openssl_random_pseudo_bytes(22));

		$encrypted_password = crypt($this->db->escape($user['password']), $salt);

		$query = "INSERT INTO users (first_name, last_name, email, encrypted_password,  birthdate, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$values = array($user['first_name'], $user['last_name'], $user['email'], $encrypted_password, $user['birthdate'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

	public function login($user)
	{
		return $results = $this->validate_user($user);
	}	

	public function update($user)
	{

	}

	// Priate Functions

	private function validate_user($user)
	{
		$this->load->helper('security');
		$query = "SELECT * FROM users WHERE email = ?";
		$value = array($user['email']);
		$results = $this->db->query($query, $value)->row_array();
		if($results)
		{
			$crypted_pass = crypt($user['password'], $results['encrypted_password']);
			if(substr($crypted_pass,0,2) == substr($results['encrypted_password'],0,2))
			{
				unset($results['encrypted_password']);;
				return $results;
			}	
			else
			{
				return false;
			} 
		}
		else
		{
			return false;
		}
	}
}