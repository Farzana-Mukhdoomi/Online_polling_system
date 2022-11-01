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
          <div class="row">
              <div class="col-sm-6">
                  <h4 class="text text-center text-info alert bg-primary">How to Caste Your Vate<b><i>?</i></b></h4>
                  <ul>
                     <li>Firstly select<b>"ID Generate"</b> from navigation bar</li>
                     <li>Then send request to <b>"Admin"</b> for Generate Your ID</li>
                     <li>Click on the<b>"Election"</b> from navigation bar</li>
                     <li>Select available election</li>
                     <li>The secrecy of your ballot is maintained  under the high security standards adhered to by Polyas'online voting software</li>
                     <li>Your vote remains anonymous as our system's architecture strictly separates your personal data from the electronics ballot</li>
                  </ul>
              </div>
              <br>
                  <div class="col-sm-6">
                      <img src="images/1.jpg" class="img img-responsive img-thumbnail">
                  </div>
          </div>
      </div>

       <?php
          include("footer.php");
        ?>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
</html>
