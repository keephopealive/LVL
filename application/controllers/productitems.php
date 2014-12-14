<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productitems extends CI_Controller {

	public function __construct($id = null)
	{
		parent::__construct($id);
		// $this->output->enable_profiler(TRUE);
	}

	public function retrieveMechanisms()
	{
		$results = $this->productitem->retrieveMechanisms($this->input->post());
		echo json_encode($results);
	}
	public function retrieveEdgeScrew()
	{
		$results = $this->productitem->retrieveEdgeScrew($this->input->post());
		echo json_encode($results);
	}

	public function newProductitemKeypad()
	{

		$this->load->view('productitemNewKeypad', array('order_id' => $this->session->userdata['order_id']));
	}

	public function mpdftester()
	{
		$filename = "Win9002";
		$pdfFilePath = FCPATH."/pdf/$filename.pdf";
		$data['the_content'] = '|||||INSERTED CONTENT|||||'; // pass data to the view
		 
		if (file_exists($pdfFilePath) == FALSE)
		{
		    ini_set('memory_limit','32M');
		    $html = $this->load->view('pdf_output', $data, true); // render the view into HTML
		     
		    $this->load->library('m_pdf');
		    $pdf = $this->m_pdf->load();
		    $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="https://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley" scale="0">
		    $pdf->WriteHTML($html); // write the HTML into the PDF
		    $pdf->Output($pdfFilePath, 'F'); // save to file because we can
		}
		 exit;
		// $mpdf->
		// var_dump($mpdf);
	}

	public function destroyProductitem()
	{
		$this->productitem->destroyProductitem($this->input->post('productitem_id'));
		redirect('/order/newOrder');
	}

	public function createProductitem()
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
				'rules' => 'required'
			)
		);
		$this->form_validation->set_rules($config);

		if ($this->form_validation->run() == FALSE )
		{
			$arr = array(
				'type' => 'createproductitem',
				'status' => 'failed',
				'errors' => validation_errors()
			);
			echo json_encode($arr);
		}
		else
		{
			$result = $this->productitem->productitemCreate($this->input->post());
			// ========= PDF Generation ==========

			$filename = $this->session->userdata('reference_no');
			$this->session->set_userdata('reference_no', null);
			$pdfFilePath = FCPATH."/pdf/$filename.pdf";
			$data['the_content'] = '|||||INSERTED CONTENT|||||'; // pass data to the view
			 
			if (file_exists($pdfFilePath) == FALSE)
			{
			    ini_set('memory_limit','32M');
			    $html = $this->load->view('pdf_output', $data, true); // render the view into HTML
			     
			    $this->load->library('m_pdf');
			    $pdf = $this->m_pdf->load();
			    $pdf->SetFooter($_SERVER['HTTP_HOST'].'|{PAGENO}|'.date(DATE_RFC822)); // Add a footer for good measure <img src="https://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley" scale="0">
			    $pdf->WriteHTML($html); // write the HTML into the PDF
			    $pdf->Output($pdfFilePath, 'F'); // save to file because we can
			}

			// ========= end of PDF gen ==========

				$arr = array(
					'type' => 'createproductitem',
					'status' => 'success'
				);
				echo json_encode($arr);	
		}
		// Call Method to Generate New PDF 
		// Call Model to Input New Generated productitem w/PDF
		// TDD on Form Submission - generating accurate reference_no
		
	}
}
