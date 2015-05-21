    <div id="prefooter">
      <div class="particles">
        <h2>Top Articles</h2>
	    <?php if(is_array($top_article) && !empty($top_article))          
	            foreach($top_article as $row){ ?>
	        <img src="<?php echo base_url(); ?>assets/images/arrow.gif" alt="" />
	        <a href="#"><?php echo $row->title . ' ,' . $row->author ?></a> <br />
	    <?php } ?>    
      </div>