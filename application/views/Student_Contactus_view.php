<?php require'Linkfile.php'; ?>


<header style="height:300px" >
			
			<div id="nav-container">
				<nav >
					<img class="scroll-top logo  animated bounceInLeft" height="70px" width="70px" src="http://localhost/gem/img/logo.png"></img>
					<ul>
						<li><a href="<?php echo base_url('Student_home/index'); ?>"><b>Home</b></a></li>
						<li><a href="<?php echo base_url('Student_Events/index'); ?>"><b>Events</b></a></li>
						<li><a href="<?php echo base_url('Student_Aboutus/index'); ?>"><b>About Us</b></a></li>
						<li><a href="<?php echo base_url('Student_Contactus/index'); ?>"><b>Contact Us</b></a></li>
					
						
					</ul>
					<div>
					
						<img src="http://localhost/gem/img/guest.PNG" width="30px" height="30px">&nbsp; Hi
						<?php 
						print($this->session->userdata('student')['first_name']);?> 
						</img>
						<a href="<?php echo base_url('Student_home/logout'); ?>"><b>Logout</b></a>
					</div>
				</nav>
			</div>	
			
		</header>
<div class="article4-container " id="contactus">	   
					<div class="row">
						<div class="heading text-center"> 
							<!-- Heading -->
							<h2>Contact Us</h2>
						</div>
					</div>

					<form action="<?php echo base_url('Student_Contactus/feedback') ?>" method="post">
					<div class="row mrgn30">
							<div class="col-sm-12">
								<div class="form-group">
									<label for="name">Name</label>
									<input type="text" class="form-control" name="name" id="name" placeholder="Enter name" title="Please enter your name (at least 2 characters)"/>
									<span><?php echo form_error('name', '<div class="text-danger">' ,'</div>'); ?></span>
								</div>
								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" name="email" id="email" placeholder="Enter email" title="Please enter a valid email address">
									<span><?php echo form_error('email', '<div class="text-danger">' ,'</div>'); ?></span>
								</div>
								<div class="form-group">
									<label for="comments">Comments</label>
									<textarea name="comment" class="form-control" id="comments" cols="3" rows="5" placeholder="Enter your message…" title="Please enter your message (at least 10 characters)"></textarea>
									<span><?php echo form_error('comment', '<div class="text-danger">' ,'</div>'); ?></span>
									<br>
									<button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit" ">Submit</button>
								</div>
							</div>
							
					</div>
					</form>
				</div>
