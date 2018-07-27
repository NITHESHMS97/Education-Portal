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

		<form role="form"  method="post" action="<?php echo base_url() ?>Login/login_validation">
				<div class="row mrgn30">
				<div class="col-sm-12">
		<!--			<div class="form-group" >
					<select class="form-control" name="type" style="width:60%" >
							<option>STUDENT</option>
							<option>STAFF</option>
					</select>
					</div>
		-->			<div class="form-group">
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
						<input type="submit" class="button-0" value="SIGN UP" >
					</div>
				</div>
				</div>
				</form>
				<br>


