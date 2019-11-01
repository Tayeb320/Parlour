<?php 



include"header.php";?>


	<?php 






if(!isset($_SESSION['cusid'])) {
	
?>

														<script type="text/javascript">
<!--
function Redirect() {
window.location="login.php";
}
document.write("<center>You will be redirected to main page in 2 sec.</center>");
setTimeout('Redirect()', 0;
//-->
</script>
<?php
	
} 

?>



<div class="container">


		<div class="row">
		<div class="col-md-4">
		
		
		
		
		
		
		
		


<div class="sidebar app-aside" id="sidebar">
				<div class="sidebar-container perfect-scrollbar">

<nav>
						
						<!-- start: MAIN NAVIGATION MENU -->
						<div class="navbar-title">
							<span></span>
						</div>
						<ul class="main-navigation-menu">
							<li>
								<a href="profile.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-home"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Dashboard </span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="appoinmentview.php">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title">Your Appoinments</span>
										</div>
									</div>
								</a>
								
								</li>

								


							<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> profile </span>
										</div>
									</div>
								</a>
								

								
							
							</li>	
							
							
							<li>
								<a href="javascript:void(0)">
									<div class="item-content">
										<div class="item-media">
											<i class="ti-user"></i>
										</div>
										<div class="item-inner">
											<span class="title"> Notification </span>
										</div>
									</div>
								</a>
								

								
							
							</li>	
						
												
				

						</ul>
						<!-- end: CORE FEATURES -->
						
					</nav>
					</div>
			</div>
		
	
		

			</div>
			
			
			<div class="col-md-8">
			<br><br>
			 <center><b> Hi <?php echo $_SESSION['cusname'] ?> </b> <h3> Welcome to Dashboard  </h3></center>
			

			</div>

         </div>

</div>

	



<?php include"footer.php";?>