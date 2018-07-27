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
	<?php
		

			echo "<h1 style='text-align:center;'>YOU ARE ALRADY REGISTERED</h1>";
			echo "<p class='text-danger' align='center'>you have aready been registered using this emailid you cannot register twice</p>";
			echo '<a href="http://localhost/portal/index.php/"><br><h1 style="color:black;text-align:center;">GO BACK</h1></a>';
		
				

	?>