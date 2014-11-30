<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->output->enable_profiler(TRUE);
	}


// View Rendering Controllers

	public function index()
	{
		$user = $this->session->userdata['user'];
		$orders = $this->order->retrieveAll($user['id']);
		$alldata = array(
			'user' => $user,
			'orders' =>$orders
		);
		$this->load->view('userDashboard', $alldata);
	}

	public function profile()
	{
		$user = $this->user->retrieveUser($this->session->userdata['user']['id']);
		$this->load->view('userProfile', $user);
	}

// Action Controllers

// User 

	public function updateProfile()
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
			)
		);
		$this->form_validation->set_rules($config);

		// VALIDATE
		if ($this->form_validation->run() == FALSE )
		{
			$this->session->set_flashdata('update_msg', validation_errors());
		}
		else
		{
			$this->user->updateProfile($this->input->post());
			$this->session->set_flashdata('update_msg', "Profile Update was successful.");
		}
		redirect('/profile');
	}

}
