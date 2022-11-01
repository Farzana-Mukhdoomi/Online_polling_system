<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>CR Voting | Green Syntax</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href='http://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>

    <style>

    body{
      margin:0px;
      padding:0px;
    }
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

      a {
        color: #FFFFFF;
        text-decoration: none;
      }

      a:link {
        color: #FFFFFF;
        text-decoration: none;
      }

      /* visited link */
      a:visited {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* mouse over link */
      a:hover {
          color: #FFFFFF;
          text-decoration: none;
      }

      /* selected link */
      a:active {
          color: #FFFFFF;
          text-decoration: none;
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
    <?php
    include("header.php");
    ?>
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-12">
            <div class="jumbotron text-center text-block" style="padding-top:170px;">
              <img src="images/Vote.png" alt="">
                  <h1 class="specialHead">Online Voting System</h1>
                  <p class="normalFont">Safe . Reliable . Secure . Fast </p>
            </div>
          </div>
        </div>
      </div>

      <div class="conatiner" id="featuresTab">
        <div class="row">
          <div class="col-sm-12 text-center">
            <div class="page-header" style="padding-top:50px;padding-bottom:50px">
              <h1 class="normalFont" style="font-size:44px;" >WHAT IS IT.</h1>
              <p class="subFont" style="font-size:24px;"><em>A Intractive Way To Solve Conventional Voting.</em></p>
            </div>
          </div>
        </div>
      </div>

      <div class="conatiner" style="padding:50px;" id="aboutTab">
        <div class="row">



          <div class="col-sm-4 text-center">

            <img src="images/Nominee.png" width="100" height="100" alt=""/>
            <h2 class="normalFont" style="font-size:28px;">VOTE ONLINE.</h2>
            <p><em>You Just Need Basic Details of Yours and We Will Let You Vote. Right to Vote provides technology for Governments, Associations, Corporates, Clubs, Colleges, Unions, Housing societies, Cooperatives and Socials groups to create and manage election online.</em></p>

          </div>
          <div class="col-sm-4 text-center">

            <img src="images/Vote.png" width="100" height="100" alt=""/>
            <a href="nomination.html" class="normalFont" style="font-size:28px;"><h2 style="color: black">Nomination</h2></a>
            <p><em>All nominated candidates are updated after the process begins. Admin's Control Panel allows you to manage the list of  filled nomination.</em></p>

          </div>
          <div class="col-sm-4 text-center">

            <img src="images/Stats.png" width="100" height="100" alt=""/>
            <h2 class="normalFont" style="font-size:28px;" >Statitics</h2>
            <p><em>Shows You the Graphical Data Representation of your votes. And, You can locate the option after registration in 'Result' section.</em></p>

          </div>


        </div>
      </div>
        <hr>
        <div class="container" id="feedbackTab">
          <div class="row">
            <div class="col-sm-12 text-center" style="">
              <div class="page-header" style="padding-top:30px;padding-bottom:30px;">
                <img src="images/MailBoy.png" width="100" height="100" alt="">
                <br>
                <h1 class="specialHead">CONTACT</h1>
                <p style="font-size:16px;">If you have any suggestions regarding our voting system. You can write us on "Onlinevoting@icsc17.com"</p>


                <br>
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
