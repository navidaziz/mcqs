
<ul class="list-group">
  

<?php
$query = "SELECT topic FROM `mcqs` GROUP BY topic";
$topics = $this->db->query($query)->result();
if (count($topics) > 0) {
  // output data of each row
  foreach($topics as $topic) { ?>
  <a href="<?php echo site_url(ADMIN_DIR."home/topics/$topic->topic"); ?>"
    <li class="list-group-item"><?php  echo $topic->topic; ?></li>
  </a>
  <?php }
} else {
  echo "0 results";
} 

   ?>
</ul>
    </div>
  </div>
  
</div>