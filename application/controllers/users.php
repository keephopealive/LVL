<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->output->enable_profiler(TRUE);
		// $this->load->model('User');
	}


// View Rendering Controllers

	public function index()
	{
		// $this->load->model('orders');
		// $results = $this->Stuff->retrieveAll();
		// var_dump($results);
		die('in index here');
	}

	public function dashboard()
	{
		die('in users dashboard');
		$user = $this->session->userdata('user');
		// $this->load->model('user');
		$alldata = array(
			'user' => $this->session->userdata('user')
			// 'order' =>$this->Stuff->retrieveAll();
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
