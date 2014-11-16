<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->output->enable_profiler(TRUE);
		// $this->load->model('user');
	}

	public function dashboard()
	{
		$user = $this->session->userdata('user');
		$this->load->view('userDashboard', $user);
	}

	public function profile()
	{
		$user = $this->session->userdata('user');
		$this->load->view('userProfile', $user);
	}

	public function update()
	{
		// $this->load->model('user');
		// die('in update');
		$results = $this->user->update($this->input->post());
		if($results)
		{
			$this->session->set_flashdata('profileUpdate_msg'. 'You have successfully updated your profile!');
		}
		else
		{
			$this->session->set_flashdata('profileUpdate_msg'. 'Profile - Update has failed, please esnure all fields are filled!');	
		}
		redirect('/user/profile');
	}
}
