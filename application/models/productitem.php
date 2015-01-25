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

	public function destroyProductitem($productitem_id)
	{
		$query = "DELETE FROM productitems WHERE id = {$productitem_id}";
		return $this->db->query($query);	
	}

	public function productitemCreate($productitem)
	{
		
		$reference_no = 
			"F" .
			$productitem['collection'] .
			$productitem['size'] .
			$productitem['edge_screw'] .
			"-" .
			$productitem['mechanism'] .
			$productitem['finish'];
		$this->session->set_userdata('reference_no', $reference_no);
		$collection_value = substr($reference_no, 1,1); // Collection => C, E
		$size_value = substr($reference_no, 2,4); // Size => 3008
		$edgescrew_value = substr($reference_no, 6,1); // Edge / Screw => A,B,C,D
		$mechanism_value = substr($reference_no, 8,8); // Mechanism => A1100010
		$finish_value = substr($reference_no, 16,2); // Finish => FA
		$query = "INSERT INTO productitems (user_id, order_id,reference_no, pdf, status, quantity, note, engraving, created_at, updated_at, collection, size, edge_screw, mechanism, finish ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
		$values = array($this->session->userdata['user']['id'], $productitem['order_id'], $reference_no, "myPDFfile", "Pending", $productitem['quantity'], $productitem['note'], $productitem['engraving'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"), $collection_value, $size_value, $edgescrew_value, $mechanism_value, $finish_value);
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