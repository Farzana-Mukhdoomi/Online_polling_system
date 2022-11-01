<!DOCTYPE html>
<html>
<head>

<title> Online Voting System </title>
<link rel="stylesheet"  href="css/bootstrap.css" />
<link rel="stylesheet"  href="mystyle.css" />
<link rel="stylesheet"  href="css/fonts.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
					<a href="" class="navbar-brand">Online Voting System</a>
					 </div>
						 <ul class="nav navbar-nav">
							<li><a href="idrequest.php">ID Requests</a></li>
							<li><a href="add_new_elections.php">Add Elections</a></li>
							<li><a href="add_candidates.php">Add Candidates</a></li>
							<li><a href="cpanel.php">Admin Home</li>
						 </ul>


					<span class="normalFont"><a href="index.php" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
				</div>

			</div> <!-- end of container -->
		</nav><br><br>
	<div class="container">
		<div class="col-sm-6">
			<h3>Add New Election</h3>
				<form method="POST">
					<div class="form-group">
						<label>Add Election Name</label>
						<input type="text" name="elections_name" class="form-control">
					</div>

					<div class="form-group">
						<label>Election Start Date</label>
						<input type="date" name="elections_start_date" class="form-control">
					</div>

					<div class="form-group">
						<label>Election End Date</label>
						<input type="date" name="elections_end_date" class="form-control">
					</div>
					<input type="submit" name="add_elections" class="btn btn-success">
				</form>
		</div>
	</div>
</body>
</html>
<?php
$conn=new mysqli("localhost","root","","voting_db");
if(isset($_POST['add_elections'])){

	$elections_name=$_POST['elections_name'];
	$elections_start_date=$_POST['elections_start_date'];
	$elections_end_date=$_POST['elections_end_date'];
	$insert="INSERT INTO elections (elections_name,elections_start_date,elections_end_date) values ('$elections_name','$elections_start_date','$elections_end_date')";
	$run=$conn->query($insert);
	 if($run){
		    echo "<script>alert('Added Successfully!')</script>";
		      }
	 else{
		    echo "<script>alert('Error!')</script>";
	     }
								  }

?>
