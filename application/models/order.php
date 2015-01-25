<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order extends CI_Model {

	public function retrieveAll($id)
	{
		$query ="SELECT * FROM orders WHERE user_id = ?";
		return $this->db->query($query, $id)->result_array();
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
		$objPHPExcel = new PHPExcel(); // Create a new PHPExcel Object
		$objPHPExcel->createSheet(); // Create a new Sheet
		$myWorkSheet = new PHPExcel_Worksheet($objPHPExcel, "My Data");
		$objPHPExcel->addSheet($myWorkSheet, 0);
		$objPHPExcel->getActiveSheet()->setCellValue('A1', 'PHPExcel');
		$objPHPExcel->getActiveSheet()->setCellValue('A2', 12345.6789);
		$objPHPExcel->getActiveSheet()->setCellValue('A3', TRUE);
		$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
		$objWriter->setOffice2003Compatibility(true);
//		$objWriter->save("05featuredemo.xlsx");
//
//$objWriter->save("05featuredemo.xlsx");
//		$objPHPExcel = PHPExcel_IOFactory::load("05featuredemo.xlsx");
		$objWriter->save('php://output');

//		$filename = "test.xlsx";
//		$objReader = PHPExcel_IOFactory::createReader('Excel2007');
//		$objReader->setReadDataOnly(true); // previously setreaddataonly(true)
//		$objPHPExcel = $objReader->load($filename);
//		$objWorksheet = $objPHPExcel->getActiveSheet();
//		$objWorksheet = $objPHPExcel->setActiveSheetIndex(0);



//		$objPHPExcel = new PHPExcel();
		// retrieve order info
		$query ="SELECT * FROM productitems WHERE productitems.order_id = ?";
		$value = $order_id;
		$order_productitems = $this->db->query($query, $value)->result_array();
		$query ="SELECT * FROM orders WHERE orders.id = ?";
		$order = $this->db->query($query, $value)->row_array();

//		echo "<table colspan='2'>";
//		echo "<tr><td>Test</td></tr>";
//		echo "</table>";

		echo "<pre>";
		var_dump($order_productitems);
		var_dump($order);
		die('here');
		// retrieve productitem info
		// collaborate and save
		$query ="UPDATE order SET excelsheet = 'excelURL' WHERE productitems.order_id = ?";
		$value = $order_id;
		$this->db->query($query, $value);
		$query ="DELETE FROM orders WHERE orders.id = ?";
		return $this->db->query($query, $value);
	}




	public function retrieveOrderItems($order_id)
	{
		$query ="SELECT * FROM productitems WHERE order_id = ?";
		return $this->db->query($query, $order_id)->result_array();
	}
	public function saveNote($values)
	{
		$query ="UPDATE orders SET client_note = ? WHERE id = ?";
		$values = array($values['client_note'], $values['order_id']);
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
}