<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Admin Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>
      .headerFont{
        font-family: 'Ubuntu', sans-serif;
        font-size: 24px;
      }

      .subFont{
        font-family: 'Raleway', sans-serif;
        font-size: 14px;

      }

      .specialHead{
        font-family: 'Oswald', sans-serif;
      }

      .normalFont{
        font-family: 'Roboto Condensed', sans-serif;
      }
    </style>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
<?php
include("header.php");
?>
<body>
	<div class="container" style="padding-top:150px;">
		<div class="row">
			<div class="col-sm-4"></div>
			<div class="col-sm-4" style="border:2px solid gray;padding:50px;">
				<div class="page-header">
					<h2 class="specialHead">Authentication</h2>
				</div>
				<form action="admin_login.php" method="POST">
					<div class="form-group">
						 <label for="">Username/Email</label><br>
								<input type="text" name="adminUserName" placeholder="Username" class="form-control"><br>

								<label for="">Password</label><br>
								<input type="password" name="adminPassword" class="form-control" placeholder="Password"><br>

								<button type="submit" class="btn btn-block span btn-primary "><span class="glyphicon glyphicon-user"></span> Sign In</button>

							<label id="error"></label>
					</div>
   			</form>
			</div>
			<div class="col-sm-4"></div>
		</div>
	</div>
</body>
<?php
include("footer.php");
?>
</html>
