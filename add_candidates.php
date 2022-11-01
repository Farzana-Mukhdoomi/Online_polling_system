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
			<h3>Add Candidates</h3>
				<form method="GET" action="add_details_candidates.php">
					<div class="form-group">
						<label>Select Election Name</label>
              <select class="form-control" name="elections_name">
    				     <option value="" selected="selected">Select election</option>
    				       <?php
								      $conn=new mysqli("localhost","root","","voting_db");
    			            require("db.php");
    						      $select="SELECT * from elections";
    						      $run=$conn->query($select);
    							    if($run->num_rows>0){
    									while($row=$run->fetch_array()){

    					     ?>
    					    <option value=" <?php echo $row['elections_name'];?> "> <?php echo $row['elections_name'];?> </option>
    					<?php
    																   }
    												}
    					?>
    				</select>
					</div>
							<div class="form-group">
								<label>No of Candidates</label>
								<input type="text" name="total_candidates" class="form-control">
							</div>
					<input type="submit" name="add_elections" class="btn btn-success">
				</form>
		</div>
	</div>
</body>
</html>
