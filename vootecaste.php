
<?php
session_start();
include("loginheader.php");
if(!$_SESSION['id_generated']){
					header("location:election.php");
						              	  }
?>
<br>
<div class="container">
   <div class="col-md-6 col-md-offset-3">
      <form method="POST" action="">
         <?php
            require("db.php");
            $elections_name=$_GET['elections_name'];
            $elections_name=str_replace('-',' ',$elections_name);
            "<input type='text' value='$elections_name' class='form-control' readonly />";
            $select="select * from candidates where elections_name='$elections_name'";
            $run=$conn->query($select);
            if($run->num_rows>0){
							echo "first phase fixed";
                while($row=$run->fetch_array()){
									echo "2nd phase fixed";
         ?>

                    <input type="radio" name="candidates_name">
                    <label><?php echo $row['candidates_name']; ?></label>

         <?php
                                               }
                                }else echo "hiii";
         ?>
      </form>
   </div>
</div>


<?php
   include("footer.php");
 ?>
 <script type="text/javascript" src="js/bootstrap.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
