<?php require'Linkfile.php'; ?>


<header style="height:300px" >
			
			<div id="nav-container">
				<nav >
					<img class="scroll-top logo  animated bounceInLeft" height="70px" width="70px" src="http://localhost/gem/img/logo.png"></img>
					<ul>
						<li><a href="<?php echo base_url(); ?>"><b>Home</b></a></li>
						<li><a href="<?php echo base_url('Events/index'); ?>"><b>Events</b></a></li>
						<li><a href="<?php echo base_url('Aboutus/index'); ?>"><b>About Us</b></a></li>
						<li><a href="<?php echo base_url('Contactus/index'); ?>"><b>Contact Us</b></a></li>
					
						
					</ul>
					<div>
						<img src="http://localhost/gem/img/guest.PNG" width="30px" height="30px">&nbsp; Hi, Guest</img>
						<a href="<?php echo base_url('Login/index'); ?>"><b>Login</b></a>
					</div>
				</nav>
			</div>	
			
		</header>
		<br><br><br>
				
				<h1 style="text-align:center">REGISTER</h1>
				<!-- ########### -->
				<div id="tabs-1">
				<form role="form"  method="post" action="<?php echo base_url() ?>Register/form_validation">
				<div class="row mrgn30">
				<div class="col-sm-12">
					<div class="form-group" >
						<label>Student USN</label>
					<?php	echo '<input type="text" name="student_USN"  class="form-control" >';?>
					<span><?php echo form_error('student_USN', '<div class="text-danger">' ,'</div>'); ?></span>
					</div>
					<div class="form-group">
						<label>First Name</label>
					<?php	echo '<input name="First_name" type="text"  class="form-control" >';?>
					<span><?php echo form_error('First_name', '<div class="text-danger">' ,'</div>'); ?></span>
					</div>
					<div class="form-group">
						<label>Middle Name</label>
					<?php	echo '<input name="Middle_name" type="text" class="form-control" >';?>
					
					</div>
					<div class="form-group">
						<label>Last Name</label>
					<?php	echo '<input name="Last_name" type="text" class="form-control" >';?>
			
					</div>
					<div class="form-group">
						<label>Year</label>
					<?php	echo '<input  name="year" type="text" class="form-control" >';?>
					<span><?php echo form_error('year', '<div class="text-danger">' ,'</div>'); ?></span>
			
					</div>
					<div class="form-group">
						<label>Semester</label>
					<?php	echo '<input  name="semester" type="text" class="form-control" >';?>
					<span><?php echo form_error('semester', '<div class="text-danger">' ,'</div>'); ?></span>
					</div>
					<div class="form-group">
						<label>Department</label>
					
					
						<?php

						   echo "<select class='form-control'  
									style='width: 100%;' name='department'
								>
								<option selected disabled hidden value='---'></option>";
							
							foreach ($department as $key => $val ) 		
								echo "<option onselected='this.form.submit();' value='".$val[department_id]."'>".$val[department_id]."</option>";

						   echo" </select>";

						?>
						<span><?php echo form_error('department', '<div class="text-danger">' ,'</div>'); ?></span>
					</div>
					<div class="form-group">
						<label>Mobile No</label>
					<?php	echo '<input  name="mobile_no" type="text" class="form-control" >';?>
			
					</div>
					<div class="form-group">
						<label>Email Id</label>
					<?php	echo '<input  name="email" type="email" class="form-control" >';?>
					<span><?php echo form_error('email', '<div class="text-danger">' ,'</div>'); ?></span>
			
					</div>
					<div class="form-group">
						<label>Password</label>
					<?php	echo '<input name="password"  type="password" class="form-control" >';?>
					<span><?php echo form_error('password', '<div class="text-danger">' ,'</div>'); ?></span>
					</div>
					<div class="form-group">
						<label>Confirm Password</label>
					<?php	echo '<input  name="c_password"  type="password" class="form-control" >';?>
					<span><?php echo form_error('c_password', '<div class="text-danger">' ,'</div>'); ?></span>
			
					</div>
					<div class="form-group">
						<input type="submit" class="button-0" value="SIGN UP" >
					</div>
				</div>
				</div>
				</form>
				</div><br>
			
		