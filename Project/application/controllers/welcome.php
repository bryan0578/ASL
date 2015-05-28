<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
    
    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     *      http://example.com/index.php/welcome
     *  - or -  
     *      http://example.com/index.php/welcome/index
     *  - or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */


    

    public function __construct(){
        parent::__construct();
            $this->load->model('user_model');
    }

    public function index(){
        if(($this->session->userdata('username')!="")){
            $this->view();
    }else{
        $data['title']= 'Home';
        $this->load->view('header',$data);
        $this->load->view("signup", $data);
        $this->load->view('footer',$data);
      }
    }

    
    public function login(){
        $username=$this->input->post('username');
        $password=md5($this->input->post('password'));

        $result=$this->user_model->login($username,$password);
        if($result) $this->view();
        else        $this->index();
    }

    public function signin(){
        $this->load->view('header');
        $this->load->view('signin');
        $this->load->view('footer');
    }
    public function thank(){
        $data['title']= 'Thank';
        $this->load->view('header',$data);
        $this->load->view('thank', $data);

        $this->load->view('signin');
        $this->load->view('footer',$data);

    }

    public function registration(){
        $this->load->library('form_validation');
        // field name, error message, validation rules
        $this->form_validation->set_rules('name', 'Name', 'trim|required|');
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[4]|xss_clean');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
        $this->form_validation->set_rules('confpassword', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_error_delimiters('<div class="alert alert-error">', '</div>');

        if($this->form_validation->run() == FALSE){
            $this->index();
        }else{
            $this->user_model->add_user();
            $this->thank();
        }
    }

    public function logout(){
        $newdata = array(
            'user_id'   =>'',
            'name' => '',
            'username'  =>'',
            'email'     => '',
            'logged_in' => FALSE,
        );
        $this->session->unset_userdata($newdata );
        $this->session->sess_destroy();
        $this->index();
 }


   
    
    public function view(){
        
        $this->load->library('grocery_CRUD');
        $crud = new grocery_CRUD();

        $crud->set_subject('Item');
        $crud->set_table('item');
        $crud->columns('item_id', 'item_name', 'item_price', 'item_sale_price', 'item_stock');
        $crud->required_fields('item_name','item_price', 'item_sale_price', 'item_stock');

        $crud->set_rules('item_price','Item Price','numeric');
        $crud->set_rules('item_sale_price','Item Sale Price','numeric');
        $crud->set_rules('item_stock','Item Stock','numeric');


        $crud->display_as('item_name', 'Item Name');
        $crud->display_as('item_price', 'Item Price');
        $crud->display_as('item_sale_price', 'Item Sale Price');
        $crud->display_as('item_stock', 'Item Stock');
        $output = $crud->render();

        $this->_example_output($output);
        
    }

   function _example_output($output = null){
        $this->load->view('example',$output);    
    }         
  


}









/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */