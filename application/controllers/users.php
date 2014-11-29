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
		$user = $this->session->userdata('user');
		$orders = $this->order->retrieveAll($user['id']);
		$alldata = array(
			'user' => $user,
			'orders' =>$orders
		);
		$this->load->view('userDashboard', $alldata);
	}

	public function profile()
	{
		$user = $this->session->userdata('user');
		$this->load->view('userProfile', $user);
	}



// Action Controllers


// User 


	public function userUpdate()
	{
		redirect('/user/profile');
	}

	public function userDestroy()
	{

	}


// Order 

	public function newOrder()
	{

	}

	public function editOrder()
	{

	}

	public function destroyOrder()
	{

	}
}
