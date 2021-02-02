<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
        
class Home extends Admin_Controller{
    
    /**
     * constructor method
     */
    public function __construct(){
        
        parent::__construct();
        $this->load->model("admin/application_reason_model");
		$this->lang->load("application_reasons", 'english');
		$this->lang->load("system", 'english');
        //$this->output->enable_profiler(TRUE);
    }
    //---------------------------------------------------------------
    
    
    /**
     * Default action to be called
     */ 
    public function index(){
        $main_page=base_url().ADMIN_DIR.$this->router->fetch_class()."/view";
  		redirect($main_page); 
    }
    //---------------------------------------------------------------


	
    /**
     * get a list of all items that are not trashed
     */
    public function view(){
		
		 $this->data["title"] = "Home";
		$this->data["view"] = ADMIN_DIR."home/home";
		$this->load->view(ADMIN_DIR."layout", $this->data);
    }

    public function topics($topic){
		
        $this->data["title"] = $topic;
        $query = "SELECT `mcqs`.`category`, count(*) as total FROM `mcqs`WHERE `mcqs`.`topic`='".$topic."' 
        GROUP BY `mcqs`.`category`
        ORDER BY id";
        $topics = $this->db->query($query)->result();
        $this->data["topics"] = $topics;
       $this->data["view"] = ADMIN_DIR."home/topics";
       
       $this->load->view(ADMIN_DIR."layout", $this->data);
   }

   public function mcqs($category){
    
    $category = str_replace("_", " ", $category);
    
    $this->data["title"] = $category;
    
    $query = "SELECT * FROM `mcqs`WHERE `mcqs`.`category`='".$category."' 
              AND id NOT IN(SELECT mcq_id  FROM user_mcqs WHERE user_id = '".$this->session->userdata("user_id")." AND `status`=1') 
              LIMIT 1";
    $questions = $this->db->query($query)->result();
    $this->data["questions"] = $questions;
   $this->data["view"] = ADMIN_DIR."home/mcqs";
   
   $this->load->view(ADMIN_DIR."layout", $this->data);
}
public function add_user_mcqs(){
    $mcq_id = $this->input->post("mcq_id");
    $correct = $this->input->post("correct");
    if($correct==1){
        $status=1;
    }else{
        $status=0;
    }
    $query="INSERT INTO `user_mcqs`(`user_id`, `mcq_id`, `correct_incorrect`, `status`) 
            VALUES ('".$this->session->userdata("user_id")."','".$mcq_id."','". $correct."', '".$status."')";
    if($this->db->query($query)){
        echo 1;
    }
}

    
    
}        
