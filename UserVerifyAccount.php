<?php session_start(); if ($_SESSION["UserName"]==true) {
?>
<!DOCTYPE html>
<html>
<head>
  <title>User Verified</title>
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
      <h3><span class="colorwhite"><i class="fa fa-angellist" aria-hidden="true"></i>Validate Profile</span></h3>
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
<br>
<div class="container">
  <div class="card">
  <div class="card-body">
    <form method="POST" action="#">
      <div class="row">
        <div class="col-lg-8">
          <input type="text" class="form-control form-control-lg " name="User_Aadhar" placeholder="Enter Aadhar Card Number if not display">
        </div>
        <div class="col-lg-4">
          <button class="btn btn-lg btn-primary btn-block" name="GetValidate"> Get Validate</button>
        </div>
      </div>
    </form>
  </div>
</div>
<br><br>

<?php 
if (isset($_POST['GetValidate'])) {
  
  $getverified=$_POST['User_Aadhar'];
  //echo "$getverified";
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



$query="SELECT Adhaar_Number FROM adhaar_data WHERE User_Email='".$_SESSION['UserName']."' LIMIT 1";

$result = mysqli_query($conn,$query);

$row = mysqli_fetch_assoc($result);

//echo $row['Adhaar_Number']; 


if ($getverified==$row['Adhaar_Number']) {

                    $sql="UPDATE usersignup SET User_Verify='1' WHERE User_Email='".$_SESSION['UserName']."'LIMIT 1";
                    $result = mysqli_query($conn,$sql);

                    echo " <div class='container-fluid'>
                          <div class='row'>
                            <h1 class='display-4 col-6 col-md-4' style='color:#13f513d1;'>You are Verified User</h1>
                            <center><img src='images/Happy.png' class='img-responsive col-12 col-md-8'></center>
                          </div>
                          </div>";
                  }
      else{
                  echo " <div class='container-fluid'>
                        <div class='row'>
                          <h1 class='display-4 col-6 col-md-4' style='color:#f91717e0'>You are Not Verified User</h1>
                          <center><img src='images/Sad.png' class='img-responsive col-12 col-md-8 '></center>
                        </div>
                      </div>";
                  }
}

?>
</div>
</body>
</html>
<!--Below php is else part of php which is checking that user is loggedin or not-->
<?php 
}
else{
  header("Location:index.php");
}
?>