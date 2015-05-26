	<div class="center" id="article">Contact</div> 
	<div class="center">
		<h2>our contact info</h2>
		<h3>some info right here...</h3>
		<h3>info...</h3>
		<h3>info...</h3>
		<h3>info...</h3>
	</div>
	<div class="center">
		<h2>Leave a message</h2>
		<div>
			<?php echo form_open('blog/contact'); ?>
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
			<?php echo heading('Email',3); ?>
	        <?php 
	            $data = array(
	                          'name'        => 'email',
	                          'maxlength'   => '25',
	                          'size'        => '20',
	                          'style'       => 'border-radius:4px;'
	                        );

	            echo form_input($data);
	        ?>
	        <?php echo validation_errors('email'); ?>        
			<?php echo heading('Phone',3); ?>
	        <?php 
	            $data = array(
	                          'name'        => 'phone',
	                          'maxlength'   => '25',
	                          'size'        => '20',
	                          'style'       => 'border-radius:4px;'
	                        );

	            echo form_input($data);
	        ?>
	        <?php echo validation_errors('phone'); ?>
	        <?php echo heading('Message',3); ?>
	        <?php 
	            $data = array(
	                          'name'        => 'comm',
	                          'rows'        => '4',
	                          'cols'        => '20',
	                          'style'       => 'border-radius:4px;'
	                        );

	            echo form_textarea($data);
	        ?>   
	        <h3>...</h3>                      
	        <?php echo form_submit('submit','Submit','class="comm_button"'); ?>     
	        <?php echo form_close(); ?>
        	<br /><hr>

		</div>
	</div>	
    <img class= "an" src="<?php echo base_url(); ?>assets/images/an.jpg"/ alt="">

</div>