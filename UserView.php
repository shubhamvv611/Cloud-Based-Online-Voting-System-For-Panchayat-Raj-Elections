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
  <title>User"s Information</title>
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
      <h3><span class="colorwhite"><i class="fa fa-users" aria-hidden="true"></i> User's Information</span></h3>
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
    <div class="container fluid">
      <div class="table-responsive">
        <table class="table table-hover table-bordered">
          <tr>
            <th class="thead-red"> Name</th>
            <td><?php echo $row['User_Name']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">Email</th>
            <td><b><?php echo $row['User_Email']; ?></b></td>
          </tr>
          <tr>
            <th class="thead-red">Mobile No</th>
            <td><?php echo $row['User_Mobile']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">Aadhar </th>
            <td><?php echo $row['User_Aadhar']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">Address</th>
            <td><?php echo $row['User_Address']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">State</th>
            <td><?php echo $row['User_State']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">District</th>
            <td><?php echo $row['User_District']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">Tahsil</th>
            <td><?php echo $row['User_Tahsil']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">City</th>
            <td><?php echo $row['User_City']; ?></td>
          </tr>
           <tr>
            <th class="thead-red">Pincode</th>
            <td><?php echo $row['User_Pincode']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">Loksabha Constituency</th>
            <td><?php echo $row['User_LoksabhaConstituency']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">Vidhansabha Constituency</th>
            <td><?php echo $row['User_VidhansabhaConstituency']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">MahanagarPalika Constituency</th>
            <td><?php echo $row['User_MahanagarpalikaConstituency']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">NagarPalika Constituency</th>
            <td><?php echo $row['User_NagarpalikaConstituency']; ?></td>
          </tr>
          <tr>
            <th class="thead-red">Jilhaparishad Constituency</th>
            <td><?php echo $row['User_JilhaparishadConstituency']; ?></td>
          </tr>
           <tr>
            <th class="thead-red">Nagarparishad Constituency</th>
            <td><?php echo $row['User_NagarparishadConstituency']; ?></td>
          </tr>
           <tr>
            <th class="thead-red">Panchayatsamiti Constituency</th>
            <td><?php echo $row['User_PanchayatsamitiConstituency']; ?></td>
          </tr>
           <tr>
            <th class="thead-red">Grampanchayat Constituency</th>
            <td><?php echo $row['User_GrampanchayatConstituency']; ?></td>
          </tr>
        </table>
    </div>
</div>

<br>

  <div class="footer">
    <div class="card card-body bg-danger">
      <center class="colorwhite"><i class="fa fa-laptop" aria-hidden="true"></i> Developed By Pranoti with <i class="fa fa-heart" aria-hidden="true" style="color:white"></i></center>
      <center class="colorwhite"> <i class="fa fa-copyright" aria-hidden="true"></i> Reserved by Election Commission of India</center>
     </div>
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