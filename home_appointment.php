<?php 



include"header.php";
include"db.php";
?>
<br>  <br><br><br><br><br><br>
<br><br>


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
		
		<div class="col-md-5" style="padding:0px;">
			<div class="app">
			<img src="img/hiclipart.com-id_yddch.png">
		   </div>
			
		</div>
		
		
		
		
		<?php
		
		if(!isset($_GET["id"]))
			
			{  ?>
				
				
			<div class="col-md-7" style="padding:0px;">
		
			<div class="box1">
	       <h2>Appoinment Set Up</h2>
		   
		
		  <form action="" method="post"> 
		 
			
			
		
		
		 

	
		<div class="inputbox">
			<input type="text" name="fname" required="">
			<label>First Name</label>
			
		</div>
		<div class="inputbox">
			<input type="text" name="lname" required="">
			<label>Last Name</label>
			
		</div>
		 <label style="color:#fff;">Select a service</label>
		   <div class="inputbox">
			
			
			<select name="service">
			  
			  
			  <?php 
			    
						$product_query = "SELECT service_name,prize FROM services ";
						$run_query = mysqli_query($con,$product_query);
				if(mysqli_num_rows($run_query) > 0){
				
				while($row = mysqli_fetch_array($run_query)){
					$serv_id    = $row['id'];
					$service  = $row['service_name'];
					$prize  = $row['prize'];
			
			?>
				
				
			 
			  
			  <option  value="<?php echo $service ;?>"><?php echo $service ;?> </option>
			  
			  
	<?php } }?>
			  
			</select>
			<input type="hidden" name="serviceid" value="<?php echo $$serv_id ;?>" required="">
			
			 <input type="hidden" value="<?php echo $prize ;?>" name="prize">
			</div>
		<div class="inputbox">
			<input type="date" name="date" required="">
			<label></label>
			
		</div>
		
		<div class="inputbox">
			<input type="time" name="time" required="">
			<label>Time</label>
			
		</div>
		<div class="inputbox">
			<input type="text" name="phone" required="">
			<label>Mobile No</label>
			
		</div>
		<div class="inputbox">
			<input type="email" name="email" required="">
			<label>Email</label>
			
		</div>
		
				

					<label style="color:#fff;">Select a Employee</label>
		   <div class="inputbox">
			
			
			<select name="employee">
			  
			  
			  <?php 
			    
						$product_query = "SELECT * FROM  ";
						$run_query = mysqli_query($con,$product_query);
				if(mysqli_num_rows($run_query) > 0){
				
				while($row = mysqli_fetch_array($run_query)){
					$beu_id    = $row['id'];
					$beu_name  = $row['name'];

			
			?>
				
				
			 
			  
			  <option  value="<?php echo $beu_name ;?>"><?php echo $beu_name ;?> </option>
			  
			  
	<?php } }?>
			  
			</select>
			
			 <input type="hidden" value="<?php echo $prize ;?>" name="prize">
			</div>



		<div class="inputbox">
			<input type="text" name="address" required="">
			<label>Address</label>
			
		</div>
		
		<div class="inputbox">
		<label>payment type</label>
		</div>
		<ul class="list-group">
				   
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" value="Bkash">
                                   Bkash
                                </label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="optionsRadios" value="cash on">
                                    Cash On delivery
                                </label>
                            </div>
                        </li>
                       
                      
                       
                    </ul>		
			
			<input type="submit" name="submit1" value="submit">
			
		</div>
		
	</form>
	<?php 
	
	?>
	
	
	
	
</div>




							


          
		  
		  
		</div>
			
		<?php	}
		
		
		?>
		
		
		
		
		
		
		
		
		
		
		
	</div>
</div>







							
							
							
							
							
							
							
							
							<?php 
							if(isset($_POST["submit1"])){
								
								
							
								
								
								$beautisian = $_POST["beautician"];
								$adress = $_POST["address"];
								$serviceid = $_POST["serviceid"];
							$f_service = $_POST["service"];
								
								
								$date = $_POST["date"];
								
								
								$uid = $_SESSION['cusid'];
								$time = $_POST["time"];
								
								$type = $_POST["optionsRadios"];
								
								
								$f_name = $_POST["fname"];
	$l_name = $_POST["lname"];
	
	$email = $_POST['email'];

	$mobile = $_POST['phone'];
	
	$name = "/^[a-zA-Z ]+$/";
	$emailValidation = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9]+(\.[a-z]{2,4})$/";
	$number = "/^[0-9]+$/";	
								
								
								
	if(!preg_match($name,$f_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $f_name is not valid..!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($name,$l_name)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $l_name is not valid..!</b>
			</div>
		";
		exit();
	}
	if(!preg_match($emailValidation,$email)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>this $email is not valid..!</b>
			</div>
		";
		exit();
	}					
								
	if(!preg_match($number,$mobile)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number $mobile is not valid</b>
			</div>
		";
		exit();
	}
	if(!(strlen($mobile) == 11)){
		echo "
			<div class='alert alert-warning'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Mobile number must be 11 digit</b>
			</div>
		";
		exit();
	}							
	
else

	{							
								
								
								
								
								
								
								
								
						        
							$sql = "INSERT INTO home_appoinment (first_name,last_name,service,date,mobile,email,time,address,beautician_name,service_id) VALUES ('$f_name','$l_name','$f_service','$date','$mobile','$email','$time','$adress','$beautisian','$serviceid')";	
							
	                            $run_query = mysqli_query($con,$product_query);	
								
								if(mysqli_query($con, $sql)){
    echo "<br/><br/><br/><br/><br/><br/><br/><br/><center>Records inserted successfully. <a href='index.php'> << GO Back</a></center>";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($con);
}
 
// Close connection
mysqli_close($con);

	}
							}
							
							
							?>
<br> <br> <br><br>


<?php include"footer.php";?>