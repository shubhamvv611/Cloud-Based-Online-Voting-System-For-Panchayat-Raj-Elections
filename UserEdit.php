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
	<title>User Edit</title>
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
<body >
    <nav class="navbar navbar-toggleable-md navbar-light bg-danger colorwhite">
    <a class="navbar-brand" href="#">
      <h3><span class="colorwhite"><i class="fa fa-angellist" aria-hidden="true"></i> User's Verification</span></h3>
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
	<center ><span class="card card-body bg-dark display-4 colorwhite" >Edit Profile</span></center>
	<!-- Form Start--> 
	<div class="card card-body bg-light">
	<form class="bootstrap-form needs-validation" action="#" method="POST">
  <div class="form-row">

    <div class="form-group col-md-6">
      <h5><label class="badge badge-pill badge-primary">Edit Full Name Here</label></h5>
      <input type="text" class="form-control  signupdata" id="" value="<?php echo $row['User_Name']; ?>" placeholder="SurName FirstName MiddleName" name="UserName" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Looks Good <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Valid Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>

    <div class="form-group col-md-6">
      <h5><label for="inputPassword4" class="badge badge-pill badge-primary">Email</label></h5>
      <input type="email" class="form-control signupdata" id="" value="<?php echo $row['User_Email']; ?>" placeholder="Enter Email Here" name="User_Email" required disabled>
     <div class="valid-feedback">
    <h6><span class="badge badge-pill badge-success">Valid Email <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
  <h6><span class="badge badge-pill badge-danger">Oops Invalid Email <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>

  </div>

  


  <div class=form-row>
   <div class="form-group col-md-6">
    	<h5><label for="inputAddress2" class="badge badge-pill badge-primary">Edit Mobile</label></h5>
<input type="tel" class="form-control signupdata"  id="mobile" value="<?php echo $row['User_Mobile']; ?>"  placeholder="Enter Mobile Number"  name="User_Mobile" required>
     <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Valid Number <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
  <h6><span class="badge badge-pill badge-danger">Oops Invalid Number <i class="fa fa-times-circle"></i></span></h6>
      </div>
  </div> 
  <div class="form-group col-md-6">
    <h5><label for="inputAddress" class="badge badge-pill badge-primary">Edit Aadhar</label></h5>
    <input type="text" class="form-control signupdata" value="<?php echo $row['User_Aadhar']; ?>" id="" placeholder="Enter Aadhar" name="User_Aadhar" required>
    <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Valid Aadhar <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
  <h6><span class="badge badge-pill badge-danger">Enter Aadhar Please <i class="fa fa-times-circle"></i></span></h6>
      </div>
  </div>
   <div class="form-group col-md-6">
    <h5><label for="inputAddress" class="badge badge-pill badge-primary">Edit Election Id</label></h5>
    <input type="text" class="form-control signupdata" id="" value="<?php echo $row['User_Electionid']; ?>" placeholder="Enter Election Id" name="User_Electionid" required>
    <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Valid Election Id<i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
  <h6><span class="badge badge-pill badge-danger">Enter Election ID Please<i class="fa fa-times-circle"></i></span></h6>
      </div>
  </div>
<div class="form-group col-md-6">
    <h5><label for="inputAddress" class="badge badge-pill badge-primary">Edit Address</label></h5>
    <input type="text" class="form-control signupdata" id="" value="<?php echo $row['User_Address']; ?>" placeholder="Enter recidential Address" name="User_Address" required>
    <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Valid Address <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
  <h6><span class="badge badge-pill badge-danger">Enter Address Please <i class="fa fa-times-circle"></i></span></h6>
      </div>
  </div>
 <div class="form-row">
   <div class="form-group col-md-4">
      <h5><label for="inputState" class="badge badge-pill badge-primary">Select State</label></h5>
      <input type="text" name="User_State" value="<?php echo $row['User_State']; ?>" class="form-control signupdata" required>
      </div>
    <div class="form-group col-md-4">
      <h5><label for="inputState" class="badge badge-pill badge-primary">Select District</label></h5>
      <input type="text" name="User_District" value="<?php echo $row['User_District']; ?>" class="form-control signupdata" required>
    </div>
    <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Tahsil</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" value="<?php echo $row['User_Tahsil']; ?>" placeholder="Enter Tahsil Name"  Name="User_Tahsil" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Tahsil Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
     <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">City</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity"value="<?php echo $row['User_City']; ?>" placeholder="Enter city Name" name="User_City" required>
       <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit City name <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
    <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Pincode</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" value="<?php echo $row['User_Pincode']; ?>" placeholder="Enter Pincode" name="User_Pincode" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
     <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Loksabha Constituency</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" value="<?php echo $row['User_LoksabhaConstituency']; ?>" placeholder="Enter Loksabha" name="User_LoksabhaConstituency" required disabled>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
     <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Vidhansabha Constituency</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" value="<?php echo $row['User_VidhansabhaConstituency']; ?>" placeholder="Enter Vidhansabha" name="User_VidhansabhaConstituency" required disabled>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
     <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Mahanagarpalika Constituency</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" value="<?php echo $row['User_MahanagarpalikaConstituency']; ?>" placeholder="Enter Mahanagarpalika" name="User_MahanagarpalikaConstituency" required disabled>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
     <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Nagarpalika Constituency</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" value="<?php echo $row['User_NagarpalikaConstituency']; ?>" placeholder="Enter Nagarpalika" name="User_NagarpalikaConstituency" required disabled>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
     <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Jilhaparishad Constituency</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" value="<?php echo $row['User_JilhaparishadConstituency']; ?>" placeholder="Enter Jilhaparishad" name="User_JilhaparishadConstituency" required disabled>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
    <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Nagarparishad Constituency</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" value="<?php echo $row['User_NagarparishadConstituency']; ?>" placeholder="Enter Nagarparishad" name="User_NagarparishadConstituency" required disabled>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
    <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Panchayatsamiti Constituency</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" value="<?php echo $row['User_PanchayatsamitiConstituency']; ?>" placeholder="Enter Panchayatsamiti" name="User_PanchayatsamitiConstituency" required disabled>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
    <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Grampanchayat Constituency</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" value="<?php echo $row['User_GrampanchayatConstituency']; ?>" placeholder="Enter Grampanchayat" name="User_GrampanchayatConstituency" required disabled>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Edit Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
  </div>
  <br>
  <br>
  <a  class="btn btn-danger btn-lg  col-md-6" href="UserPanel.php">Back to Panel</a>
  <button type="submit" class="btn btn-success btn-lg col-md-6" name="SaveData">Save Data</button>

</form>
	</div>
	<!-- Form End--> 
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
if (isset($_POST["SaveData"])) {

$User_Name=$_POST["UserName"];
//$User_Email=$_POST["User_Email"];
$User_Mobile=$_POST["User_Mobile"];
$User_Aadhar=$_POST["User_Aadhar"];
$User_Electionid=$_POST["User_Electionid"];
$User_Address=$_POST["User_Address"];
$User_State=$_POST["User_State"];
$User_District=$_POST["User_District"];
$User_Tahsil=$_POST["User_Tahsil"];
$User_City=$_POST["User_City"];
$User_Pincode=$_POST["User_Pincode"];


$sql = "UPDATE usersignup SET User_Name='$User_Name', User_Mobile='$User_Mobile', User_Aadhar='$User_Aadhar', User_Electionid='$User_Electionid', User_Address='$User_Address', User_State='$User_State', User_District='$User_District', User_Tahsil='$User_Tahsil', User_City='$User_City', User_Pincode='$User_Pincode' WHERE User_Email='".$_SESSION['UserName']."'";


if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
    swal({
  title: 'Upadated Successfully',
  text: 'You are updated now',
  icon: 'success',
  button: 'Close',
});
    </script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
          echo "<script type='text/javascript'>
                swal({
                title: 'This Email is Already Used',
                text: 'Please Login with password Or use Another Email',
                icon: 'error',
                button: 'Close',
                });
                </script>";
}
}
$conn->close();
?>







<!--Below php is else part of php which is checking that user is loggedin or not-->
<?php 
}
else{
  header("Location:index.php");
}


 ?>