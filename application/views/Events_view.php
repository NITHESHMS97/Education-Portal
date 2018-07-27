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


<div>
	<h1 class ="text-center">EVENTS</h1>  
	<?php foreach($cont as  $item) : ?>
		<div class="well" style="width:70%; margin:auto" >
			<h4><strong><?php echo $item['title']; ?></strong></h4>
			<div class="text-right">
			<small><?php echo $item['date']; ?></small>
			</div>
			<hr />
			
			<p><?php echo $item['event']; ?></p>

		</div>
		<br>
	<?php endforeach; ?>

</div>

  