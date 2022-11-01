<!DOCTYPE html>
<html>
<?php
include("header.php");
?>
<div class="container">
	  <div class="row">
		  <div class="col-sm-8 col-sm-offset-2 img-thumbnail" style="box-shadow:2px 2px 2px 2px gray;">
		      <img src="images/2.png" class="img img-responsive"/>
	      </div>
	  </div>
</div>
<?php
require("db.php");
$emailError="";
$accountSuccess="";
	if(isset($_POST['register']))
		{
			$user_name=$_POST['fullname'];
			$user_email=$_POST['email'];
			$user_gender=$_POST['gender'];
			$user_province=$_POST['province'];
			$user_password=$_POST['password'];
				$select="select * from users_db where user_email='$user_email'";
				$exe=$conn->query($select);
					if($exe->num_rows>0){
																$emailError="<p class='text text-center text-danger'>Email already registered</p>";
															}
					else{
								$insert="insert into users_db (user_name,user_email,user_gender,user_province,user_password) values ('$user_name','$user_email','$user_gender','$user_province','$user_password')";
								$run=$conn->query($insert);
								if($run)
									{
										$accountSuccess="<p class='text text-center text-success'>Account Created Successfully</p>";
									}
							 		else {
											echo"Error";
											 }
							}

		}
?>

	<br>
<body>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2 bg-info" style="box-shadow:2px 2px 2px 2px gray;">
					<h3 class="text text-center bg-primary alert" style="color:white;">User Registration</h3>
					  <?php
							if($emailError!=""){
																		echo $emailError;
																 }
									if($accountSuccess!=""){
																					echo $accountSuccess;
																				 }
					  ?>
				<form method="post">
						<div class="form-group">
							<label for="exampleInputEmail1">Full Name</label>
								<input type="text" class="form-control" id="exampleInputEmail1" name="fullname" placeholder="Your full name"required>
						</div>
							<div class="form-group">
								<label for="exampleInputEmail1">Email Address</label>
								<input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Your email"required>
							</div>
								<div class="form-group">
									<label for="Gender">Gender</label>
									<select name="gender" class="form-control">
										<option value="">Select</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
										<option value="Other">Other</option>
									</select>
							  </div>

									<div class="form-group">
										<label for="province">State/Province</label>
										 <select name="province" class="form-control">
											<option value="">Select</option>
											<option value="srinagar">Srinagar</option>
											<option value="ganderbal">Ganderbal</option>
											<option value="kopwara">Kopwara</option>
											<option value="budgam">Budgam</option>
											<option value="shopian">Shopian</option>
											<option value="baramulla">Baramulla</option>
											<option value="pulwama">Pulwama</option>
											<option value="ananthnag">Ananthnag</option>
											<option value="sopore">Sopore</option>
						        </select>
									</div>
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" name="password" class="form-control" placeholder="Password"required>
										</div>
											<div class="form-group">
												<label for="Age">Adult (18+)</label>
												 Yes: <input type="radio" name="age">
												 No:  <input type="radio" name="age">
											</div>
											<div class="form-group">
												<button type="submit" class="btn btn-success btn-block" name="register">Submit</button>
											</div>
				</form>
			</div>
		</div>
	</div>

</body>
<?php
include("footer.php");
?>
</html>
