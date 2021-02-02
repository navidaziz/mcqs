<?php if(!defined('BASEPATH')) exit('Direct access not allowed!');

class Application_reason_model extends MY_Model{
    
    public function __construct(){
        
        parent::__construct();
        $this->table = "application_reasons";
        $this->pk = "application_reason_id";
        $this->status = "status";
        $this->order = "order";
    }
	
 public function validate_form_data(){
	 $validation_config = array(
            
                        array(
                            "field"  =>  "application_reason",
                            "label"  =>  "Application Reason",
                            "rules"  =>  "required"
                        ),
                        
                        array(
                            "field"  =>  "application_reason_detail",
                            "label"  =>  "Application Reason Detail",
                            "rules"  =>  "required"
                        ),
                        
            );
	 //set and run the validation
        $this->form_validation->set_rules($validation_config);
	 return $this->form_validation->run();
	 
	 }	

public function save_data($image_field= NULL){
	$inputs = array();
            
                    $inputs["application_reason"]  =  $this->input->post("application_reason");
                    
                    $inputs["application_reason_detail"]  =  $this->input->post("application_reason_detail");
                    
	return $this->application_reason_model->save($inputs);
	}	 	

public function update_data($application_reason_id, $image_field= NULL){
	$inputs = array();
            
                    $inputs["application_reason"]  =  $this->input->post("application_reason");
                    
                    $inputs["application_reason_detail"]  =  $this->input->post("application_reason_detail");
                    
	return $this->application_reason_model->save($inputs, $application_reason_id);
	}	
	
    //----------------------------------------------------------------
 public function get_application_reason_list($where_condition=NULL, $pagination=TRUE, $public = FALSE){
		$data = (object) array();
		$fields = array("application_reasons.*");
		$join_table = array();
		if(!is_null($where_condition)){ $where = $where_condition; }else{ $where = ""; }
		
		if($pagination){
				//configure the pagination
	        $this->load->library("pagination");
			
			if($public){
					$config['per_page'] = 10;
					$config['uri_segment'] = 3;
					$this->application_reason_model->uri_segment = $this->uri->segment(3);
					$config["base_url"]  = base_url($this->uri->segment(1)."/".$this->uri->segment(2));
				}else{
					$this->application_reason_model->uri_segment = $this->uri->segment(4);
					$config["base_url"]  = base_url(ADMIN_DIR.$this->uri->segment(2)."/".$this->uri->segment(3));
					}
			$config["total_rows"] = $this->application_reason_model->joinGet($fields, "application_reasons", $join_table, $where, true);
	        $this->pagination->initialize($config);
	        $data->pagination = $this->pagination->create_links();
			$data->application_reasons = $this->application_reason_model->joinGet($fields, "application_reasons", $join_table, $where);
			return $data;
		}else{
			return $this->application_reason_model->joinGet($fields, "application_reasons", $join_table, $where, FALSE, TRUE);
		}
		
	}

public function get_application_reason($application_reason_id){
	
		$fields = array("application_reasons.*");
		$join_table = array();
		$where = "application_reasons.application_reason_id = $application_reason_id";
		
		return $this->application_reason_model->joinGet($fields, "application_reasons", $join_table, $where, FALSE, TRUE);
		
	}
	
	


}


	

