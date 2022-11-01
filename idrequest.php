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
    </nav><br>
		<br>
	<div class="container">
		<div class="col-sm-6">
			<h2>All Requested data</h2>
			<table class="table table-responsive table-hover">
				<tr>
					<th>#</th>
					<th>User Email</th>
					<th>User Province</th>
					<th>Action</th>
				</tr>
				<?php
					$conn=new mysqli("localhost","root","","voting_db");
					$select="select * from id_request";
					$run=$conn->query($select);
					if($run->num_rows>0){
											$total=0;
											while($row=$run->fetch_array()){
																			 $total=$total+1;
																			 $id=$row['id'];
				?>
																				<tr>
																					<td><?php echo $total;?></td>
																					<td><?php echo $row['user_email'];?></td>
																					<td><?php echo $row['user_province'];?></td>
																					<td><a href="update.php?id=<?php echo $id;?>">Update</a></td>
																				</tr>
					<?php
																		   }
										}
										else{

					?>
											<tr>
												<td colspan="4">No pending requests!! </td>
											</tr>
					<?php
										    }

					?>
			</table>
		</div>
				<div class="col-sm-6">

				</div>
	</div>
</body>
</html>
