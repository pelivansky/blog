    <div class="center" id="article">Comments</div>  
    <?php if(is_array($article) && !empty($article)){ 
        foreach($article as $row)?>          
          <div class="center">
              <h2><?php echo $row->title; ?></h2>
              <h3>by <a href="https://www.wikipedia.org/wiki/<?php echo $row->author; ?>"><?php echo $row->author; ?></a></h3>
              <?php echo $row->content; ?>
              <p class="date">
                Posted by.. <?php echo $row->poster; ?>
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
    <?php if(is_array($comment) && !empty($comment))
      foreach($comment as $row){?> 
    <div class="center">      
        <h2><?php echo '&nbsp&nbsp&nbsp&nbsp' . $row->name; ?></h2>
        <h3>posted..</h3>
        <?php echo $row->post_content; ?>
        <p class="date">
            <?php 
                $month = array(
                  1 => "Jan", 
                  2 => "Feb", 
                  3 => "Mar", 
                  4 => "Apr", 
                  5 => "May", 
                  6 => "Jun", 
                  7 => "Jul", 
                  8 => "Aug", 
                  9 => "Sep", 
                  10 => "Oct", 
                  11 => "Nov", 
                  12 => "Dec"
                  );
                $returned_day = substr($row->time_posted,8,2);
                $returned_month = substr($row->time_posted,5,2);
                $returned_month = ltrim($returned_month,'0');
                $month = $month[$returned_month];
                echo $month . '.' . $returned_day ;
              ?>
        </p>
        <br />          
    </div> 
    <?php } ?> 
    <div class="center">
        <hr><?php echo heading('Add a comment!',2); ?><br /> 
        <?php echo form_open('blog/add_comment');?> 
        <input type="hidden" name="url_seg" value="<?php echo $this->uri->segment(3); ?>">
        <input type="hidden" name="date" value="<?php echo date("Y/m/d"); ?>">
        <?php echo heading('Name',3); ?>
        <?php 
            $data = array(
                          'name'        => 'name',
                          'maxlength'   => '25',
                          'size'        => '20',
                          'style'       => 'border-radius:4px;'
                        );

            echo form_input($data);
        ?>
        <?php echo validation_errors('name'); ?> 
        <?php echo heading('Comment',3); ?>
        <?php 
            $data = array(
                          'name'        => 'comm',
                          'rows'        => '4',
                          'cols'        => '20',
                          'style'       => 'border-radius:4px;'
                        );

            echo form_textarea($data);
        ?>   
        <hr><h3>...</h3>                      
        <?php echo form_submit('submit','add comment','class="comm_button"'); ?>     
        <?php echo form_close(); ?>
        <hr>
    </div>
  </div>