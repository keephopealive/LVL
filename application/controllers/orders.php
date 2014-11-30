<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Orders extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		// $this->output->enable_profiler(TRUE);
	}

	public function retrieveMechanisms()
	{
		$results = $this->order->retrieveMechanisms($this->input->post());
		echo json_encode($results);
	}
	public function retrieveEdgeScrew()
	{
		$results = $this->order->retrieveEdgeScrew($this->input->post());
		echo json_encode($results);
	}

	public function newOrder()
	{
		$this->load->view('orderNew');
	}

	public function createOrder()
	{
		$config = array(
			array(
				'field' => 'orientation',
				'label' => 'orientation',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'size',
				'label' => 'size',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'collection',
				'label' => 'collection',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'finish',
				'label' => 'finish',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'mechanism',
				'label' => 'mechanism',
				'rules' => 'trim|required'
			),
			array(
				'field' => 'edge_screw',
				'label' => 'edge / screw',
				'rules' => 'trim|required'
			)
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE )
		{
			$arr = array(
				'type' => 'createOrder',
				'status' => 'failed',
				'errors' => validation_errors()
			);
			echo json_encode($arr);
		}
		else
		{
			$result = $this->order->orderCreate($this->input->post());
			if($result)
			{
				$arr = array(
					'type' => 'createOrder',
					'status' => 'success'
				);
				echo json_encode($arr);	
			}
				
		}
		// Call Method to Generate New PDF 
		// Call Model to Input New Generated Order w/PDF
		
	}
}
