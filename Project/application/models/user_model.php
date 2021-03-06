<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User_model extends CI_Model {
 	public function __construct(){
  		parent::__construct();
 	}

 	function login($username,$password){
  		$this->db->where("username",$username);
  		$this->db->where("password",$password);

  		$query=$this->db->get("user");
  		if($query->num_rows()>0){
   			foreach($query->result() as $rows){
    			//add all data to session
	    		$newdata = array(
	      		'user_id'  => $rows->user_id,
	      		'name'  => $rows->name,
	      		'username'  => $rows->username,
	     	 	  'email'    => $rows->email,
	      		'logged_in'  => TRUE,
	    		);
  			}
   			$this->session->set_userdata($newdata);
   			return true;
  		}
  		return false;
 	}
 	public function add_user(){
  		$data=array(
  			'name'=>$this->input->post('name'),
    		'username'=>$this->input->post('username'),
    		'email'=>$this->input->post('email'),
    		'password'=>md5($this->input->post('password'))
  			);
  			$this->db->insert('user',$data);
 	}
}
?>