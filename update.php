<!DOCTYPE html>
<html>
<head>

<title> Update ID Request </title>
<link rel="stylesheet"  href="css/bootstrap.css" />
<link rel="stylesheet"  href="mystyle.css" />
<link rel="stylesheet"  href="css/fonts.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <?php
                $conn=new mysqli("localhost","root","","voting_db");
                /*$id=$_GET['id'];  */  $id = isset($_GET['id']) ? $_GET['id'] : '';
                $select="select * from id_request where id='$id'";
                $run=$conn->query($select);
                if($run->num_rows>0){
                                      while($row=$run->fetch_array()) {
                                                                        $user_email=$row['user_email'];
                                                                        $user_province=$row['user_province'];

                                                                      }
                                                                      switch ($user_province) {
                                                                        case 'srinagar':
                                                                          $prefix="SRI";
                                                                          $rand=rand(9999999,1234567);
                                                                          $postfix="NGR";
                                                                          $id_generated=$prefix.$rand.$postfix;
                                                                          break;
                                                                          case 'ganderbal':
                                                                            $prefix="GND";
                                                                            $rand=rand(9999999,1234567);
                                                                            $postfix="RBL";
                                                                            $id_generated=$prefix.$rand.$postfix;
                                                                            break;
                                                                            case 'kopwara':
                                                                              $prefix="KOP";
                                                                              $rand=rand(9999999,1234567);
                                                                              $postfix="WRA";
                                                                              $id_generated=$prefix.$rand.$postfix;
                                                                              break;
                                                                              case 'budgam':
                                                                                $prefix="BUD";
                                                                                $rand=rand(9999999,1234567);
                                                                                $postfix="GAM";
                                                                                $id_generated=$prefix.$rand.$postfix;
                                                                                break;
                                                                                case 'shopian':
                                                                                  $prefix="SHP";
                                                                                  $rand=rand(9999999,1234567);
                                                                                  $postfix="IAN";
                                                                                  $id_generated=$prefix.$rand.$postfix;
                                                                                  break;
                                                                                  case 'baramulla':
                                                                                    $prefix="BAR";
                                                                                    $rand=rand(9999999,1234567);
                                                                                    $postfix="MLA";
                                                                                    $id_generated=$prefix.$rand.$postfix;
                                                                                    break;
                                                                                    case 'pulwama':
                                                                                      $prefix="PUL";
                                                                                      $rand=rand(9999999,1234567);
                                                                                      $postfix="WMA";
                                                                                      $id_generated=$prefix.$rand.$postfix;
                                                                                      break;
                                                                                      case 'ananthnag':
                                                                                        $prefix="ANT";
                                                                                        $rand=rand(9999999,1234567);
                                                                                        $postfix="NGH";
                                                                                        $id_generated=$prefix.$rand.$postfix;
                                                                                        break;
                                                                                        case 'sopore':
                                                                                          $prefix="SOP";
                                                                                          $rand=rand(9999999,1234567);
                                                                                          $postfix="ORE";
                                                                                          $id_generated=$prefix.$rand.$postfix;
                                                                                          break;

                                                                        default:
                                                                          // code...
                                                                          break;
                                                                                              }
            ?>
                    <form method="post">
                      <div class="form-group">
        								<label for="exampleInputEmail1">User Email</label>
        								 <input type="email" class="form-control" id="exampleInputEmail1" name="user_email" placeholder="Enter email" required readonly value="<?php echo $user_email; ?>">
        							</div>

                      <div class="form-group">
        								<label for="exampleInputEmail1">User Province</label>
        							  	<input type="text" class="form-control" id="exampleInputEmail1" name="user_province" placeholder="Enter email" required readonly value="<?php echo $user_province; ?>">
        							</div>

                      <div class="form-group">
        								<label for="exampleInputEmail1">ID Granted to user</label>
        							  	<input type="text" class="form-control" id="exampleInputEmail1" name="id_generated" placeholder="Enter email" required readonly value="<?php echo $id_generated; ?>">
        							</div>
                          <div class="form-group">
                              <input type="submit" name="update" value="Update User ID" class="form-control btn btn-success">
                          </div>

                    </form>
            <?php

                                    }
									else{
											echo "Record not found!";
										}
            ?>
        </div>
        <div class="col-sm-6">

        </div>
    </div>
</body>
</html>
<?php
if(isset($_POST['update'])){
							$user_email=$_POST['user_email'];
							$id_generated=$_POST['id_generated'];
							$update="update users_db set id_generated='$id_generated' where user_email='$user_email'";
							$run=$conn->query($update);
							if($run){

										$delete="delete from id_request where user_email='$user_email'";
										$del=$conn->query($delete);
										if($del){
												  echo "<script>alert('ID Generated Successfully!')</script>";
												  echo "<script>window.location.href='idrequest.php'</script>";
												}
									}else{
											echo "<script>alert('Something went wrong!!!')</script>";
										 }
						   }

?>
