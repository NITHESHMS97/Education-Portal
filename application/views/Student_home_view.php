	
		 
		<?php require'Linkfile.php'; ?>
		<header>
			
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
		
			<div id="slider-container1">
				<div class="slider_caption1">
                    <p>Education</p>
                    
                </div>
				<div class="slider_caption2">
                    <p>Portal</p> 
                </div>	
		
	
							
			</div>
			
		</header>
			<marquee id="dispn" scrollamount="3" direction="right" style="background-color:#F5FFFA;height:10%;color:black;width:100%;font-size:20px;">Latest News:</marquee>

		
		
			<div id="features" class="page-section colord">
			  <div class="container">
				<div class="row"> 
				 				  
				  <!-- item -->
				  <div class="col-md-3 text-center">
				  <div class="box-item">
				  <i class="circle"> <img src="http://localhost/portal/images/1.png" alt="" /></i>
					  <h3><a href="<?php echo base_url('Student_elective/index'); ?>" style="color:grey">Elective Registration</a></h3>
					<p>Register 1 elective by selecting from set of elective list, one of 5 and other 10 credit,two preference is provided</p>
				  </div>
				   </div>
				  <!-- end: --> 
				  
				  
				  <!-- item -->
				  <div class="col-md-3 text-center">
				  <div class="box-item">
				  <i class="circle"> <img src="http://localhost/portal/images/2.png" alt="" /></i>
					<h3><a href="<?php echo base_url('Student_attendence/index'); ?>" style="color:grey">Attendance Detail</a></h3>
					<p>Check the attendance, marks  details of both the elective and select a assignment topic </p>
				  </div>
				  </div>
				  <!-- end: --> 
				   <!-- item -->
				  <div class="col-md-3 text-center"> 
				  <div class="box-item">
				  <i class="circle"><img src="http://localhost/portal/images/5.png" alt="" /></i>
					<h3><a href="<?php echo base_url('Student_marks/index'); ?>" style="color:grey">Marks Detail</a></h3>
					<p>Check the marks of your elective and non elective courses based on your department and semester </p>
				  </div>
				   </div>
				  <!-- end: --> 
				   <!-- item -->
			<!--	  <div class="col-md-3 text-center">  -->
				  <div class="box-item">
				  <i class="circle"><img src="http://localhost/portal/images/5.png" alt="" /></i>
					<h3><a href="<?php echo base_url('Student_assignment/index'); ?>" style="color:grey">Assignment Detail</a></h3>
					<p>fill the form for assignment with assignment title description with link for the respective course  </p>
				  </div>
				  <div class="col-md-3 text-center"> 
				  <div class="box-item">
				  <i class="circle"><img src="http://localhost/portal/images/3.png" alt="" /></i>
					<h3><a href="<?php echo base_url('Student_placement/index'); ?>" style="color:grey">Placement Details</a></h3>
					<p>Check the placement details which includes company name ,date , details  and website provided foe more info </p>
				  </div>
				   </div>
				  <!-- end: --> 
			  
				</div>
			  </div>
			  <!--/.container--> 
			</div>			
			<br><br><br><br><br><Br>
		</section>


		<footer>
			<div class="container">
				<div class="col">
                   <ul>
						<li><B style="font-size:16px"></B>ADMIN AND DEV</li>
						<li>NITHESH MS</li>
						<li>Bellare Town 			</li>
						<li>Sullia taluq Dakshina kannada  	</li>                        
						<li>Karnataka-564212 				</li>
                    </ul>
                 </div>
				 <div class="col2">
                   <ul>
						<li><B style="font-size:16px">Contact Us</B></li>
						<li>Phone: 9482327547		</li>
						<li>Email: nitheshms97@gmail.com</li>                        
						<li>Skype: my-company			</li>
                    </ul>
                 </div>
				 
			</div>

			<div class="col3">
					Copyright 2015 | All Rights Reserved
			</div>
		</footer>
		