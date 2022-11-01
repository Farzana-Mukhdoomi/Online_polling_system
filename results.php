<?php
session_start();
include("loginheader.php");
if(!$_SESSION['id_generated']){
					header("location:result_chk.php");
							  }
?>
<br>
<div class="container">
   <div class="col-md-6 col-md-offset-3">
     <h3 class="text text-info text-center">Announced Result </h3>
     <p class="text text-danger">Elections which are closed or date expired</p>
      <form method="POST" action="">
         <div class="form-group">
            <select class="form-control" name="elections_name">
              <option selected="selected" value="">Select Election</option>
                <?php
                 $current_ts=time();
                  require("db.php");
                  $select="SELECT * from elections";
                  $run=$conn->query($select);
                  if ($run->num_rows>0) {
                   while ($row=$run->fetch_array()) {
                     $elections_name=$row['elections_name'];
                     $elections_start_date=$row['elections_start_date'];
                     $elections_end_date=$row['elections_end_date'];
                ?>

                  <?php
                    $elections_end_date_ts=strtotime($elections_end_date);
                    if($elections_end_date_ts<$current_ts){

                  ?>
                  <option value="<?php echo $elections_name; ?>"><?php echo $elections_name; ?></option>
                  <?php
                                                          }
                                                   }
                                        }
                  ?>
            </select>
          </div>
                <div class="form-group">
                    <input type="submit" name="search_results" class="btn btn-success" value="Search Result">
                </div>

				 <table class="table table-responsive table-hover table-bordered text-center">
					 <tr>
						 <td>#</td>
						 <td>Candidates Name</td>
						 <td>Obtain Votes</td>
						 <td>Winning Status</td>
					 </tr>
					 <?php
						 if(isset($_POST['search_results'])){
								$elections_name=$_POST['elections_name'];
								$select="SELECT * from results where elections_name='$elections_name'";
								$run=$conn->query($select);
								if($run->num_rows>0){
									$total_elections_votes=0;
										while($row=$run->fetch_array()){
											$total_elections_votes=$total_elections_votes+1;
																									 }
																		}
												 $select1="SELECT * from candidates where elections_name='$elections_name'";
												 $run1=$conn->query($select1);
												 if($run1->num_rows>0){
													 $total=0;
													 while($row2=$run1->fetch_array()){
														  $total=$total+1;
														 	$candidates_name=$row2['candidates_name'];
															$total_votes=$row2['total_votes'];
															$percentage=(($total_votes/$total_elections_votes)*100);
															?>
																	<tr>
																		<td><?php echo $total; ?></td>
																		<td><?php echo $candidates_name; ?></td>
																		<td><?php echo $total_votes; ?></td>
																		<td>
																			<?php
																				if($percentage>50){
																			?>
																			<div class="progress">
																				<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?php echo $percentage; ?>" aria-valuemin
																					="0" aria-valuemax="<?php echo $percentage; ?>" style="width: <?php echo $percentage; ?>%"> <?php echo $percentage; ?>%</div>
																			</div>
																			<?php
																													}
																				else if($percentage>40){
																			?>
																				<div class="progress">
																					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?php echo $percentage; ?>" aria-valuemin
																						="0" aria-valuemax="<?php echo $percentage; ?>" style="width: <?php echo $percentage; ?>%"> <?php echo $percentage; ?>%</div>
																				</div>
																			<?php
																					  }
																			else{
																			?>
																			<div class="progress">
																				<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="<?php echo $percentage; ?>" aria-valuemin
																					="0" aria-valuemax="<?php echo $percentage; ?>" style="width: <?php echo $percentage; ?>%"> <?php echo $percentage; ?>%</div>
																			</div>
																			<?php
																			    }
																			?>
																		</td>
																	</tr>
															<?php
																														}
															?>
															<tr>
																<td colspan="2">Total Votes</td>
																<td><?php echo $total_elections_votes; ?></td>
																<td></td>
															</tr>

														 <?php
																							}
													else{

					 ?>
					 													<tr>
																			<td colspan="4">No Record Found</td>
																		</tr>
					<?php
															}
                              								 }
					 ?>
				 </table>
      </form>
  </div>
</div>



<?php
   include("footer.php");
 ?>
 <script type="text/javascript" src="js/bootstrap.js"></script>
 <script type="text/javascript" src="js/jquery.js"></script>
