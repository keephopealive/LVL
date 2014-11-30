<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admins extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->output->enable_profiler(TRUE);
	}

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
}