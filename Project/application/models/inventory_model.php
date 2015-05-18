<?php

class Inventory_Model extends CI_Model{

	public function getData(){
		$query = $this->db->get('item');
		return $query->result();
	}
}
?>