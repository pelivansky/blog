	 <div class="center" id="article">Home</div> 
	 <div class="center">
	 	<h1 id="hello">Hello and Welcome!</h1>
	 	<div class="gallery">
		   	<h2>you are in the right place....</h2>
		   	<h2>..</h2>
		 	<p>if you enjoy reading books</p>
		 	<p>if you want to find out our best books selection</p>
		 	<p>if you like to comment what you read</p>
		 	<p>if you like to see other people s opinions</p>
		 	<p>watch our gallery</p>
		 	<p>read our comments</p>
		 	<p>buy books..</p>
		 	<p>socialize</p>
		 	<br />
		 	<br/>
		</div>	
		<div class="log_reg">
			<?php echo form_open('blog/register'); ?>
			<h2>Register</h2>
			<br />
			<h3>U-Name :</h3>
			<input type="text" name="name" size="20" style="border-radius:4px;" required>
			<?php echo form_error('name','<div class="error">', '</div>'); ?>
			<h3>Email :</h3>
			<input type="email" name="email" size="20" style="border-radius:4px;" required>
			<?php echo form_error('email','<div class="error">', '</div>'); ?>
			<h3>Phone :</h3>
			<input type="phone" name="phone" size="20" style="border-radius:4px;" required>
			<?php echo form_error('phone','<div class="error">', '</div>'); ?>
			<h3>Password :</h3>
			<input type="password" name="pass" size="20" style="border-radius:4px;" required>
			<?php echo form_error('pass','<div class="error">', '</div>'); ?>
			<h3>Retype Password :</h3>
			<input type="password" name="pass_2" size="20" style="border-radius:4px;" required>
			<?php echo form_error('pass_2','<div class="error">', '</div>'); ?>			
		    <h3>...</h3>                      
	        <?php echo form_submit('register','Register','class="comm_button"'); ?> 	
			<?php form_close(); ?>		
		</div>

	 </div>
	 <div class="center"></div>
</div>