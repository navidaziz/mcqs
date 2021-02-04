
 <div style="margin: 10px;" >
 <div class="divide-10"></div>
 <h5><strong><a href="<?php echo site_url(ADMIN_DIR . "home"); ?>">
 <?php echo $title; ?> </a> </strong></h5>
     
<ul class="list-group" >
  

<?php

if (count($topics) > 0) {
  // output data of each row
  $count=1;
  foreach($topics as $topic) { ?>

<?php 
    $query = "SELECT COUNT(*) as `total` FROM `mcqs`WHERE `mcqs`.`category`='".$topic->category."' 
    AND id NOT IN(SELECT mcq_id  FROM user_mcqs WHERE user_id = '".$this->session->userdata("user_id")."' 
    AND `status`='1')";
     if($this->db->query($query)->result()[0]->total==0){
       $complete =  ' background-color:#90ee90; ';
       $complete_text = '<strong style="color:green;">Completed</strong>';
     }else{
      if($this->db->query($query)->result()[0]->total==$topic->total){

        $complete ='';
        $complete_text='';

      }else{
        $complete =' background-color:#FFEFD5; ';
        $complete_text='<strong style="color:green;">Inprogress '.($topic->total-$this->db->query($query)->result()[0]->total).' / </strong>';
      }
      
     }
    ?>

  <a href="<?php echo site_url(ADMIN_DIR."home/mcqs/".str_replace(" ", "_", $topic->category)); ?>"
    <li class="list-group-item" style="border-left: 40px solid hsl(27deg 91% 55%); <?php echo  $complete; ?> ">
    <span style="margin-left: -50px; position: absolute; font-size: 25px; margin-top: -10px; color:white;"><?php echo $count++; ?></span>
    <?php  echo $topic->category; ?> 
    
    
    
    <span class="pull-right"> <?php echo $complete_text; ?> <?php  echo $topic->total; ?></span>
    </li>
  </a>
  <?php }
} else {
 
  echo "You complete this section. would you like to retry again?";
} 

   ?>
</ul>
   
  
</div>