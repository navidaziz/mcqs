<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
        
class Recover_password extends Admin_Controller{
    
    /**
     * constructor method
     */
    public function __construct(){
        
        parent::__construct();
        $this->load->model("admin/user_model");
		$this->lang->load("users", 'english');
		$this->lang->load("system", 'english');
        //$this->output->enable_profiler(TRUE);
    }
    //---------------------------------------------------------------
    
    
    /**
     * Default action to be called
     */ 
    public function index(){
		
		$this->data['title']  = "Sign Up";
		$this->load->view(ADMIN_DIR."password_recovery/recover_password_form", $this->data);
		
    }
   
    
}        
