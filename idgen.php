<!DOCTYPE html>
<html>
<body>
    <?php
	  session_start();
      include("loginheader.php");
	  if(!$_SESSION['user_email']){
									header("location:login.php");
								  }
     ?>
		<br>
      <div class="container">
          <?php
				require("db.php");
				$user_email=$_SESSION['user_email'];
			    $select="select * from id_request where user_email='$user_email'";
                $run=$conn->query($select);
                if($run->num_rows>0){

		   ?>
					<div class="col-sm-6 col-sm-offset-3 bg-success alert">
                       <h4>Your request is already submitted.</h4>
					</div>
		<?php
                                    }
																				else{
		?>
		   <?php
				$select="select * from users_db where user_email='$user_email'";
				       $run=$conn->query($select);
						  if($run->num_rows>0){
                              while($row=$run->fetch_array()) {
																$user_name=$row['user_name'];
																$user_email=$row['user_email'];
																$user_province=$row['user_province'];
                                $id_generated=$row['id_generated'];
															  }
											  }
                        if($id_generated!=""){
       ?>
                    <div class="col-sm-6 col-sm-offset-3 bg-success alert">
                        <h4>Your ID is "<span class="text text-danger"> <?php echo $id_generated; ?> </span>"</h4>
                        <p><b>Note:</b> Use this ID to participate in Election</p>
                    </div>

       <?php
                                             }
                                             else{
       ?>
     </div>
     <div class="col-sm-6 col-sm-offset-3 bg-success alert">
       <form method="post">
             <div class="form-group">
               <label for="exampleInputEmail1">User Name</label>
               <input type="email" class="form-control" id="exampleInputEmail1" name="user_name" value="<?php echo $user_name; ?> "readonly>
             </div>
               <div class="form-group">
                 <label for="exampleInputEmail1">Email Address</label>
                 <input type="email" class="form-control" id="exampleInputEmail1" name="user_email" value="<?php echo $user_email; ?>"readonly>
               </div>
                 <div class="form-group">
                   <label for="exampleInputEmail1">State/Province</label>
                   <input type="email" class="form-control" id="exampleInputEmail1" name="user_province" value="<?php echo $user_province; ?>"readonly>
                 </div>
                     <br>
                     <div class="form-group">
                       <button type="submit" class="btn btn-info "name="idrequest">Request for ID</button>
                     </div>
       </form>
     </div>


  </body>







<?php
                                                            }
if(isset($_POST['idrequest'])){
                                $user_email=$_POST['user_email'];
                                $user_province=$_POST['user_province'];
                                require("db.php");
                                        $insert="insert into id_request (user_email,user_province) values ('$user_email','$user_province')";
                                        $run=$conn->query($insert);
                                        if($run){
                                                  echo "Success";
                                                }
                                        else{
                                              echo"Error";
                                            }

                              }
																					}
?>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>

</html>
