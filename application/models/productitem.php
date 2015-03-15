<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Productitem extends CI_Model {

	public function adminRetrieveAll()
	{
		$query = "SELECT *, productitems.id AS 'id', users.id AS 'user_id' FROM productitems LEFT JOIN users ON productitems.user_id = users.id";
		return $this->db->query($query)->result_array();
	}
	
	public function adminRetrieveProductitem($id)
	{
		$query = "SELECT *, productitems.id AS 'id', users.id AS 'user_id' FROM productitems LEFT JOIN users ON productitems.user_id = users.id WHERE productitems.id = {$id}";
		return $this->db->query($query)->row_array();
	}

	public function adminUpdateProductitem($productitem) // Update Current Orderitem
	{
		$query = "UPDATE productitems SET status = ?, admin_note = ?,  created_at = ?, updated_at = ? WHERE productitems.id = ?";
		$values = array($productitem['status'], $productitem['admin_note'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $productitem['productitem_id']);
		return $this->db->query($query, $values);
	}


	public function retrieveAll($id)
	{
		$query = "SELECT * FROM productitems WHERE user_id = {$id}";
		return $this->db->query($query)->result_array();
	}

	public function retrieveAllOrderProducts($id)
	{
		$query = "SELECT * FROM productitems WHERE order_id = {$id}";
		return $this->db->query($query)->result_array();
	}

	public function retrieveAllOrderProductsMechanisms($id)
	{

		$query = "SELECT productitems.id,
		productitems.user_id, productitems.order_id, productitems.note,
		productitems.reference_no, mechanisms.reference_code,
		productitems.engraving,
		productitems.note, productitems.quantity,
		productitems.finish, productitems.size,
		mechanisms.vv, mechanisms.bp,
		mechanisms.bpe, mechanisms.inv
		FROM productitems
		LEFT JOIN mechanisms ON productitems.reference_no LIKE CONCAT('%', mechanisms.reference_code, '%')
		WHERE order_id ={$id}";

		return $this->db->query($query)->result_array();
	}

	public function destroyProductitem($productitem_id)
	{
		$query = "DELETE FROM productitems WHERE id = {$productitem_id}";
		return $this->db->query($query);	
	}

	public function productitemCreate($productitem)
	{
// REFERENCE_NO parse ===============================================================
		$reference_no = 
			"F" .
			$productitem['collection'] .
			$productitem['size'] .
			$productitem['edge_screw'] .
			"-" .
			$productitem['mechanism'] .
			$productitem['finish'];



// PDF Generation ===================================================================
			$filename = $reference_no; // Setting File Name
			$this->session->set_userdata('reference_no', null); // Variables passed to the partial view
			$pdfFilePath = FCPATH."/pdf/$filename.pdf"; // Where to save PDF
			// $data = The array with all variables for the PDF
			$data['the_content'] = '|||||INSERTED CONTENT|||||'; // Adding the_content as a key and ' ' as value

// Generate Variables for PDF Cutsheet from Reference No 

	// Reference No
		$data['reference_no'] = $reference_no;

	// Retrieve Cutsheet Main image 
		// Find the image with the name $reference_no.png
		// From: (Filepath) /assets/img/cutsheetMain/$reference_no.png
		// see if file_exists() if yes, then filepath = /assets/img/cutsheetMain/$reference_no.png
							// if no, then filepath = /assets/img/cutsheetMain/default.png
		// $data['frontView'] = filepath 

		// same process for  backBoxImg , dwgFront , dwgSide

//		$data['frontView'] = "./../../assets/img/cutsheetImg/front/". "F" .


		// $data['sideView'] = "../../assets/img/cutsheetImg/s_35.jpg";

		// $data['frontView'] = "../../assets/img/cutsheetImg/plate/82x82/". 
		// 	"F" .
		// 	$productitem['collection'] .
		// 	$productitem['size'] .
		// 	$productitem['edge_screw'] .
		// 	"-" .
		// 	$productitem['mechanism']. ".jpg";

		$data['frontView'] = "../../assets/img/cutsheetImg/size/b_82x82.jpg";


//		var_dump($data['frontView']);
//		die("Here");

		// if (file_exists($data['frontView'])) 
		// {
		// 	return $data['frontView'];
		// } 
		// else 
		// {
		// 	$data['frontView'] = "../../assets/img/cutsheetImg/plate/noImg.jpg";
		// }
		// clearstatcache();
		

	// Cutsheet "Material"
		if ( $productitem['collection'] == "P")
		{
			$data['material'] = 'BACK-PAINTED GLASS';
		}
		elseif ( $productitem['collection'] == "L") 
		{
			$data['material'] = 'PORCELAIN';
		}
		else
		{
			$data['material'] = 'BRASS';
		}
	// Cutsheet "Plate Dimensions" "Plate Screw Axis" "Backbox Dimensions" "Backbox Screw Axis" "Backbox Reference"
		if ( $productitem['size'] == "3008") 
		{
			$data['size'] = '82 x 82';

			$data['p_dimensions'] = '3.2" x 3.2" x .1" (82 x 82 x 3 mm)';
			$data['p_axis'] = '2.36" (60 mm)';

			$data['b_dimensions'] = '2.6" x 2.8" x 2.4" (67 x 71 x 60 mm)';
			$data['b_axis'] = '2.36" (60 mm)';
			$data['b_reference'] = 'USUL 8060';


			$data['b_img'] = "../../assets/img/cutsheetImg/size/b_82x82.jpg";

			
			$data['saxis'] = 	"../../assets/img/cutsheetImg/size/sax_82x82.jpg";
			
			
			// $tempFrontView = "../../assets/img/cutsheetImg/plate/82x82/". 
			// 	"F" .
			// 	$productitem['collection'] .
			// 	$productitem['size'] .
			// 	$productitem['edge_screw'] .
			// 	"-" .
			// 	$productitem['mechanism']. ".jpg";

			// if (file_exists($tempFrontView)) 
			// {	
			// 	// die('BLERGH');
			// 	// var_dump($tempFrontView);
			// 	$data['frontView'] = $tempFrontView;
			// } 
			// else 
			// {
			// 	$data['frontView'] = "../../assets/img/cutsheetImg/plate/noImg.jpg";
			// }
			// clearstatcache();	
		}
		if ( $productitem['size'] == "3001") 
		{
			$data['size'] = '82 x 117';

			$data['p_dimensions'] = '3.2" x 4.6" x .1" (82 x 117 x 3 mm)';
			$data['p_axis'] = '3.27" (83 mm)';

			$data['b_dimensions'] = '2.6" x 3.8" x 2.4" (67 x 97 x 60 mm)';
			$data['b_axis'] = '3.27" (83 mm)';
			$data['b_reference'] = 'USUL 11560';

			$data['b_img'] = 	"../../assets/img/cutsheetImg/noImg.jpg";
			
			$data['saxis'] = 	"../../assets/img/cutsheetImg/noImg.jpg";
		}
		if ( $productitem['size'] == "3000") 
		{
			$data['size'] = '117 x 82';

			$data['p_dimensions'] = '4.6" x 3.2" x .1" (117 x 82 x 3 mm)';
			$data['p_axis'] = '3.27" (83 mm)';

			$data['b_dimensions'] = '3.8" x 2.6" x 2.4" (67 x 97 x 60 mm)';
			$data['b_axis'] = '3.27" (83 mm)';
			$data['b_reference'] = 'USUL 11560';
		}
		if ( $productitem['size'] == "3003") 
		{
			$data['size'] = '82 x 144';

			$data['p_dimensions'] = '3.2" x 5.7" x .1" (82 x 144 x 3 mm)';
			$data['p_axis'] = '4.6" (117 mm)';

			$data['b_dimensions'] = '2.6" x 5" x 2.4" (67 x 127 x 60 mm)';
			$data['b_axis'] = '4.6" (117 mm)';
			$data['b_reference'] = 'USUL 14260';
		}
		if ( $productitem['size'] == "3002") 
		{
			$data['size'] = '144 x 82';

			$data['p_dimensions'] = '5.7" x 3.2" x .1" (144 x 82 x 3 mm)';
			$data['p_axis'] = '4.6" (117 mm)';

			$data['b_dimensions'] = '5" x 2.6" x 2.4" (67 x 127 x 60 mm)';
			$data['b_axis'] = '4.6" (117 mm)';
			$data['b_reference'] = 'USUL 14260';
		}
	// Cutsheet "Edge"
		if ( $productitem['edge_screw'] == 'A' || $productitem['edge_screw'] == 'C' )
		{
			$data['edge'] = 'CHAMFER';
		}
		else
		{
			$data['edge'] = 'STRAIGHT';
		}
	// Cutsheet "Type of Mechanism" and "power of supply" NEED TO BE DONE... QUERY TO JOIN WITH MECHANISMS TABLE AND FIND MECHANISM TYPES FROM THERE

			// If file does not excit (avoid duplicate names & avoid overriding files
			if (file_exists($pdfFilePath) == FALSE)
			{
				ini_set('memory_limit','32M'); // PDF Size Limit
				$html = $this->load->view('pdf_output', $data, true); // render the view into HTML
				$this->load->library('m_pdf');
				$pdf = $this->m_pdf->load();
				$pdf->SetFooter('www.lvl-usa.com'.'|'.date(DATE_RFC822).'|'.'info@lvl-usa.com'); // Add a footer for good measure <img src="https://davidsimpson.me/wp-includes/images/smilies/icon_wink.gif" alt=";)" class="wp-smiley" scale="0">
				$pdf->WriteHTML($html); // write the HTML into the PDF
				$pdf->Output($pdfFilePath, 'F'); // save to file because we can
			}

// END PDF Generation ===================================================================

		$this->session->set_userdata('reference_no', $reference_no);
		$collection_value = substr($reference_no, 1,1); // Collection => C, E
		$size_value = substr($reference_no, 2,4); // Size => 3008
		$edgescrew_value = substr($reference_no, 6,1); // Edge / Screw => A,B,C,D
		$mechanism_value = substr($reference_no, 8,8); // Mechanism => A1100010
		$finish_value = substr($reference_no, 16,2); // Finish => FA
		$query = "INSERT INTO productitems (user_id, order_id,reference_no, pdf, status, quantity, note, engraving, created_at, updated_at, collection, size, edge_screw, mechanism, finish ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$values = array($this->session->userdata['user']['id'], $productitem['order_id'], $reference_no, ("./../../pdf/".$reference_no), "Pending", $productitem['quantity'], $productitem['note'], $productitem['engraving'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $collection_value, $size_value, $edgescrew_value, $mechanism_value, $finish_value);
		return $this->db->query($query, $values);
	}

	public function retrieveMechanisms($id)
	{
		$query = "SELECT * FROM mechanisms WHERE size_id = ?";
		$values = $id;
		return $this->db->query($query, $values)->result_array();
	}

	public function retrieveEdgeScrew($id)
	{
		// $query = "SELECT * FROM edge_screw WHERE size_id = ?";
		// $values = $id;
		// return $this->db->query($query, $values)->result_array();
		return true;
	}
}