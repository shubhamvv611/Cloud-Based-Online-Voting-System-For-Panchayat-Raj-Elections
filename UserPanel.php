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
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Panel</title>
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
<body style="font-weight:500;">
    <nav class="navbar navbar-toggleable-md navbar-light bg-danger colorwhite">
    <a class="navbar-brand" href="#">
      <h3><span class="colorwhite"><i class="fa fa-users" aria-hidden="true"></i> User Panel</span></h3>
    </a>
    
    <ul class="nav navbar-right color">
      <li><?php 
      if ($row['User_Verify']==1) 
      {
     echo "<a href='#'' class='btn btn-success'>You'r Verified User </a>";
      } 
      else {
        echo "<a href='#'' class='btn btn-warning'>You'r Not Verified User</a>";
      }
      ?>
      </li>&#160;
    <li> <a href="#" class="btn btn-dark"><i class="fa fa-home" aria-hidden="true"></i><span style="font-weight:500"> Home</span></a></li>&#160;
    <li> <div class="dropdown show">
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
  <br>
  <br>
  <div class="container">
    <div class="card-deck">
     <div class="card  zoom text-center ">
        <!--image-->
        <div class="card-body">
          <h4 class="card-title"><i class="fa fa-angellist fa-4x" style="color:#dc3545;" aria-hidden="true"></i></h4>
        </div> 
        <div class="card-footer">
          
        <a href="UserVerifyAccount.php"><button class="btn btn-danger"> <i class="fa fa-share"> </i> Verify Account</button></a>
        </div>
    </div>
    <?php 
     if ($row['User_Verify']==1) 
     {
      
     ?>
    <div class="card text-center  zoom" >
        <!--image-->
        <div class="card-body">
          <h4 class="card-title"><i class="fa fa-file-o fa-4x" style="color:#dc3545;" aria-hidden="true"></i></h4>
        </div> 
        <div class="card-footer">
          
     <a href="UserView.php"><button class="btn btn-danger"><i class="fa fa-share"> </i> <span style="font-weight:500">View Profile</span></button></a>
        </div>
    </div>
    <div class="card text-center zoom" >
        <!--image-->
        <div class="card-body">
          <h4 class="card-title"><i class="fa fa-edit fa-4x" style="color:#dc3545;" aria-hidden="true"></i></h4>
        </div> 
        <div class="card-footer">
          
        <a href="UserEdit.php"><button class="btn btn-danger"><i class="fa fa-share"> </i> Edit Profile</button></a>
        </div>
    </div>
  
  </div>
  <br>
  <div class="card-deck">
    
    <div class="card  zoom text-center ">
        <!--image-->
        <div class="card-body">
          <h4 class="card-title"><i class="fa fa-registered fa-4x"  style="color:#dc3545;" aria-hidden="true"></i></h4>
        </div> 
        <div class="card-footer">
          
        <a href="RegisterElection.php"><button class="btn btn-danger"><i class="fa fa-share"> </i> Register Election</button></a>
        </div>
    </div>
    <div class="card  zoom text-center  " >
        <!--image-->
        <div class="card-body">
          <h4 class="card-title"><i class="fa fa-check fa-4x"  style="color:#dc3545;" aria-hidden="true"></i></h4>
        </div> 
        <div class="card-footer">
          
        <a href="UserSelect.php"><button class="btn btn-danger"><i class="fa fa-share"> </i> Select Election </button></a>
        </div>
    </div>
      <div class="card  zoom text-center ">
        <!--image-->
        <div class="card-body">
          <h4 class="card-title"><i class="fa fa-angellist fa-4x" style="color:#dc3545;" aria-hidden="true"></i></h4>
        </div> 
        <div class="card-footer">
          
        <a href="#"><button class="btn btn-danger"><i class="fa fa-share"> </i> Test</button></a>
        </div>
    </div>

  </div>
  <br>
  <?php 
} //this if checks that user is verified or not otherwise it shows only verify tab in a panel
else{
  echo "<br>";
  echo "<h2 class='display-6 alert alert-danger' role='alert''>You are not verified User,First click on <code>Verify Account</code> Tab and Get Verify Yousrself to view other options  </h2>";
}
 ?>

</div>
<!--row1 ended-->

<br>
<br>
<br>
</div>
  <div class="footer container-fluid">
    <div class="card card-body bg-danger">
      <center class="colorwhite"><i class="fa fa-laptop" aria-hidden="true"></i> Developed By Pranoti with <i class="fa fa-heart" aria-hidden="true" style="color:white"></i></center>
      <center class="colorwhite"> <i class="fa fa-copyright" aria-hidden="true"></i> Reserved by Election Commission of India</center>
     </div>
  </div>

</body>
</html>
<?php 
}
else{
  header("Location:index.php");
}


 ?>
