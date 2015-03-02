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
	public function updateOrder($order_id)
	{
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
		$objPHPExcel->getActiveSheet()->SetCellValue('A1', 'OVER');
		$objPHPExcel->getActiveSheet()->SetCellValue('A2', '9');
		$objPHPExcel->getActiveSheet()->SetCellValue('A3', '99990');
		$objPHPExcel->getActiveSheet()->SetCellValue('A4', '0');
		$objPHPExcel->getActiveSheet()->SetCellValue('A5', '0');
		$objPHPExcel->getActiveSheet()->SetCellValue('A6', '!');


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