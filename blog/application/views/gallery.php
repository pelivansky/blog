    <div class="center" id="article">Gallery</div>  
    <?php if(is_array($articles) && !empty($articles)){          
            foreach($articles as $row){ ?>    
              <div class="center">
	              	<div class="gallery">
		                <h2></i><?php echo $row->title .'&nbsp'; ?><a href="<?php echo base_url(); ?>blog/comment_by_book/<?php echo $row->id; ?>"><i class="fa fa-book"></i></a></h2>
		                <h3>by <a href="https://www.wikipedia.org/wiki/<?php echo $row->author; ?>"><?php echo $row->author; ?></a></h3>
		                <p><?php echo $row->content; ?></p>
		                <p> 
		                  <img src="<?php echo base_url(); ?>assets/images/more.gif" alt="" />  
		                  <a href="<?php echo $row->link_more; ?>">Read more</a> 
		                  <img src="<?php echo base_url(); ?>assets/images/comment.gif" alt="" /> 
		                  <a href="<?php echo base_url(); ?>blog/comment_by_book/<?php echo $row->id; ?>">Comments (<?php echo $row->nr_of_comments; ?>)</a> 
		                </p> 
	            	</div>
	            	<div class="gal_img">
	            		 <img src="<?php echo base_url(); ?>assets/images/<?php echo $row->img; ?>"/>
	            		 <button class="buy_btn" type="submit">Buy</button>
	            		 &nbsp&nbsp&nbsp&nbsp<span>Price:<?php echo '&nbsp&nbsp$' .$row->price; ?></span>
	            	</div>
	            	<p style="clear:both">
	            		 ~ . - . ~ ~ . - . ~ ~ . - . ~ ~ . - . ~ ~ . - . ~ ~ . - . ~ ~ . - . ~ ~ . - . ~ ~ . - . ~ ~ . - . ~ ~ . - . ~ ~ . - . ~~ . - .
	            	<p>	 
              </div>
    <?php } } ?>
  </div>