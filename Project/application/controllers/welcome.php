<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function index(){
		$this->load->view('header');
		$this->load->view('signin');
		

		
				
	}
	public function view(){
		$this->load->view('header');
		

		$this->load->model('Item');
		$items = $this->Item->get();
		$merchandise = array();
		$items = $this->Item->get();
		foreach ($items as $item) {
			$merchandise[] = array(
				$item->item_id,
				$item->item_name,
				$item->item_price,
				$item->item_sale_price,
				$item->item_stock,
				anchor('welcome/add', 'Add'). ' | ' .
				anchor('welcome/delete'.$item->item_id, 'Delete') . ' | ' .
				anchor('welcome/updateItem', 'Update'),
				);		
		}
		$this->load->view('inventory',array(
				'inventory' => $merchandise,
			));
		
		$this->load->view('footer');
	}
	public function add(){
		$this->load->view('header');
		$this->load->model('Item');
		$items = $this->Item->get();
        $this->form_validation->set_rules('item_name', 'Item Name', 'required');
		$this->form_validation->set_rules('item_price', 'Item Price', 'required');
		$this->form_validation->set_rules('item_sale_price', 'Item Sale Price', 'required');
		$this->form_validation->set_rules('item_stock', 'Item Stock', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        if(!$this->form_validation->run()){
        	$this->load->view('inventory_form');
        }else{
        	$this->load->model('Item');
        	$item = new Item();
        	$item->item_name = $this->input->post('item_name');
        	$item->item_price = $this->input->post('item_price');
        	$item->item_sale_price = $this->input->post('item_sale_price');
        	$item->item_stock = $this->input->post('item_stock');
        	$item->save();
        	 $this->load->view('inventory_form_success', array(
                'item' => $item,
                ));
        	 
	
        }
        $merchandise = array();
		$items = $this->Item->get();
		foreach ($items as $item) {
			$merchandise[] = array(
				$item->item_id,
				$item->item_name,
				$item->item_price,
				$item->item_sale_price,
				$item->item_stock,
				anchor('welcome/add', 'Add'). ' | ' .
				anchor('welcome/delete'.$item->item_id, 'Delete') . ' | ' .
				anchor('welcome/updateItem', 'Update'),
				);		
		}
		$this->load->view('inventory',array(
				'inventory' => $merchandise,
			));
    	 
        $this->load->view('footer');

	}
	public function register(){
		$this->load->view('header');
		$this->load->model('User');
		$users = $this->User->get();
        $this->form_validation->set_rules('name', 'Name', 'required');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');
        if(!$this->form_validation->run()){
        	$this->load->view('signup');
        }else{
        	$this->load->model('User');
        	$user = new User();
        	$user->name = $this->input->post('name');
        	$user->username = $this->input->post('username');
        	$user->email = $this->input->post('email');
        	$user->password = $this->input->post('password');
        	$user->save();
        	$this->load->view('user_form_success',array(
        		'user' => $user,
        		));

        }
        $this->load->view('footer');
	}
	
	

	
}









/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */