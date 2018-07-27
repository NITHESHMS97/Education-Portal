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
	<h1 class="text-center">MARKS DETAILS</h1>
	<div class="table-responsive"> 
	<table class="table table-hover" style="width:90%; margin:5%">
    <thead>
      <tr>
        <th>SUBJECT</th>
        <th>INTERNAL I</th>
        <th>INTERNAL II</th>
        <th>INTERNAL III</th>
        
      </tr>
    </thead>
    <tbody> 
<?php 
    foreach ($marks as $key => $value) 
	{
		 //echo $key."<br>MArks:   ";
		 //echo $value['1'].$value['2'].$value['3'];

		 $I1 = $value['1'];
		 $I2 = $value['2'];
		 $I3 = $value['3'];


echo "	<tr>
        	<td>$key</td>
        	<td>$I1</td>
        	<td>$I2</td>
        	<td>$I3</td>
        
      	</tr>";
	}
?>   
</tbody>
</table>
</div>
     

