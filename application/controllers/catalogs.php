<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Catalogs extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		$this->output->enable_profiler(TRUE);
	}

// Action Controllers

// Catalog Request

	public function requestCatalog()
	{
//		$config = array(
//			array(
//				'field' => 'first_name',
//				'label' => 'First name',
//				'rules' => 'trim|required'
//			),
//			array(
//				'field' => 'last_name',
//				'label' => 'Last name',
//				'rules' => 'trim|required'
//			),
//			array(
//				'field' => 'email',
//				'label' => 'Email',
//				'rules' => 'trim|required'
//			),
//			array(
//				'field' => 'profession',
//				'label' => 'Profession',
//				'rules' => 'trim|required'
//			)
//		);
//		$this->form_validation->set_rules($config);
//
//		// VALIDATE
//		if ($this->form_validation->run() == FALSE )
//		{
//			$this->session->set_flashdata('update_msg', validation_errors());
//			redirect("/catalog");
//		}
//		else
//		{
		$result = $this->order->requestCatalog($this->input->post());
		if($result == "digital")
		{
			redirect('/digitalCopy');
		}
		else
		{
			$this->session->set_flashdata('update_msg', "Catalog request was successful.");
			redirect('/catalog');
		}
//			$this->catalog->requestCatalog($this->input->post());

//		}
	}

}
