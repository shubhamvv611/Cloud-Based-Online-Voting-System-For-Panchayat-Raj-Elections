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
      <h3><span class="colorwhite"><i class="fa fa-angellist" aria-hidden="true">&#160;</i>Add Preference</span></h3>
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
        <div class="col-lg-12">
           <h5><label for="inputPassword4" class="badge badge-pill badge-primary">Election Name</label></h5>
           <input type="txt" class="form-control form-control-lg " id="" value="<?php echo $_SESSION['ElectionName'];?>" placeholder="User Election Name" name="User_Email" required disabled>
        </div>
      </div>
      <br>
      
      <div class="row">
        <div class="col-lg-8">
          <input type="text" class="form-control form-control-lg " name="User_City" placeholder="Enter City">
        </div>
        <div class="col-lg-4">
          <button class="btn btn-lg btn-primary btn-block" name="Getcitybyuser"> Submit</button>
        </div>
      </div>
    </form>
  </div>
</div>
<br><br>

<?php 
if (isset($_POST['Getcitybyuser'])) {
  
  $getcity=$_POST['User_City'];
  $_SESSION['User_ElectionCity']=$getcity;
  //echo "$getverified";
   //Connection start
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Online_Voting";
//$Election_Name=$_POST["submit"];
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

    echo "$Election_Name";
}
//Connection End
?>
<div class="card card-body" >
<h3 class="display-5">Choose Any One Center as per your convenience From the List</h3>
<?php 
    $sql="SELECT * from pollingstation WHERE pollingcity='$getcity'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
      echo "<br>";
    while ($row=$result-> fetch_assoc()) {
      echo"
      <br>
      <form action='#' method='POST'>
      <div class='card card-body col-lg-6 align-self-center'>
      <div class='form-check d-flex justify-content-between'>
      <p class='display-5'><input class='form-check-input ElectionBooth' type='checkbox' name='Electionstation' value=".$row['pollingstation'].">
      <label class='form-check-label'> ".$row["pollingstation"]."</label><p>
      <p >Available Slots <span class='badge badge-danger badge-pill'>".$row["seatsavailability"]."</span></p>
      </div>
      </div>
      ";
    }

    
         echo"
              <br>
              
              <input type='submit' class='btn btn-danger btn-lg mx-auto d-block' name='apply' style='margin-bottom:3%' disabled>
              </form>
              "; 
      }
     else
          {
            echo "No Data";
          }
  }

   // $_SESSION["Electionstation"]=$_POST["Electionstation"];
  

?>
<?php
  
  if(isset($_POST["apply"]))
  {

    $_SESSION['ElectionStation']=$_POST["Electionstation"];
    if($_SESSION['ElectionStation'])
    {
      header("Location:ConfirmInfo.php");
    }

  }

?>
</div>
  </div>

<br>
<br>
<div class="footer">
    <div class="card card-body bg-danger">
      <center class="colorwhite"><i class="fa fa-laptop" aria-hidden="true"></i> Developed By Pranoti with <i class="fa fa-heart" aria-hidden="true" style="color:white"></i></center>
      <center class="colorwhite"> <i class="fa fa-copyright" aria-hidden="true"></i> Reserved by Election Commission of India</center>
     </div>
  </div>
  <!--For checking Only one checkbox start -->
<script type="text/javascript">
  $(function () {
  $('.ElectionBooth').click(function(e) {
    $('.ElectionBooth').not(this).prop('checked', false);
  });
});

//To check that is atleast one checkbox select or not 
var checkboxes = $("input[type='checkbox']"),
    submitButt = $("input[type='submit']");

checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
});
</script>
<!--For checking Only one checkbox End-->

</body>
</html>
<!--Below php is else part of php which is checking that user is loggedin or not-->
<?php 
}
else{
  header("Location:index.php");
}


 ?>
