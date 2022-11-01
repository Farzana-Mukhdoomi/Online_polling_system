<?php
session_start();
include("loginheader.php");
if(!$_SESSION['id_generated']){
		header("location:election.php");
		exit();
						              	  }
?>
<br>
<div class="container">
   <div class="col-md-6 col-md-offset-3">
      <form method="POST" action="">
        <?php
				  require("db.php");
          $conn=new mysqli("localhost","root","","voting_db");
          $elections_name=$_GET['elections_name'];
          $elections_name=str_replace('-',' ',$elections_name);
				   echo "<input type='text' value='$elections_name' class='form-control' readonly />";
				 ?><br>
				<?php
           $select="SELECT * from candidates where elections_name='$elections_name'";
           $run=$conn->query($select);
           if($run->num_rows>0){
              while($row=$run->fetch_array()){
        ?>
						<div class="form-group" name="candidates_name">
              <input type="radio" name="candidates_name" class="list-group" value="<?php echo $row['candidates_name'];?>">
              <label><?php echo $row['candidates_name']; ?></label>
						</div>
        <?php
                                             }
                               }
        ?>
				<input type="submit" name="vote_caste" class="btn btn-success" value="Caste your vote">
      </form>
    </div>
</div>
<?php
if(isset($_POST['vote_caste'])){
	$candidates_name=$_POST['candidates_name'];
	$user_email=$_SESSION['user_email'];
  $select="SELECT * from results where user_email='$user_email' and elections_name='$elections_name'";
  $exe1=$conn->query($select);
	if($exe1->num_rows>0){
		echo "You have already casted your vote for ".$elections_name. " election";
	}
	else{
			$insert="INSERT into results (user_email,candidates_name,elections_name) values('$user_email','$candidates_name','$elections_name')";
		$run=$conn->query($insert);
		if($run){
			$update="UPDATE candidates set total_votes= total_votes + '1' where candidates_name='$candidates_name' and elections_name='$elections_name'";
			$exe=$conn->query($update);
					if($exe){
						echo "You have voted successfully";
					}
					else{
						echo "You did NOT caste your vote";
					}
						}
		else{
			echo "Error";
				}
    	}
											}
?>
<?php
   include("footer.php");
 ?>
 <script type="text/javascript" src="js/bootstrap.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
