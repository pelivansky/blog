    <div id="main">
        <div class="leftmenu">
            <div class="nav">
              <ul>
                <li class="<?php if($this->uri->segment(2)=="home"){echo "activelink";}?>" ><a href="<?php echo base_url(); ?>blog/home">Home</a></li>
                <li class="<?php if($this->uri->segment(2)=="articles"){echo "activelink";}?>" ><a href="<?php echo base_url(); ?>blog/articles">Articles</a></li>
                <li class="<?php if($this->uri->segment(2)=="gallery"){echo "activelink";}?>"><a href="<?php echo base_url(); ?>blog/gallery">Gallery</a></li>
                <li class="<?php if($this->uri->segment(2)=="contact"){echo "activelink";}?>"><a href="<?php echo base_url(); ?>blog/contact">Contact</a></li>
              </ul>
            </div>
            <div class="share_stuff">
                <ul>
                    <li><a class="twt" href="http://www.twitter.com"><i class="fa fa-twitter-square"></i></a></li>
                    <li><a class="pin" href="http://www.pinterest.com"><i class="fa fa-pinterest-square"></i></a></li>
                    <li><a class="fb" href="http://www.facebook.com"><i class="fa fa-facebook-square"></i></a></li>
                    <li><a class="gg" href="http://www.google.com"><i class="fa fa-google-plus-square"></i></a></li>
                </ul>
            </div>  
        </div>
