<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
class Item_model extends CI_Model {
 
  public function __construct() {
    parent::__construct();
  }
 
  /**
   * This funtion takes id as a parameter and will fetch the record.
   * If id is not provided, then it will fetch all the records form the table.
   * @param int $id
   * @return mixed
   */
  public function get($item_id = null) {
    $this->db->select()->from('item');
 
    // where condition if id is present
    if ($item_id != null) {
      $this->db->where('item_id', $item_id);
    }
    else {
      $this->db->order_by('item_id');
    }
 
    $query = $this->db->get();
 
    if ($item_id != null) {
      return $query->row_array(); // single row
    }
    else {
      return $query->result_array(); // array of result
    }
  }
 
  /**
   * This function will delete the record based on the id
   * @param $id
   */
  public function remove($item_id) {
    $this->db->where('item_id', $item_id);
    $this->db->delete('item');
  }
 
  /**
   * This function will take the post data passed from the controller
   * If id is present, then it will do an update
   * else an insert. One function doing both add and edit.
   * @param $data
   */
  public function add($data) {
    if (isset($data['item_id'])) {
      $this->db->where('item_id', $data['item_id']);
      $this->db->update('item',$data); // update the record
    }
    else {
      $this->db->insert('item', $data); // insert new record
    }
  }
}