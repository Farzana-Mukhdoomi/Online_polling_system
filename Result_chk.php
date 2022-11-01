<!DOCTYPE html>
<html>
    <title>Welcome</title>
    <?php
	  session_start();
      include("loginheader.php");
	  if(!$_SESSION['user_email']){
									header("location:login.php");
								  }
     ?>
		<br>
      <div class="container">
          <div class="col-md-6 col-md-offset-3">
            <form method="post">
    							<div class="form-group">
    								<label for="exampleInputEmail1">Your ID</label>
    								<input type="text" class="form-control" id="exampleInputEmail1" name="user_id" placeholder="Generated ID"required>
    							</div>
    										<div class="form-group">
                          <br>
    											<label for="password">Password</label>
    											<input type="password" name="user_password" class="form-control" placeholder="Password"required>
    										</div>

    											<div class="form-group">
    												<button type="submit" class="btn btn-info" name="login">Enter Voting Room</button>
    											</div>

    				</form>

          </div>
      </div>
<?php
  require("db.php");
    if(isset($_POST['login'])){
                                $user_id=$_POST['user_id'];
                                $user_password=$_POST['user_password'];
                                $select="select * from users_db where user_password='$user_password' and id_generated='$user_id'";
                                $run=$conn->query($select);
                                if($run->num_rows>0){
									while($row=$run->fetch_array()){
															$_SESSION['id_generated']=$id_generated=$row['id_generated'];
																   }
																header("location:results.php");
                                        }else{
                                                echo "Your ID or Password is invalid";
                                             }
                              }


 ?>










       <?php
          include("footer.php");
        ?>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
</html>
