
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
  <a href="<?php echo site_url(ADMIN_DIR."home/mcqs/".str_replace(" ", "_", $topic->category)); ?>"
    <li class="list-group-item" style="border-left: 40px solid hsl(27deg 91% 55%) ">
    <span style="margin-left: -50px; position: absolute; font-size: 25px; margin-top: -10px; color:white;"><?php echo $count++; ?></span>
    <?php  echo $topic->category; ?> <span class="pull-right"><?php  echo $topic->total; ?></span>
    </li>
  </a>
  <?php }
} else {
 
  echo "You complete this section. would you like to retry again?";
} 

   ?>
</ul>
   
  
</div>