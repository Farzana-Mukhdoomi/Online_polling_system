<!DOCTYPE html>
<html>
<head>
		<title>Online Voting System</title>
		<link rel="stylesheet"  href="css/bootstrap.css" />
		<link rel="stylesheet"  href="mystyle.css" />
		<link rel="stylesheet"  href="css/fonts.css" />
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<div class="navbar-header">
					<a href="" class="navbar-brand">Online Voting System</a>
				</div>
				  <ul class="nav navbar-nav">
					<li><a href="welcome.php">Home</a></li>
							<li><a href="idgen.php">Generate ID</a></li>
								<li><a href="vote.php">Elections</a></li>
									<li><a href="results.php">Results</a></li>
											<li><a href="logout.php">Logout</a></li>
												<li><a href=""><?php echo $_SESSION['user_name']; ?></a></li>
				  </ul>

			</div>
		</nav>
	</div>
		<div class="container">
			<div class="col-sm-8 col-sm-offset-2 img.thumnail" style="background-color: gray;">
				<img src="images/2.png" class="img img-thumbnail img-responsive">
			</div>
		</div>
	</div>
</body>

</html>
