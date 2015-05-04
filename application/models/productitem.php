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
		mechanisms.id,
		mechanisms.bpe, mechanisms.inv
		FROM productitems
		LEFT JOIN mechanisms ON productitems.mechanism LIKE CONCAT('%', mechanisms.reference_code, '%')
		WHERE productitems.order_id = {$id} GROUP BY mechanisms.reference_code";
//		echo "<pre>";
//		var_dump($query);
//		var_dump($this->db->query($query)->result_array());
//		die('here');
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
		if(!isset($productitem['mechanism']))
		{
			$productitem['mechanism'] = 'xxxxxxxx';
		}
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

		$data['sideView'] = "../../assets/img/cutsheetImg/s_35.jpg";

		// Cutsheet [FINISH]
		if ($productitem['finish'] == "FA")
		{
			$data['finish'] = "Nickel Brossé";
		}
		if ($productitem['finish'] == "FB")
		{
			$data['finish'] = "Nickel Brillant";
		}
		if ($productitem['finish'] == "FC")
		{
			$data['finish'] = "Nickel Microbillé";
		}
		if ($productitem['finish'] == "FD")
		{
			$data['finish'] = "Chrome Mat";
		}
		if ($productitem['finish'] == "FE")
		{
			$data['finish'] = "Chrome Vif";
		}

		if ($productitem['finish'] == "FF")
		{
			$data['finish'] = "Canon de Fusil Anthracite";
		}
		if ($productitem['finish'] == "FG")
		{
			$data['finish'] = "Canon de Fusil Bleu Nuit";
		}
		if ($productitem['finish'] == "CA")
		{
			$data['finish'] = "Bronze Medaille Clair";
		}
		if ($productitem['finish'] == "CB")
		{
			$data['finish'] = "Bronze Medaille Clair Verni Mat";
		}
		if ($productitem['finish'] == "CC")
		{
			$data['finish'] = "Bronze Medaille Allemand";
		}
		if ($productitem['finish'] == "CD")
		{
			$data['finish'] = "Bronze Medaille Fonce";
		}
		if ($productitem['finish'] == "CE")
		{
			$data['finish'] = "Champagne";
		}
		if ($productitem['finish'] == "CF")
		{
			$data['finish'] = "Doré Patiné";
		}
		if ($productitem['finish'] == "CG")
		{
			$data['finish'] = "Laiton Poli Verni";
		}
		if ($productitem['finish'] == "CH")
		{
			$data['finish'] = "Laiton Poli Satiné";
		}
		if ($productitem['finish'] == "SA")
		{
			$data['finish'] = "Nickel Noir Brillant";
		}
		if ($productitem['finish'] == "SB")
		{
			$data['finish'] = "Nickel Noir Mat";
		}
		if ($productitem['finish'] == "SC")
		{
			$data['finish'] = "Chromé Martelé";
		}
		if ($productitem['finish'] == "SD")
		{
			$data['finish'] = "Chrome Vibré";
		}
		if ($productitem['finish'] == "SE")
		{
			$data['finish'] = "Argent Patiné";
		}
		if ($productitem['finish'] == "SF")
		{
			$data['finish'] = "Chrome Microbillé";
		}
		if ($productitem['finish'] == "SG")
		{
			$data['finish'] = "Cuivre Patiné";
		}
		if ($productitem['finish'] == "SH")
		{
			$data['finish'] = "Cuivre Vielli Bouchonné";
		}
		if ($productitem['finish'] == "SI")
		{
			$data['finish'] = "Cuivre Satiné";
		}
		if ($productitem['finish'] == "SJ")
		{
			$data['finish'] = "Bronze Médaille Foncé Barège Brillant";
		}
		if ($productitem['finish'] == "SK")
		{
			$data['finish'] = "Dorure 24 Carats";
		}
		if ($productitem['finish'] == "SL")
		{
			$data['finish'] = "Microbillé Dorure 24 carats";
		}
		if ($productitem['finish'] == "SM")
		{
			$data['finish'] = "Microbillé Canon de Fusil Anthracite";
		}
		if ($productitem['finish'] == "SN")
		{
			$data['finish'] = "Laiton Poli Verni";
		}

		
		// Cutsheet [ COLOR ]

		$data['color'] = "BRASS FOR WARM PLATE FINISHES; CHROME FOR COLD PLATE FINISHES";

		// Cuthseet [TYPE OF MECHANISM]
		// Cuthseet [POWER OF SUPPLY]
		if(isset($productitem['color']))
		{
			$data['mechanismString'] = "Tamper Proof Outlet (No Cover)";
			$data['powerSupplyString'] = "15A 120 VAC";
			$data['color'] = $productitem['color'];
		}
		else
		{
			$query = "SELECT * FROM mechanisms WHERE reference_code = '{$productitem['mechanism']}'";
			$result = $this->db->query($query)->row_array();
			$data['mechanismString'] = "";
			$data['powerSupplyString'] = "";

			if($result['vv'] != 0)
			{

				$data['mech'] = $result['vv']." V&V";
				$data['mechanismString'] .= "ON/OFF TOGGLE SWITCH; REMAINS IN UP/DOWN POSITION<br>";
				$data['powerSupplyString'] .= "125-250 VAC – 15A<br>";
			}
			if($result['bp'] != 0)
			{	
				$data['mech'] = $result['bp']." BP";
				$data['mechanismString'] .= "MOMENTARY PUSH BUTTON; MULTIPLE FUNCTION AND DIMMING CAPABILITIES.<br>";
				$data['powerSupplyString'] .= "CLASS TWO LOW-VOLTAGE SWITCH<br>";
			}
			if($result['bpe'] != 0)
			{
				$data['mech'] = $result['bpe']." BPE";
				$data['mechanismString'] .= "ON/OFF PUSH BUTTON; CLICK WHEN PRESSED.<br>";
				$data['powerSupplyString'] .= "CLASS TWO LOW-VOLTAGE SWITCH<br>";
			}
			if($result['inv'] != 0) 
			{
				$data['mech'] = $result['inv']." INV";
				$data['mechanismString'] .= "MOMENTARY TOGGLE SWITCH; MULTIPLE FUNCTION AND DIMMING CAPABILITIES.<br>";
				$data['powerSupplyString'] .= "125-250 VAC – 15A<br>";
			}
		}

		
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
			
			
			$tempFrontView = 	$productitem['size'] .

								$productitem['edge_screw'] .
								"-" .
								$productitem['mechanism']. ".jpg";

			$data['frontView'] = "../../assets/img/cutsheetImg/plate/82x82/".$tempFrontView;

		}
		if ( $productitem['size'] == "3001") 
		{
			$data['size'] = '82 x 117';

			$data['p_dimensions'] = '3.2" x 4.6" x .1" (82 x 117 x 3 mm)';
			$data['p_axis'] = '3.27" (83 mm)';

			$data['b_dimensions'] = '2.6" x 3.8" x 2.4" (67 x 97 x 60 mm)';
			$data['b_axis'] = '3.27" (83 mm)';
			$data['b_reference'] = 'USUL 11560';

			$tempFrontView = 	$productitem['size'] .

								$productitem['edge_screw'] .
								"-" .
								$productitem['mechanism']. ".jpg";

			$data['frontView'] = "../../assets/img/cutsheetImg/plate/82x117/".$tempFrontView;

			$data['b_img'] = "../../assets/img/cutsheetImg/size/b_82x117.jpg";

			$data['saxis'] = 	"../../assets/img/cutsheetImg/size/sax_82x117.jpg";
		}
		if ( $productitem['size'] == "3000") 
		{

			$data['size'] = '117 x 82';

			$data['p_dimensions'] = '4.6" x 3.2" x .1" (117 x 82 x 3 mm)';
			$data['p_axis'] = '3.27" (83 mm)';

			$data['b_dimensions'] = '3.8" x 2.6" x 2.4" (67 x 97 x 60 mm)';
			$data['b_axis'] = '3.27" (83 mm)';
			$data['b_reference'] = 'USUL 11560';

			$tempFrontView = 	$productitem['size'] .

								$productitem['edge_screw'] .
								"-" .
								$productitem['mechanism']. ".jpg";

			$data['frontView'] = "../../assets/img/cutsheetImg/plate/117x82/".$tempFrontView;

			$data['b_img'] = "../../assets/img/cutsheetImg/size/b_82x117.jpg";

			$data['saxis'] = 	"../../assets/img/cutsheetImg/size/sax_117x82.jpg";

		}
		if ( $productitem['size'] == "3003") 
		{
			$data['size'] = '82 x 144';

			$data['p_dimensions'] = '3.2" x 5.7" x .1" (82 x 144 x 3 mm)';
			$data['p_axis'] = '4.6" (117 mm)';

			$data['b_dimensions'] = '2.6" x 5" x 2.4" (67 x 127 x 60 mm)';
			$data['b_axis'] = '4.6" (117 mm)';
			$data['b_reference'] = 'USUL 14260';

			$tempFrontView = 	$productitem['size'] .

								$productitem['edge_screw'] .
								"-" .
								$productitem['mechanism']. ".jpg";

			$data['frontView'] = "../../assets/img/cutsheetImg/plate/82x144/".$tempFrontView;

			$data['b_img'] = "../../assets/img/cutsheetImg/size/b_82x144.jpg";

			$data['saxis'] = 	"../../assets/img/cutsheetImg/size/sax_82x144.jpg";
		}
		if ( $productitem['size'] == "3002") 
		{
			$data['size'] = '144 x 82';

			$data['p_dimensions'] = '5.7" x 3.2" x .1" (144 x 82 x 3 mm)';
			$data['p_axis'] = '4.6" (117 mm)';

			$data['b_dimensions'] = '5" x 2.6" x 2.4" (67 x 127 x 60 mm)';
			$data['b_axis'] = '4.6" (117 mm)';
			$data['b_reference'] = 'USUL 14260';

			$tempFrontView = 	$productitem['size'] .

								$productitem['edge_screw'] .
								"-" .
								$productitem['mechanism']. ".jpg";

			$data['frontView'] = "../../assets/img/cutsheetImg/plate/144x82/".$tempFrontView;

			$data['b_img'] = "../../assets/img/cutsheetImg/size/b_82x144.jpg";

			$data['saxis'] = 	"../../assets/img/cutsheetImg/size/sax_144x82.jpg";
		}
		if ( $productitem['size'] == "1400") 
		{
			$data['size'] = '100X100 (3.9"X3.9")';

			$data['p_dimensions'] = '3.9" x 3.9" x .5" (100 x 100 x 14 mm)';
			$data['p_axis'] = '2.36" (60 mm)';

			$data['b_dimensions'] = 'n/a';
			$data['b_axis'] = 'n/a';
			$data['b_reference'] = 'n/a';

			$tempFrontView = 	$productitem['size'] .

								$productitem['edge_screw'] .
								"-" .
								$productitem['mechanism']. ".jpg";

			$data['frontView'] = "../../assets/img/cutsheetImg/plate/100/".$tempFrontView;

			$data['b_img'] = "../../assets/img/cutsheetImg/size/b_100x100.jpg";

			$data['saxis'] = 	"../../assets/img/cutsheetImg/size/sax_100x100.jpg";
		}
		if ( $productitem['size'] == "1403") 
		{
			$data['size'] = '100 mm  (3.9") Single Round';

			$data['p_dimensions'] = '3.9" diameter x .5" thick (100 mm / 14 mm)';
			$data['p_axis'] = '2.36" (60 mm)';

			$data['b_dimensions'] = 'n/a';
			$data['b_axis'] = 'n/a';
			$data['b_reference'] = 'n/a';

			$tempFrontView = 	$productitem['size'] .

								$productitem['edge_screw'] .
								"-" .
								$productitem['mechanism']. ".jpg";

			$data['frontView'] = "../../assets/img/cutsheetImg/plate/100/".$tempFrontView;

			$data['b_img'] = "../../assets/img/cutsheetImg/size/b_100x100.jpg";

			$data['saxis'] = 	"../../assets/img/cutsheetImg/size/sax_100x100.jpg";
		}
		if ( $productitem['size'] == "1401D") 
		{
			$data['size'] = '180X100 (7"X3.9") Double Outlet';

			$data['p_dimensions'] = '7.1" x 3.9" x .5" (180 x 100 x 14 mm)';
			$data['p_axis'] = '5.5" (140 mm)';

			$data['b_dimensions'] = 'n/a';
			$data['b_axis'] = 'n/a';
			$data['b_reference'] = 'n/a';

			$tempFrontView = 	$productitem['size'] .

								$productitem['edge_screw'] .
								"-" .
								$productitem['mechanism']. ".jpg";

			$data['frontView'] = "../../assets/img/cutsheetImg/plate/100/".$tempFrontView;

			$data['b_img'] = "../../assets/img/cutsheetImg/size/b_160x180.jpg";

			$data['saxis'] = 	"../../assets/img/cutsheetImg/size/sax_160x180.jpg";
		}
	// Cutsheet "Edge"
		if ( $productitem['edge_screw'] == 'A' || $productitem['edge_screw'] == 'C' )
		{
			$data['edge'] = 'BEVELED';
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

//		var_dump($productitem);
//		var_dump($data);
//		die('in productitem model 4');


// QUERY TO PULL "CONFIGURATION" FROM MECHANISMS TABLE
		$query2 = "SELECT configuration FROM mechanisms WHERE reference_code = '{$productitem['mechanism']}' LIMIT 1";
		$result2 = $this->db->query($query2)->row_array();
		$data['mech_config'] = $result2['configuration'];

		


		// $this->session->set_userdata('reference_no', $reference_no);
		$collection_value = substr($reference_no, 1,1); // Collection => C, E
		// $size_value = substr($reference_no, 2,4); // Size => 3008
		$size_value = $data['size'];
		// $edgescrew_value = substr($reference_no, 6,1); // Edge / Screw => A,B,C,D
		$edgescrew_value = $data['edge'];
		$mechanism_value = $data['mech_config'];
//		$mechanism_value = substr($reference_no, 8,8); // Mechanism => A1100010
// 		$finish_value = substr($reference_no, 16,2); // Finish => FA
		$finish_value = $data['finish'];
		$query = "INSERT INTO productitems (user_id, order_id,reference_no, pdf, status, quantity, note, created_at, updated_at, collection, size, edge_screw, mechanism, finish, engraving1, engraving2, engraving3, engraving4, engraving5, engraving6, engraving7, engraving8) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$values = array($this->session->userdata['user']['id'], $productitem['order_id'], $reference_no, ("./../../pdf/".$reference_no), "Pending", $productitem['quantity'], $productitem['note'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $collection_value, $size_value, $edgescrew_value, $mechanism_value, $finish_value, $productitem['engraving1'], $productitem['engraving2'], $productitem['engraving3'], $productitem['engraving4'], $productitem['engraving5'], $productitem['engraving6'], $productitem['engraving7'], $productitem['engraving8']);
		
		return $this->db->query($query, $values);
	}

	public function retrieveMechanisms($id)
	{
		$query = "SELECT * FROM mechanisms WHERE size_id = ? AND `img`= 1";
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