<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mains extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->output->enable_profiler(TRUE);
		// $this->load->model(array('user', 'order'));
	}

	public function index()
	{
		$this->load->view('main');
	}

	public function login()
	{
		// die('here');
		// $this->load->database();

		$results = $this->user->login($this->input->post());
		// $orders = $this->order_model->retrieveAll();
		// var_dump($orders);
		// die();
		if($results)
		{
			$this->session->set_userdata('user', $results);	
			redirect('/dashboard');
		}
		else
		{
			$this->session->set_flashdata('login_msg', "Invalid Credentials.");
			redirect('/');
		}
	}


	public function logout()
	{
		$this->session->sess_destroy();
		$this->session->set_flashdata('logout_msg', "You have successfully logged out.");
		redirect('/');
	}


	public function registration()
	{

		$config = array(
			array(
				'field' => 'first_name',
				'label' => 'First name',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'last_name',
				'label' => 'Last name',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'email',
				'label' => 'Email',
				'rules' => 'required|valid_email|is_unique[users.email]'
			),
			array(
				'field' => 'birthdate',
				'label' => 'Birthdate',
				'rules' => 'required'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|min_length[8]|matches[confirm_password]'
			),
			array(
				'field' => 'confirm_password',
				'label' => 'Confirm Password',
				'rules' => 'required'
			)
		);
		$this->form_validation->set_rules($config);

		// VALIDATE
		if ($this->form_validation->run() == FALSE )
		{
			$this->session->set_flashdata('registration_msg', validation_errors());
		}
		else
		{
			$this->user->registration($this->input->post());
			$this->session->set_flashdata('registration_msg', "Registration was successful.");
		}
		redirect('/');
	}

}
