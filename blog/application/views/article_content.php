    <div class="center" id="article">Articles</div>  
    <?php if(is_array($articles) && !empty($articles))          
            foreach($articles as $row){ ?>    
              <div class="center">
                <h2><?php echo $row->title; ?></h2>
                <h3>by <a href="https://www.wikipedia.org/wiki/<?php echo $row->author; ?>"><?php echo $row->author; ?></a></h3>
                <?php echo $row->content; ?>
                <p class="date">
                  <img src="<?php echo base_url(); ?>assets/images/more.gif" alt="" />  
                  <a href="<?php echo $row->link_more; ?>">Read more</a> 
                  <img src="<?php echo base_url(); ?>assets/images/comment.gif" alt="" /> 
                  <a href="#">Comments (<?php echo $row->nr_of_comments; ?>)</a> 
                  <img src="<?php echo base_url(); ?>assets/images/timeicon.gif" alt="" /> 
                  <?php echo $row->date_posted; ?>
                </p>
                <br />
              </div>
    <?php } ?>
    <div class="center" id="pagination_links"><?php echo $links; ?></div>
  </div>
         