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
	<h1 class="text-center">ATTENDANCE DETAILS</h1>
	 <div class="table-responsive"> 
	<table class="table table-hover" style="width:90%; margin:5%">
    <thead>
      <tr>
        <th>DATE</th>
        <th>SUBJECT ID</th>
        <th>TOTAL CLASS </th>
        <th>CLASS ATTENDED</th>
        <th>PERCENTAGE</th>

      </tr>
    </thead>
    <tbody> 
<?php 
	foreach($attend as $rows)
	{
		$date=$rows['Dates'];
		$total_class=$rows['Total_class'];
		$sub_id=$rows['elective_id'];
		$class_attend=$rows['class_attended'];
		$percent=($class_attend/$total_class)*100;

echo "		 <tr >
        <td>$date</td>
        <td>$sub_id</td>
        <td>$total_class</td>
        <td>$class_attend</td>
        <td>$percent%<td>
      </tr>
    ";
	}
?>   
</tbody>
</table>
</div>
     

