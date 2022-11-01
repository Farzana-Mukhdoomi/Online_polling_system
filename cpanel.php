<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Control Panel</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"  href="css/bootstrap.css" />
    <link rel="stylesheet"  href="mystyle.css" />
    <link rel="stylesheet"  href="css/fonts.css" />
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>

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
  			     </ul>


          <span class="normalFont"><a href="index.php" class="btn btn-success navbar-right navbar-btn"><strong>Sign Out</strong></a></span></button>
        </div>

      </div> <!-- end of container -->
    </nav>

    <div class="container" style="padding:100px;">
      <div class="row">
        <div class="col-sm-12" style="border:2px solid gray;">

          <div class="page-header">
            <h2 class="specialHead">CONTROL PANEL</h2>
            <p class="normalFont">This is Administration Panel.</p>
          </div>

          <div class="container">
             <div class="col-md-6">
               <div class="news"><marquee>Report of elections which are closed/expired can be fetched below.</marquee></div>
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

        </div>
      </div>
    </div>
  </div>
  <?php
     include("footer.php");
   ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
