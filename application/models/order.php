<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function retrieveAll($id)
	{
		$query ="SELECT * FROM orders WHERE user_id = ?";
		return $this->db->query($query, intval($id))->result_array();
	}
	public function adminRetrieveAllOrders()
	{
		$query ="SELECT *, orders.id AS 'order_id', orders.created_at AS 'orders_created_at', orders.updated_at AS 'orders_updated_at' FROM orders LEFT JOIN users ON orders.user_id = users.id";
		return $this->db->query($query)->result_array();
	}
	
	public function createOrder($user_id)
	{
		$query ="INSERT INTO orders (user_id, status, created_at ,updated_at) VALUES (?, ?, NOW(), NOW())";
		$values = array($user_id, 'Pending');
		$this->db->query($query, $values);
//		die('here @@@@@@@@@@');
		return $this->db->insert_id();
	}
	public function deleteOrder($order_id)
	{	

		$query ="DELETE FROM productitems WHERE productitems.order_id = ?";
		$value = $order_id;
		$this->db->query($query, $value);
		$query ="DELETE FROM orders WHERE orders.id = ?";
		return $this->db->query($query, $value);
	}

	// updateOrder on Save Order Click - Generate Excel Doc
	public function updateOrder($order_id, $order_items)
	{
		$order = $this->retrieveOrder($order_id);





		$this->load->library('PHPExcel.php');

// Create new PHPExcel object
		$objPHPExcel = new PHPExcel();
		$objPHPExcel->createSheet(); // Create a new Sheet

// Set properties
		$objPHPExcel->getProperties()->setCreator("ggggg");
		$objPHPExcel->getProperties()->setLastModifiedBy("SM DK");
		$objPHPExcel->getProperties()->setTitle("Title Test Document");
		$objPHPExcel->getProperties()->setSubject("Subject Test");
		$objPHPExcel->getProperties()->setDescription("Test Document Description.");

// Add some data
		$objPHPExcel->setActiveSheetIndex(0);
		// A Column
		$objPHPExcel->getActiveSheet()->getStyle('A2')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('A2', 'Contact');
		$objPHPExcel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('A3', 'Firm:');
		$objPHPExcel->getActiveSheet()->getStyle('A4')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('A4', 'Address:');
		$objPHPExcel->getActiveSheet()->getStyle('A6')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('A6', 'Phone');

		// B Column
		$objPHPExcel->getActiveSheet()->SetCellValue('B2', '[Sample:] James Johson'); //INSERT FIRST/LAST NAME HERE
		$objPHPExcel->getActiveSheet()->SetCellValue('B3', '[Sample:] FIRM NAME INC'); //INSERT FIRM  HERE
		$objPHPExcel->getActiveSheet()->SetCellValue('B4', '[Sample:] 12345 N 100 Avenue '); //INSERT ADDRESS  HERE
		$objPHPExcel->getActiveSheet()->SetCellValue('B6', '[Sample:] 123-456-7890'); //INSERT PHONE NUMBER  HERE

		// G Column
		$objPHPExcel->getActiveSheet()->getStyle('G2')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('G2', 'Data of Estimate:');
		$objPHPExcel->getActiveSheet()->getStyle('G3')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('G3', 'Project Number:');
		$objPHPExcel->getActiveSheet()->getStyle('G4')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('G4', 'Project Name:');
		$objPHPExcel->getActiveSheet()->getStyle('G5')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('G5', 'Project Address:');

		// I Column
		$objPHPExcel->getActiveSheet()->SetCellValue('I2', '[Sample:] 12.08.2014');
		$objPHPExcel->getActiveSheet()->SetCellValue('I3', '[Sample:] P-0065');
		$objPHPExcel->getActiveSheet()->SetCellValue('I4', '[Sample:] TBD');
		$objPHPExcel->getActiveSheet()->SetCellValue('I5', '[Sample:] TBD');
		$objPHPExcel->getActiveSheet()->SetCellValue('I6', '[Sample:] TBD');

		// L Column
		$objPHPExcel->getActiveSheet()->getStyle('L2')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('L2', 'Sales Rep:');
		$objPHPExcel->getActiveSheet()->getStyle('L3')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('L3', 'Region:');
		$objPHPExcel->getActiveSheet()->getStyle('L5')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('L5', 'Lead Time:');

		// M Column
		$objPHPExcel->getActiveSheet()->SetCellValue('M2', '[Sample:] Company Repersentative');
		$objPHPExcel->getActiveSheet()->SetCellValue('M3', '[Sample:] EAST COAST');
		$objPHPExcel->getActiveSheet()->SetCellValue('M5', '[Sample:] 8-10 WEEKS UPON ORDER APPROVAL AND RECEIPT OF DEPOSIT');


		// Row Headers
//		$worksheet->getStyle('A1')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->getStyle('A8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('A8', 'ROOM');

		$objPHPExcel->getActiveSheet()->getStyle('B8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('B8', 'REF #');

		$objPHPExcel->getActiveSheet()->getStyle('C8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('C8', 'QTY');


		$objPHPExcel->getActiveSheet()->getStyle('D8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('D8', 'FINISH');

		$objPHPExcel->getActiveSheet()->getStyle('E8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('E8', 'SIZE');

		$objPHPExcel->getActiveSheet()->getStyle('F8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('F8', 'PLATE COST');

		$objPHPExcel->getActiveSheet()->getStyle('G8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('G8', 'MECHANISM TYPE/QTY');

		$objPHPExcel->getActiveSheet()->getStyle('H8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('H8', 'MECHANISM PROVIDED BY');

		$objPHPExcel->getActiveSheet()->getStyle('I8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('I8', 'V&VERSER COST');

		$objPHPExcel->getActiveSheet()->getStyle('J8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('J8', 'TOTAL # ENGRAVING');

		$objPHPExcel->getActiveSheet()->getStyle('K8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('K8', 'ENGRAVING COST');

		$objPHPExcel->getActiveSheet()->getStyle('L8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('L8', 'BACK BOX');

		$objPHPExcel->getActiveSheet()->getStyle('M8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('M8', 'MELKIT');

		$objPHPExcel->getActiveSheet()->getStyle('N8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('N8', 'TOTAL');

		$objPHPExcel->getActiveSheet()->getStyle('O8')->getFont()->setBold(true);
		$objPHPExcel->getActiveSheet()->SetCellValue('O8', 'EDGES: STRAIGHT / BEVELED');





//		echo "<pre>";
//		var_dump($order);
//		var_dump($order_items);
//		die('here');
		$rowCounter = 9; // Starting Row #
		foreach($order_items as $order_item)
		{
//			echo $rowCounter;
//			var_dump($order_item);

			// Productitem.note = ROOM
			$objPHPExcel->getActiveSheet()->SetCellValue("A".$rowCounter, $order_item['note']); // Room Name / Note - Order Item from productitems, this is a productitem (1)
			// Productitem.reference_no = REF #
			$objPHPExcel->getActiveSheet()->SetCellValue("B".$rowCounter, $order_item['reference_no']);

			// Productitem.quantity = QTY
			$objPHPExcel->getActiveSheet()->SetCellValue("C".$rowCounter, $order_item['quantity']);

			// Productitem.finish = FINISH++
			$finish = "";
			if($order_item['finish'] =='FA'){ $finish = "Nickel Brossé"; }
			else if($order_item['finish'] =='FB'){ $finish = "Nickel Brillant"; }
			else if($order_item['finish'] =='FC'){ $finish = "Nickel Microbillé"; }
			else if($order_item['finish'] =='FD'){ $finish = "Chrome Mat"; }
			else if($order_item['finish'] =='FE'){ $finish = "Chrome Vif"; }
			else if($order_item['finish'] =='FF'){ $finish = "Canon de Fusil Anthracite"; }
			else if($order_item['finish'] =='FG'){ $finish = "Canon de Fusil Bleu Nuit"; }
			else if($order_item['finish'] =='CA'){ $finish = "Bronze Medaille Clair"; }
			else if($order_item['finish'] =='CB'){ $finish = "Bronze Medaille Clair Verni Mat"; }
			else if($order_item['finish'] =='CC'){ $finish = "Bronze Medaille Allemand"; }
			else if($order_item['finish'] =='CD'){ $finish = "Bronze Medaille Fonce"; }
			else if($order_item['finish'] =='CE'){ $finish = "Champagne"; }
			else if($order_item['finish'] =='CF'){ $finish = "Doré Patiné"; }
			else if($order_item['finish'] =='CG'){ $finish = "Laiton Poli Verni"; }
			else if($order_item['finish'] =='CH'){ $finish = "Laiton Poli Satiné"; }
			else if($order_item['finish'] =='SA'){ $finish = "NICKEL NOIR BRILLANT"; }
			else if($order_item['finish'] =='SB'){ $finish = "Nickel Noir Mat"; }
			else if($order_item['finish'] =='SC'){ $finish = "CHROME MARTELE"; }
			else if($order_item['finish'] =='SD'){ $finish = "Chrome Vibré"; }
			else if($order_item['finish'] =='SE'){ $finish = "Argent Patiné"; }
			else if($order_item['finish'] =='SF'){ $finish = "Chrome Microbillé"; }
			else if($order_item['finish'] =='SG'){ $finish = "Cuivre Patiné"; }
			else if($order_item['finish'] =='SH'){ $finish = "Cuivre Vielli Bouchonné"; }
			else if($order_item['finish'] =='SI'){ $finish = "Cuivre Satiné"; }
			else if($order_item['finish'] =='SJ'){ $finish = "Bronze Médaille Foncé Barège Brillant"; }
			else if($order_item['finish'] =='SK'){ $finish = "Dorure 24 Carats"; }
			else if($order_item['finish'] =='SL'){ $finish = "Microbillé Dorure 24 carats"; }
			else if($order_item['finish'] =='SM'){ $finish = "Microbillé Canon de Fusil Anthracite"; }
			else if($order_item['finish'] =='SN'){ $finish = "POLI VERNI OR MAT"; }

			$objPHPExcel->getActiveSheet()->SetCellValue("D".$rowCounter, $finish );

			// Productitem.size = SIZE (mm)
			$sizeString = '';
			if ( $order_item['size'] == "3008")
				$sizeString ='3.2" x 3.2" x .1" (82 x 82 x 3 mm)';

			if ( $order_item['size'] == "3001")
				$sizeString = '3.2" x 4.6" x .1" (82 x 117 x 3 mm)';

			if ( $order_item['size'] == "3000")
				$sizeString = '4.6" x 3.2" x .1" (117 x 82 x 3 mm)';

			if ( $order_item['size'] == "3003")
				$sizeString = '3.2" x 5.7" x .1" (82 x 144 x 3 mm)';

			if ( $order_item['size'] == "3002")
				$sizeString = '5.7" x 3.2" x .1" (144 x 82 x 3 mm)';

			$objPHPExcel->getActiveSheet()->SetCellValue("E".$rowCounter, $sizeString);


			// $ = PLATE COST
			$objPHPExcel->getActiveSheet()->SetCellValue("F".$rowCounter, "$");


			// Productitem.vv, Productitem.bp, Productitem.bpe Productitem.inv = MECHANISM TYPE/QTY
			$mechanismString = '';
			if($order_item['inv'])
				$mechanismString .= $order_item['inv'] . " INV ";
			if($order_item['bp'])
				$mechanismString .= $order_item['bp'] . " BP ";
			if($order_item['bpe'])
				$mechanismString .= $order_item['bpe'] . " BPE ";
			if($order_item['vv'])
				$mechanismString .= $order_item['vv'] . " VV ";
			$objPHPExcel->getActiveSheet()->SetCellValue("G".$rowCounter, $mechanismString);

			// MELJAC = MECHANISM PROVIDED BY
			$objPHPExcel->getActiveSheet()->SetCellValue("H".$rowCounter, "MELJAC");

			// $ = V&VESER
			$objPHPExcel->getActiveSheet()->SetCellValue("I".$rowCounter, "$");

			// Productitem.engraving->WordCount()->retrieveSum() = TOTAL # ENGRAVING
			$engravingCount=0;
			for($i=0; $i < strlen($order_item['engraving']); $i++)
				if ($order_item['engraving'][$i] != ';')
					$engravingCount++;

			$objPHPExcel->getActiveSheet()->SetCellValue("J".$rowCounter, $engravingCount);

			// $ = ENGRAVING COST
			$objPHPExcel->getActiveSheet()->SetCellValue("K".$rowCounter, "$");

			// $ = BLACK BOX
			$objPHPExcel->getActiveSheet()->SetCellValue("L".$rowCounter, "$");

			// $ = MELKIT
			$objPHPExcel->getActiveSheet()->SetCellValue("M".$rowCounter, "$");

			// $ = TOTAL
			$objPHPExcel->getActiveSheet()->SetCellValue("N".$rowCounter, "$");

			// TBD = EDGES: STRAIGHT/BEVELED
			$objPHPExcel->getActiveSheet()->SetCellValue("O".$rowCounter, "TBD");


			$rowCounter++; // Increment row # at the end of the row.
		}

//		die("here in update order");







// Save Excel 2007 file
		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->save("excel/excelOrder".$order_id.".xlsx");

// Save Excel Path to DB
		$query ="UPDATE orders SET excelsheet = './excelOrder".$order_id."' WHERE id = ?";
		return $this->db->query($query, $order_id);
	}




	public function retrieveOrderItems($order_id)
	{
		$query ="SELECT * FROM productitems WHERE order_id = ?";
		return $this->db->query($query, $order_id)->result_array();
	}
	public function updateOrderInfo($values)
	{
		$query ="UPDATE orders SET client_note = ?, project_name = ?, project_address = ? WHERE id = ?";
		$values = array($values['client_note'], $values['project_name'], $values['project_address'], $values['order_id']);
		return $this->db->query($query, $values);
	}
	public function saveAdminNote($values)
	{
		$query ="UPDATE orders SET admin_note = ? WHERE id = ?";
		$values = array($values['admin_note'], $values['order_id']);
		return $this->db->query($query, $values);
	}
	public function updateStatus($values)
	{
		$query ="UPDATE orders SET order_no = ?, status = ? WHERE id = ?";
		$values = array($values['order_no'], $values['status'], $values['order_id']);
		return $this->db->query($query, $values);
	}
	public function retrieveOrder($order_id)
	{
		$query ="SELECT * FROM orders WHERE id = ?";
		return $this->db->query($query, $order_id)->row_array();
	}


	// TEMP - Catalog Emails

	public function tradeEmail($values)
	{
		$query = "INSERT INTO tradeEmails (name, email, created_at, updated_at) VALUES (?, ?, NOW(), NOW())";
		return $this->db->query($query, $values);
	}
	public function requestCatalog($values)
	{
		if(isset($values['address'])) // FEDEX  + || isset($values['city']) || isset($values['state']) || isset($values['postal_code'])
		{
			$query = "INSERT INTO catalogs (delivery_method, first_name, last_name, company_name, email, profession, address, city, state, postal_code, country, contact_number, created_at, updated_at) VALUES (?,?,?,?,?,?,?,?,?,?,?,?, NOW(), NOW())";
			$this->db->query($query, $values);
			return "fedex";
		}
		else // DIGITAL
		{
			$query = "INSERT INTO catalogs (delivery_method, first_name, last_name, company_name, email, profession, created_at, updated_at) VALUES (?,?,?,?,?,?, NOW(), NOW())";
			$this->db->query($query, $values);
			return "digital";
		}
	}
}