    <div class="center" id="article">Articles</div>  
    <?php if(is_array($articles) && !empty($articles)){          
            foreach($articles as $row){ ?>    
              <div class="center">
                <h2></i><?php echo $row->title .'&nbsp'; ?><a href="<?php echo base_url(); ?>blog/comment_by_book/<?php echo $row->id; ?>"><i class="fa fa-book"></i></a></h2>
                <h3>by <a href="https://www.wikipedia.org/wiki/<?php echo $row->author; ?>"><?php echo $row->author; ?></a></h3>
                <?php echo $row->content; ?>
                <p class="date"> 
                  Posted by.. <?php echo $row->poster; ?>
                  <img src="<?php echo base_url(); ?>assets/images/more.gif" alt="" />  
                  <a href="<?php echo $row->link_more; ?>">Read more</a> 
                  <img src="<?php echo base_url(); ?>assets/images/comment.gif" alt="" /> 
                  <a href="<?php echo base_url(); ?>blog/comment_by_book/<?php echo $row->id; ?>">Comments (<?php echo $row->nr_of_comments; ?>)</a> 
                  <img src="<?php echo base_url(); ?>assets/images/timeicon.gif" alt="" /> 
                  <?php echo $row->date_posted; ?>
                </p>
                <span class="like">
                  <?php echo form_open('blog/vote_like'); ?>
                    <input  type="hidden" 
                            name="id"
                            id="input<?php echo $row->id; ?>"
                            value="<?php echo $row->id; ?>"  />
                    <button type="submit" 
                            id="btn<?php echo $row->id; ?>" 
                            class="like_button" 
                            data-inputid="input<?php echo $row->id; ?>" 
                            data-panelid = "panel<?php echo $row->id; ?>" 
                            value="like"><i class="fa fa-thumbs-up"></i></button>
                    <span class="show_likes" id="panel<?php echo $row->id; ?>" ><?php echo $row->likes; ?></span>
                    <?php echo form_close(); ?> 
                    <?php echo form_open('blog/vote_unlike'); ?>
                    <input  type="hidden" 
                            name="id"
                            id="input<?php echo $row->id; ?>"
                            value="<?php echo $row->id; ?>"  />
                    <button type="submit" 
                            id="ubtn<?php echo $row->id; ?>" 
                            class="unlike_button" 
                            data-inputid="input<?php echo $row->id; ?>" 
                            data-panelid = "upanel<?php echo $row->id; ?>" 
                            value="like"><i class="fa fa-thumbs-down"></i></button>
                    <span class="show_likes" id="upanel<?php echo $row->id; ?>" ><?php echo $row->dislikes; ?></span>                                      
                  <?php echo form_close(); ?>  
                </span> 
              </div>
    <?php } } ?>
    <div class="center" id="pagination_links"><?php echo $links; ?></div>
  </div>
<script type="text/javascript">
    $(function(){
        $('.like_button').on('click',function(){
          var panelid  = $(this).attr('data-panelid');
          var inputid  = $(this).attr('data-inputid');
          var id       = $('#'+inputid).val();
            $.ajax({
                type     : 'POST',
                cache    : 'FALSE',
                url      : "<?php echo base_url('blog/vote_like'); ?>",
                dataType : 'html',
                data     : {"id" : id},
                success  : function(data){
                     $('#'+panelid).html(data);     
                },
                error   : function(){
                     alert('somefin is wrong');
                }
            });
            return false;
        }); 

        $('.unlike_button').on('click',function(){
          var panelid  = $(this).attr('data-panelid');
          var inputid  = $(this).attr('data-inputid');
          var id       = $('#'+inputid).val();
            $.ajax({
                type     : 'POST',
                cache    : 'FALSE',
                url      : "<?php echo base_url('blog/vote_unlike'); ?>",
                dataType : 'html',
                data     : {"id" : id},
                success  : function(data){
                     $('#'+panelid).html(data);     
                },
                error   : function(){
                     alert('somefin is wrong');
                }
            });
            return false;
        }); 
        event.preventDefault();        
    });
</script>
         