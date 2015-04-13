<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model {

	// Public Functions

	public function registration($user)
	{
		$this->load->helper('security');
//		$salt = bin2hex(openssl_random_pseudo_bytes(22));
//		$encrypted_password = crypt('mypassword', $salt);
//		$encrypted_password = crypt($this->db->escape($user['password']), $salt);
		$encrypted_password = md5($user['password']);
		$query = "INSERT INTO users (first_name, last_name, email, encrypted_password, admin, created_at, updated_at) VALUES (?, ?, ?, ?, ?, ?, ?)";
		$values = array($user['first_name'], $user['last_name'], $user['email'], $encrypted_password, '0', date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

	public function retrieveUser($id)
	{
		$query = "SELECT * FROM users WHERE id = ?";
		$value = array($id);
		return $this->db->query($query, $value)->row_array();
	}

	public function login($user)
	{
		return $results = $this->validate_user($user);
	}	

	private function validate_user($user)
	{
		$this->load->helper('security');
		$query = "SELECT * FROM users WHERE email = ? AND encrypted_password = ?";
		$values = array($user['email'], md5($user['password']));
		$result = $this->db->query($query, $values)->row_array();
		if($result)
		{
			return $result;
		}
		else
		{
			return false;
		}
	}

	public function updateProfile($user)
	{ // UPDATING USER INFO - ADD BIRTHDATE? SHOW BIRTHDATE FIRST?
		$query = "UPDATE users SET first_name = ?,  last_name = ?, created_at = ?, updated_at = ? WHERE users.id = ?";
		$values = array($user['first_name'], $user['last_name'],	 date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"),$this->session->userdata['user']['id']);
		return $this->db->query($query, $values);
	}
}



















