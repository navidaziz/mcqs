<?php if(!defined('BASEPATH')) exit('Direct access not allowed!');

class Transfer_application_model extends MY_Model{
    
    public function __construct(){
        
        parent::__construct();
        $this->table = "transfer_applications";
        $this->pk = "transfer_application_id";
        $this->status = "status";
        $this->order = "order";
    }
	
 public function validate_form_data(){
	 $validation_config = array(
            
            );
	 //set and run the validation
        $this->form_validation->set_rules($validation_config);
	 return $this->form_validation->run();
	 
	 }	

public function save_data($image_field= NULL){
	$inputs = array();
            
	return $this->transfer_application_model->save($inputs);
	}	 	

public function update_data($transfer_application_id, $image_field= NULL){
	$inputs = array();
            
	return $this->transfer_application_model->save($inputs, $transfer_application_id);
	}	
	
    //----------------------------------------------------------------
 public function get_transfer_application_list($where_condition=NULL, $pagination=TRUE, $public = FALSE){
		$data = (object) array();
		$fields = array("transfer_applications.*"
                , "districts.district_name"
            
                , "duty_stations.duty_station"
            );
		$join_table = array(
            "districts" => "districts.district_id = transfer_applications.district_id",
        
            "duty_stations" => "duty_stations.duty_station_id = transfer_applications.facility_id",
        );
		if(!is_null($where_condition)){ $where = $where_condition; }else{ $where = ""; }
		
		if($pagination){
				//configure the pagination
	        $this->load->library("pagination");
			
			if($public){
					$config['per_page'] = 10;
					$config['uri_segment'] = 3;
					$this->transfer_application_model->uri_segment = $this->uri->segment(3);
					$config["base_url"]  = base_url($this->uri->segment(1)."/".$this->uri->segment(2));
				}else{
					$this->transfer_application_model->uri_segment = $this->uri->segment(4);
					$config["base_url"]  = base_url(ADMIN_DIR.$this->uri->segment(2)."/".$this->uri->segment(3));
					}
			$config["total_rows"] = $this->transfer_application_model->joinGet($fields, "transfer_applications", $join_table, $where, true);
	        $this->pagination->initialize($config);
	        $data->pagination = $this->pagination->create_links();
			$data->transfer_applications = $this->transfer_application_model->joinGet($fields, "transfer_applications", $join_table, $where);
			return $data;
		}else{
			return $this->transfer_application_model->joinGet($fields, "transfer_applications", $join_table, $where, FALSE, TRUE);
		}
		
	}

public function get_transfer_application($transfer_application_id){
	
		$fields = array("transfer_applications.*"
                , "districts.district_name"
            
                , "duty_stations.duty_station"
            );
		$join_table = array(
            "districts" => "districts.district_id = transfer_applications.district_id",
        
            "duty_stations" => "duty_stations.duty_station_id = transfer_applications.facility_id",
        );
		$where = "transfer_applications.transfer_application_id = $transfer_application_id";
		
		return $this->transfer_application_model->joinGet($fields, "transfer_applications", $join_table, $where, FALSE, TRUE);
		
	}
	
	


}


	

