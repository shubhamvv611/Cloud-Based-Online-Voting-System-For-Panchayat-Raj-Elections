<?php session_start(); if ($_SESSION["UserName"]==true) {
   //Connection start
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Online_Voting";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//Connection End

$query="SELECT * FROM usersignup WHERE User_Email='".$_SESSION['UserName']."' LIMIT 1";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

//echo $row['User_District']; 
$User_LoksabhaConstituency=$row['User_LoksabhaConstituency'];
$User_VidhansabhaConstituency=$row['User_VidhansabhaConstituency'];
$User_MahanagarpalikaConstituency=$row['User_MahanagarpalikaConstituency'];
$User_NagarpalikaConstituency=$row['User_NagarpalikaConstituency'];
$User_JilhaparishadConstituency=$row['User_JilhaparishadConstituency'];
$User_NagarparishadConstituency=$row['User_NagarparishadConstituency'];
$User_PanchayatsamitiConstituency=$row['User_PanchayatsamitiConstituency'];
$User_GrampanchayatConstituency=$row['User_GrampanchayatConstituency'];
$User_City=$row['User_City'];


// Loksabha
$query1="SELECT Loksabha_Constituency,Loksabha_Date FROM addloksabhaelection WHERE Loksabha_Constituency='".$User_LoksabhaConstituency."'";

                $result1 = mysqli_query($conn,$query1);

                $row1 = mysqli_fetch_assoc($result1);
                $Loksabha_Constituency=$row1['Loksabha_Constituency'];
             
//vidhansabha
$query2="SELECT Vidhansabha_Constituency,Vidhansabha_Date FROM addvidhansabhaelection WHERE Vidhansabha_Constituency='".$User_VidhansabhaConstituency."'";

                $result2 = mysqli_query($conn,$query2);

                $row2 = mysqli_fetch_assoc($result2);
          
                //echo $row['User_District']; 

                $Vidhansabha_Date=$row2['Vidhansabha_Date'];
               // echo "$Vidhansabha_Date";
                $Vidhansabha_Constituency=$row2['Vidhansabha_Constituency'];
                //echo "$Vidhansabha_Constituency";
//Mahanagarpalika
$query3="SELECT Mahanagarpalika_Constituency,Mahanagarpalika_Date FROM addmahanagarpalikaelection WHERE  Mahanagarpalika_Constituency='".$User_MahanagarpalikaConstituency."' ";

                $result3 = mysqli_query($conn,$query3);

                $row3 = mysqli_fetch_assoc($result3);
          
                //echo $row['User_District']; 

                $Mahanagarpalika_Date=$row3['Mahanagarpalika_Date'];
                //echo "$Mahanagarpalika_Date";
                $Mahanagarpalika_Constituency=$row3['Mahanagarpalika_Constituency'];
                //echo "$Vidhansabha_Constituency";
//Nagarpalika
$query4="SELECT Nagarpalika_Constituency,Nagarpalika_Date FROM addnagarpalikaelection WHERE Nagarpalika_Constituency='".$User_NagarpalikaConstituency."' ";

                $result4 = mysqli_query($conn,$query4);

                $row4 = mysqli_fetch_assoc($result4);
          
                //echo $row['User_District']; 

                $Nagarpalika_Date=$row4['Nagarpalika_Date'];
               // echo "$Nagarpalika_Date";
                $Nagarpalika_Constituency=$row4['Nagarpalika_Constituency'];
               // echo "$Nagarpalika_Constituency";

//Nagarparishad
$query5="SELECT Nagarparishad_Constituency,Nagarparishad_Date FROM addnagarparishadelection WHERE Nagarparishad_Constituency='".$User_NagarparishadConstituency."' ";

                $result5 = mysqli_query($conn,$query5);

                $row5 = mysqli_fetch_assoc($result5);
          
                //echo $row['User_District']; 
                $Nagarparishad_Constituency=$row5['Nagarparishad_Constituency'];
               // echo "$Nagarparishad_Constituency";
                $Nagarparishad_Date=$row5['Nagarparishad_Date'];
                //echo "$Nagarparishad_Date";
                
         
//Grampanchayat
$query6="SELECT Grampanchayat_Constituency,Grampanchayat_Date FROM addgrampanchayatelection WHERE  Grampanchayat_Constituency='".$User_GrampanchayatConstituency."' ";

                $result6 = mysqli_query($conn,$query6);

                $row6 = mysqli_fetch_assoc($result6);
          
                //echo $row['User_District']; 
                $Grampanchayat_Constituency=$row6['Grampanchayat_Constituency'];
                //echo "$Grampanchayat_Constituency";
                $Grampanchayat_Date=$row6['Grampanchayat_Date'];
                //echo "$Grampanchayat_Date";
                

//jilhaparishad
$query7="SELECT JilhaParishad_Constituency,JilhaParishad_Date FROM addjilhaparishadelection WHERE JilhaParishad_Constituency='".$User_JilhaparishadConstituency."' ";

                $result7 = mysqli_query($conn,$query7);

                $row7 = mysqli_fetch_assoc($result7);
          
                //echo $row['User_District']; 
                $JilhaParishad_Constituency=$row7['JilhaParishad_Constituency'];
                //echo "$Grampanchayat_Constituency";
                $JilhaParishad_Date=$row7['JilhaParishad_Date'];
                //echo "$Grampanchayat_Date";
//Pamchayatsamiti
$query8="SELECT PanchayatSamiti_Constituency,PanchayatSamiti_Date FROM addpanchayatsamitielection WHERE PanchayatSamiti_Constituency='".$User_PanchayatsamitiConstituency."' ";

                $result8 = mysqli_query($conn,$query8);

                $row8 = mysqli_fetch_assoc($result8);
          
                //echo $row['User_District']; 
                $PanchayatSamiti_Constituency=$row8['PanchayatSamiti_Constituency'];
                //echo "$Grampanchayat_Constituency";
                $PanchayatSamiti_Date=$row8['PanchayatSamiti_Date'];
                //echo "$Grampanchayat_Date";                

?>
<!DOCTYPE html>
<html>
<head>
  <title>Register Election</title>
  <!--linking-->
  <link rel="icon" href="images/favicon.ico" type="image/x-icon"/>
	<link rel="stylesheet" type="text/css" href="style/css/style.css">
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="style/css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="style/font-awesome-4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="style/js/bootstrap.js"></script>
  <script type="text/javascript" src="style/js/jquery.js"></script>
  <script type="text/javascript" src="style/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="style/js/jquery.min.js"></script>
  <script type="text/javascript" src="style/js/state.js"></script>
  <script type="text/javascript" src="style/js/validator.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="style/js/sweetalert.js"></script>
	<!--linking End-->
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-danger colorwhite">
    <a class="navbar-brand" href="#">
      <h3><span class="colorwhite"><i class="fa fa-registered" aria-hidden="true"></i> Register Election</span></h3>
    </a>
    
    <ul class="nav navbar-right color">
    <li> <a href="UserPanel.php" class="btn btn-dark"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>&#160;
    &#160;<li> <div class="dropdown show">
        <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <b><?php echo $_SESSION['UserName']; ?></b>
          </a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item " href="logout.php"><i class="fa fa-times-circle"></i> LogOut</a>
        </div>
        </div>
    </li>&#160; <!--Logout Dropdown End here -->
  </ul>
  </nav>
  <br>
<div class="container">
<div class="card-deck">
  <!--Loksabha Cart start --> 
  
    <div class="card text-center  zoom" >
        <!--image-->
        <div class="card-body">
          <h3 class="card-title display-6"><?php echo "$Loksabha_Constituency"; ?>&#160;Loksabha Election</h3>
          <br>
          <h1 class="card-text badge badge-danger" style="font-size:larger;">
            <?php 

                if ($row1['Loksabha_Date']==true) {
                  $Loksabha_Date=$row1['Loksabha_Date'];
                  echo "$Loksabha_Date</h1>";
                  echo "<div class='card-footer'>
                  		 <form method='post' action='ApplyElection.php'>
                        <input type='Submit' name='ElectionType' class='btn btn-danger' value='Apply Loksabha Election'>
                         </form>
                        </div>";
                      }
                      else{
                        echo "No Election </h1>";
                        echo "<br>";
                        echo "<div class='card-footer'>
                           <button type='submit' name='LoksabhaElection' class='btn btn-danger'disabled> Apply</button>
                          </div>";
                      }
                      ?>
            </div> 
        </div>
       
  <!--Loksabha Cart End -->  
  <!--Vidhansabha Cart start -->  
<div class="card text-center zoom" >
        <!--image-->
        <div class="card-body">
          <h4 class="card-title display-5"><?php echo "$Vidhansabha_Constituency"; ?>&#160;Vidhansabha Election</h4>
         <br>
        <h1 class="card-text badge badge-danger" style="font-size:larger;">
            <?php 
                if ($Vidhansabha_Date==true) {
                  echo "$Vidhansabha_Date </h1>";
                 echo "<div class='card-footer'>
                       <form method='post' action='ApplyElection.php'>
                        <input type='Submit' name='ElectionType' class='btn btn-danger' value='Apply Vidhansabha Election'>
                         </form>
                        </div>";
                        }
                      else{
                          echo "No Election </h1>";
                          echo "<br>";
                          echo "<div class='card-footer'>
                          <a href='#''><button name='Apply' class='btn btn-danger' disabled>Apply</button></a>
                          </div>";
                          }
                ?>
          </div>
        </div>
<!--Vidhansabha Cart End --> 
<!--Mahanagarpalika Cart start --> 
    <div class="card  zoom text-center  " >
        <!--image-->
        <div class="card-body">
          <h4 class="card-title display-5"><?php echo "$Mahanagarpalika_Constituency"; ?>&#160;Mahanagarpalika Election</h4>
          <br>

        <h1 class="card-text badge badge-danger" style="font-size:larger;">
            <?php 

              if ($Mahanagarpalika_Date==true) {
                echo "$Mahanagarpalika_Date </h1>";
                echo "<br>";
                echo "<div class='card-footer'>
                       <form method='post' action='ApplyElection.php'>
                        <input type='Submit' name='ElectionType' class='btn btn-danger' value='Apply Mahanagarpalika Election'>
                         </form>
                        </div>";
                    }
                    else
                    {
                      echo "No Election </h1>";
                      echo "<br>";
                      echo "<div class='card-footer'>
                      <a href='#'><button name='Apply' class='btn btn-danger' disabled> Apply </button></a>
                      </div>" ;
                    }
               ?>
             </div> 
        </div>
</div>
<!--Mahanagarpalika Cart End --> 
  <br>
  <br>
 <!--nagarpalika Cart Start -->  
  <div class="card-deck">
    <div class="card  zoom text-center ">
        <!--image-->
        <div class="card-body">
          <h4 class="card-title display-5"><?php echo "$Nagarpalika_Constituency"; ?>&#160;Nagarpalika Election</h4>
          <br>
          <h1 class="card-text badge badge-danger" style="font-size:larger;">
            <?php 
            if ($Nagarpalika_Date==true) {
                  echo "$Nagarpalika_Date </h1>";
                  echo "<br>";
                  echo "<div class='card-footer'>
                       <form method='post' action='ApplyElection.php'>
                        <input type='Submit' name='ElectionType' class='btn btn-danger' value='Apply Nagarpalika Election'>
                         </form>
                        </div>";
                      }
                      else
                      { 
                        echo "No Election </h1>";
                        echo "<br>";
                        echo "<div class='card-footer'>
                              <a href='#'><button name='Apply' class='btn btn-danger' disabled> Apply</button></a>
                              </div>";
                      }
              ?>
              </div> 
    </div>
 <!--nagarpalika Cart End --> 
 <!--nagarparishad Cart start --> 
     <div class="card  zoom text-center ">
        <!--image-->
        <div class="card-body">
          <h4 class="card-title display-5"><?php echo "$Nagarparishad_Constituency"; ?>&#160;Nagarparishad Election</h4>
          <br>
            <h1 class="card-text badge badge-danger" style="font-size:larger;">
            <?php 
                if ($Nagarparishad_Date==true) {
                  echo "$Nagarparishad_Date </h1>";
                  echo "<br>";
                  echo "<div class='card-footer'>
                       <form method='post' action='ApplyElection.php'>
                        <input type='Submit' name='ElectionType' class='btn btn-danger' value='Apply Nagarparishad Election'>
                         </form>
                        </div>";
                        }
                else{
                  echo "No Election  </h1>";
                  echo "<br>";
                  echo "<div class='card-footer'>
                        <a href='#'><button name='Apply' class='btn btn-danger' disabled>Apply</button></a>
                        </div>";
                }
            ?>
          </div> 
      </div>
<!--nagarparishad Cart End -->
<!--Grampanchayat Cart Strat -->
    <div class="card  zoom text-center ">
        <!--image-->
        <div class="card-body">
          <h4 class="card-title"><?php echo "$Grampanchayat_Constituency"; ?>&#160;Grampanchayat Election</h4>
          <br>
              <h1 class="card-text badge badge-danger" style="font-size:larger;">
            <?php 
                if ($Grampanchayat_Date==true) {       
                echo "$Grampanchayat_Date </h1>";
                echo "<br>";
               echo "<div class='card-footer'>
                       <form method='post' action='ApplyElection.php'>
                        <input type='Submit' name='ElectionType' class='btn btn-danger' value='Apply Grampanchayat Election'>
                         </form>
                        </div>";
                    }
                else{
                     echo "No Election </h1>";
                     echo "<br>";
                     echo "<div class='card-footer'>
                          <a href='#'><button name='Apply' class='btn btn-danger' disabled>Apply</button></a>
                          </div>";

                    }
             ?>
          </div> 
    </div>
<!--Grampanchayat Cart End -->
</div>

<br>
  <br>
 <!--nagarpalika Cart Start -->  
  <div class="card-deck">
    <div class="card  zoom text-center ">
        <!--image-->
        <div class="card-body">
          <h4 class="card-title display-5"><?php echo "$JilhaParishad_Constituency"; ?>&#160;JilhaParishad Election</h4>
          <br>
          <h1 class="card-text badge badge-danger" style="font-size:larger;">
            <?php 
            if ($JilhaParishad_Date==true) {
                  echo "$JilhaParishad_Date </h1>";
                  echo "<br>";
                  echo "<div class='card-footer'>
                       <form method='post' action='ApplyElection.php'>
                        <input type='Submit' name='ElectionType' class='btn btn-danger' value='Apply JilhaParishad Election'>
                         </form>
                        </div>";
                      }
                      else
                      { 
                        echo "No Election </h1>";
                        echo "<br>";
                        echo "<div class='card-footer'>
                              <a href='#'><button name='Apply' class='btn btn-danger' disabled> Apply</button></a>
                              </div>";
                      }
              ?>
              </div> 
    </div>
 <!--nagarpalika Cart End --> 
 <!--nagarparishad Cart start --> 
     <div class="card  zoom text-center ">
        <!--image-->
        <div class="card-body">
          <h4 class="card-title display-5"><?php echo "$PanchayatSamiti_Constituency"; ?>&#160;Panchayat Samiti Election</h4>
          <br>
            <h1 class="card-text badge badge-danger" style="font-size:larger;">
            <?php 
                if ($PanchayatSamiti_Date==true) {
                  echo "$PanchayatSamiti_Date </h1>";
                  echo "<br>";
                 echo "<div class='card-footer'>
                       <form method='post' action='ApplyElection.php'>
                        <input type='Submit' name='ElectionType' class='btn btn-danger' value='Apply Panchayatsamiti Election'>
                         </form>
                        </div>";
                      }
                else{
                  echo "No Election  </h1>";
                  echo "<br>";
                  echo "<div class='card-footer'>
                        <a href='#'><button name='Apply' class='btn btn-danger' disabled>Apply</button></a>
                        </div>";
                }
            ?>
          </div> 
      </div>
<!--nagarparishad Cart End -->
</div>
</div>

<br>
<!--row1 ended-->
<!-- footer start-->
  <div class="footer">
    <div class="card card-body bg-danger">
      <center class="colorwhite"><i class="fa fa-laptop" aria-hidden="true"></i> Developed By Pranoti with <i class="fa fa-heart" aria-hidden="true" style="color:white"></i></center>
      <center class="colorwhite"> <i class="fa fa-copyright" aria-hidden="true"></i> Reserved by Election Commission of India</center>
     </div>
  </div>
  <!-- footer end-->
</body>
</html>
<?php 
}
else{
  header("Location:index.php");
}


 ?>