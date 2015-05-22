     <div class="comments">
        <h2>Last Comments</h2>
       	<?php if(is_array($last_comment) && !empty($last_comment))
      	foreach($last_comment as $row){?> 
        		<img src="<?php echo base_url(); ?>assets/images/arrow.gif" alt="" />
        		<a href="<?php echo base_url(); ?>blog/comment_by_book/<?php echo $row->article_id; ?>"><?php  echo substr($row->post_content,0,15). '...'; ?></a> <br />
        <?php } ?>
      </div>
    </div>