
<div class="form-group col-md-12">
<small style="color:gray; margin:3px;">Source: Data from Heath HR MIS</small>




<div id="complete_profile_form">
            <form action="<?php echo site_url(ADMIN_DIR.'complete_profile/manually_complete'); ?>" method="post">
            <input type="hidden" name="employee_id" value="<?php echo $employee_detail->employee_id; ?>" />
            <input type="hidden" name="personal_no" value="<?php echo $employee_detail->personal_no; ?>" />
<input type="hidden" name="date_of_birth"  value="<?php echo $employee_detail->date_of_birth; ?>"/>
            <div class="form-group col-md-6">
                <label for="personal_no">Name:</label>
                <i class="fa fa-user"></i>
                <input required="required" type="text" name="name" class="form-control" id="name" value="<?php echo $employee_detail->employee_name; ?>" placeholder="Your Name" >
              </div>
              <div class="form-group col-md-6">
                <label for="father_name">Father Name</label>
                <i class="fa fa-user"></i>
                <input required="required" type="text" name="father_name" class="form-control" value="<?php echo $employee_detail->father_name; ?>" id="father_name" placeholder="Father Name"  >
              </div>
              
              
              
               <div class="form-group col-md-6">
                <label for="date_of_birth">CNIC</label>
                <i class="fa fa-credit-card"></i>
                <input required="required" type="text" name="cnic" class="form-control" id="cnic" value="<?php echo $employee_detail->cnic; ?>" placeholder="1520104170990"  >
              </div>
              
               <div class="form-group col-md-6">
                <label for="date_of_birth">Mobile No</label>
                <i class="fa fa-mobile"></i>
                <input required="required" type="text" name="mobile_no" class="form-control" value="<?php echo $employee_detail->contact_no; ?>"  id="mobile_no" placeholder="30300022322"  >
              </div>
              
              
              <div class="form-group col-md-6">
              <label for="gender" class="control-label">Gender</label>
              
              <?php 
					$options = get_genders();
                        foreach($options as $option_value => $options_name){
                            
                            $data = array(
                                "name"        => "gender",
                                "id"          => "gender",
                                "value"       => $option_value,
                                "style"       => "width: 17px !important;",
								"required"	  => "required",
                                "class"       => "unif orm"
                                );
								if($option_value ==@$employee_detail->gender){
                                    $data["checked"] = TRUE;
                                }
                            echo form_radio($data)." $options_name";
                            
                        }
                    ?>
              
              
              </div>
              
              <div class="form-group col-md-6">
                <label for="marital_status" class="control-label">Disabled</label>
                 <?php 
					$options = array("Yes" => "Yes", "No" => "No");
                        foreach($options as $option_value => $options_name){
                            
                            $data = array(
                                "name"        => "disability",
                                "id"          => "disability",
                                "value"       => $option_value,
                               "style"       => "width: 17px !important;",
								"required"	  => "required",
                                "class"       => "uni form"
                                );if($option_value == @$employee->disability){
                                    $data["checked"] = TRUE;
                                }
                            echo form_radio($data)."<label for=\"disability\" style=\"margin-left:10px;\">$options_name</label>";
                            
                        }
                    ?>
              </div>
              
              
              <div class="form-group">
                <label for="marital_status" class="control-label">Marital Status</label>

           
            <?php 
					$options = get_marital_status();
                        foreach($options as $option_value => $options_name){
                            
                            $data = array(
                                "name"        => "marital_status",
                                "id"          => "marital_status",
                                "value"       => $option_value,
                               "style"       => "width: 17px !important;",
								"required"	  => "required",
                                "class"       => "uni form"
                                );if($option_value == @$employee->marital_status){
                                    $data["checked"] = TRUE;
                                }
                            echo form_radio($data)."<label for=\"marital_status\" style=\"margin-left:10px;\">$options_name</label>";
                            
                        }
                    ?>
           
              </div>
              
              
              
              
              <div>
                <button  type="submit" class="btn btn-warning">Update and Complete</button>
              </div>
           </form>
            </div>






</div>




