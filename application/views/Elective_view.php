

<?php require'Linkfile.php'; ?>
<script src="http://localhost/application/views/Electives.js"></script>


<header style="height:300px" >
			
			<div id="nav-container">
				<nav >
					<img class="scroll-top logo  animated bounceInLeft" height="70px" width="70px" src="http://localhost/gem/img/logo.png"></img>
					<ul>
						<li><a href="<?php echo base_url(); ?>"><b>Home</b></a></li>
						<li><a href="http://localhost/gem/index.php#elective"><b>Electives</b></a></li>
						<li><a href="http://localhost/gem/index.php#tabs"><b>Event</b></a></li>
						<li><a href="http://localhost/gem/index.php#tabs"><b>About Us</b></a></li>
						<li><a href="http://localhost/gem/index.php#contactus"><b>Contact Us</b></a></li>
						
					</ul>
					<div>
						<img src="http://localhost/gem/img/guest.PNG" width="30px" height="30px">&nbsp; Hi, Guest</img>
						<a href="#myOverlay1" data-overlay-trigger>Login</a>
					</div>
				</nav>
			</div>	
			
		</header>
		<br><br><br>
</div>
				<div class="article2-container ">
					<div class="ele_head" id="elective">
						<h1>ELECTIVES</h1>
					</div>
					<br>
					
					<p title="Filter elective list by "><i class="fa fa-search"></i>&nbsp;SEARCH BY:</p>
					<div class="form-group" class="dp1">
						<label for="sel1">Department:</label>
						<select class="form-control" id="dept" onchange="SubmitForm();">
							<option>ISE</option>
							<option>CSE</option>
							<option>ECE</option>
							<option>ME</option>
						</select>
					</div>
					<div class="form-group" class="dp2" >
						<label for="sel1">Semester:</label>
						<select class="form-control"  id="sem" onchange="SubmitForm();">
							<option>5</option>
							<option>6</option>
							<option>7</option>
							
						</select>
					</div>
					
				<div class="form-group" class="dp3" >
						<label for="sel1">Global or Local:</label>
						<select class="form-control" id="gorl" onchange="SubmitForm();">
							<option>Local</option>
							<option>Global</option>
							
						</select>
					</div>
					<div id="nd">
						<br><br><br><br><br>
					</div>
				</div>
				
				<div class="article3-container ">
						<div class="row">
							<h3 title="search by elective name">Elective Details</h3>
							<br>
							   <div id="custom-search-input">
									<div class="input-group col-md-12">
													<input  type="text" id="tags" class="search-query form-control" placeholder="Search" />
													<span class="input-group-btn">
														<button  onclick="display()" class="btn btn-danger" type="button">
															<i class="fa fa-search"></i>
														</button>
													</span>
									</div>
								</div>
						</div>
						<div id="details">
							<br><br>
						</div>	
				</div>
				