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
<form action="<?php echo base_url('Student_elective/storeelective') ?>" method="post">
<div class="row mrgn30">
	<div class="col-sm-12">
					<div class="form-group">
					<label>Name</label>
					<?php	echo '<input name="First_name"  value="'.$name.'" type="text"  class="form-control" readonly>';?>
					</div>

					<div class="form-group">
						<label>Semester</label>
					<?php	echo '<input  name="semester" value="'.$semester.'" type="text" class="form-control" readonly>';?>
			
					</div>
					<div class="form-group">
						<label>Department</label>
						<?php	echo '<input  name="Department" value="'.$department.'" type="text" class="form-control" readonly>';?>
					</div>

					
					<div class="form-group">
						<label> Elective Courses</label>
						
						
						<?php

						   echo "<select class='form-control'  
									style='width: 60%;' name='subject'
								>
								<option selected disabled hidden value='---'></option>";
							
							foreach ($subject as $key => $val ) 		
							{	if($val['iselective']==1)
								{
								echo "<option onselected='this.form.submit();' value='".$val['elective_name']."'>".$val['elective_name']."</option>";


								}
							}
						   echo" </select>";

						?>
					</div>

								<div class="form-group">
									<button name="submit" type="submit" class="btn btn-lg btn-primary" id="submit" ">Submit</button>
								</div>
							</div>
							
					</div>
					</form>


