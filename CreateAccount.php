
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<!--linking-->
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
<body class="LoginFormBackground">
  <!--navbar start-->
  <nav class="navbar navbar-light">
    <div class="container">
    
    <div class="col-lg-6"> <a href="UserLogin.php" class="btn btn-dark btn-lg btn-block"><i class="fa fa-user-circle" aria-hidden="true"></i> Login</a></div>
     <div class="col-lg-6"> <a href="index.php" class="btn btn-dark btn-lg btn-block"><i class="fa fa-user" aria-hidden="true"></i> Home</a></div>
  </div>
  </nav>
  <!--Ended-->
  
<div class="container" >
	<center ><span class="card  card-body bg-dark display-4 colorwhite" >Sign Up</span></center>
	<!-- Form Start--> 
	<div class="card  card-body bg-light">
	<form class="bootstrap-form needs-validation" action="#" method="Post">
  <div class="form-row">

    <div class="form-group col-md-6">
      <h5><label class="badge badge-pill badge-primary">Enter Full Name Here</label></h5>
      <input type="text" class="form-control  signupdata" id=""  name="User_Name" placeholder="SurName FirstName MiddleName" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Looks Good <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Valid Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>

    <div class="form-group col-md-6">
      <h5><label for="inputPassword4" class="badge badge-pill badge-primary">Email</label></h5>
      <input type="email" class="form-control signupdata" id="" name="User_Email" placeholder="Enter Email Here" required>
     <div class="valid-feedback">
    <h6><span class="badge badge-pill badge-success">Valid Email <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
  <h6><span class="badge badge-pill badge-danger">Oops Invalid Email <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>

  </div>

  <div class="form-row">

    <div class="form-group col-md-6">
      <h5><label class="badge badge-pill badge-primary">Enter Password</label></h5>
      <input type="password" class="form-control" id="password" name="User_Password"  placeholder="Enter Password" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Looks Good <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter password please<i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>

    <div class="form-group col-md-6">
      <h5><label for="inputPassword4" class="badge badge-pill badge-primary">Confirm Password</label></h5>
      <input type="password" class="form-control " id="Confirm_password" name="User_Confirmpassword"  placeholder="Enter Password again" required>
     <div style="padding:10px">
    	<h6><span class="badge badge-pill badge-success" id="message"></span> </h6>
      </div>
  
    </div>

  </div>



  <div class=form-row>
   <div class="form-group col-md-6">
    	<h5><label for="inputAddress2" class="badge badge-pill badge-primary">Mobile</label></h5>
<input type="tel" class="form-control signupdata"  id="mobile"  name="User_Mobile"  placeholder="Enter Mobile Number" required>
     <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Valid Number <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
  <h6><span class="badge badge-pill badge-danger">Oops Invalid Number <i class="fa fa-times-circle"></i></span></h6>
      </div>
  </div> 

   <div class="form-group col-md-6">
    <h5><label for="inputAddress2" class="badge badge-pill badge-primary">Aadhar Card</label></h5>
  <input type="tel" class="form-control signupdata"   id="Aadhar"  name="User_Aadhar" placeholder="Enter Aadhar Card Number" required>
   <div class="valid-feedback">
    <h6><span class="badge badge-pill badge-success">Varified Aadhar <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
  <h6><span class="badge badge-pill badge-danger">Enter Valid Aadhar <i class="fa fa-times-circle"></i></span></h6>
      </div>
  </div> 
  <div class="form-group col-md-6">
    <h5><label for="inputAddress2" class="badge badge-pill badge-primary">Election Id</label></h5>
<input type="text" class="form-control signupdata" maxlength="12" name="User_Electionid"  placeholder="Enter Election card number" required>
 <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified ID <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Oops Wrong ID <i class="fa fa-times-circle"></i></span></h6>
      </div>
  </div>
  	
  </div>
  <div class="form-group">
    <h5><label for="inputAddress" class="badge badge-pill badge-primary">Address</label></h5>
    <input type="text" class="form-control signupdata" id="" name="User_Address" placeholder="Enter recidential Address" required>
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
      <select id="listBox" onchange='selct_district(this.value)' class="form-control signupdata" name="User_State" required>
        <option selected>Select From DropDown</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <h5><label for="inputState" class="badge badge-pill badge-primary">Select District</label></h5>
      <select id='secondlist'   class="form-control signupdata" name="User_District" required>
        <option selected>Select From DropDown</option>
      </select>
    </div>
    <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Tahsil</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_Tahsil" placeholder="Enter Tahsil Name" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Tahsil Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
     <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">City</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_City" placeholder="Enter city Name" required>
       <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter City name <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
    <div class="form-group col-md-4">
      <h5><label for="inputZip" class="badge badge-pill badge-primary">Pincode</label></h5>
      <input type="tel" class="form-control signupdata" id="pin" name="User_Pincode" placeholder="Enter Pincode" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Verified Pin <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Pin Here <i class="fa fa-times-circle"></i></span></h6>
      </div>
    </div>
       <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Loksabha Constituency</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_LoksabhaConstituency" placeholder="Enter Loksabha Constituency" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Loksabha Constituency Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p  class="text-danger">Note:Enter <i>"NA"</i> If you dosen't belongs to any constituency </p>
    </div>

        <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Vidhansabha Constituency</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_VidhansabhaConstituency" placeholder="Enter Vidhansabha Constituency" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Vidhansabha Constituency Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p  class="text-danger">Note:Enter <i>"NA"</i> If you dosen't belongs to any constituency </p>
    </div>
      <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Mahanagarpalika Constituency</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_MahanagarpalikaConstituency" placeholder="Enter Mahanagarpalika Constituency" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Mahanagarpalika Constituency Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p  class="text-danger">Note:Enter <i>"NA"</i> If you dosen't belongs to any constituency </p>
    </div>
          <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Nagarpalika Constituency</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_NagarpalikaConstituency" placeholder="Enter Nagarpalika Constituency" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Nagarpalika Constituency Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p  class="text-danger">Note:Enter <i>"NA"</i> If you dosen't belongs to any constituency </p>
    </div>
      <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Jilhaparishad Constituency</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_JilhaparishadConstituency" placeholder="Enter Jilhaparishad Constituency" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Jilhaparishad Constituency Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p class="text-danger">Note:Enter <i>"NA"</i> If you dosen't belongs to any constituency </p>
    </div>
          <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Nagarparishad Constituency</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_NagarparishadConstituency" placeholder="Enter Nagarparishad Constituency" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Nagarparishad Constituency Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p  class="text-danger">Note:Enter <i>"NA"</i> If you dosen't belongs to any constituency </p>
    </div>

      <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Panchayatsamiti Constituency</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_PanchayatsamitiConstituency" placeholder="Enter Panchayatsamiti Constituency" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Panchayatsamiti Constituency Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p  class="text-danger">Note:Enter <i>"NA"</i> If you dosen't belongs to any constituency </p>
    </div>
      <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Grampanchayat Constituency</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_GrampanchayatConstituency" placeholder="Enter Grampanchayat Constituency" required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Grampanchayat Constituency Name <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p class="text-danger">Note:Enter <i>"NA"</i> If you dosen't belongs to any constituency </p>
    </div>

    <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Mahanagarpalika Ward Number</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_MahanagarpalikaWardNumber" placeholder="Enter Mahanagarpalika Ward Number " required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Mahanagarpalika Ward Number <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p class="text-danger">Note:Enter <i>"0"</i> If you dosen't belongs to any Ward </p>
    </div>

    <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Nagarpalika Ward Number</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_NagarpalikaWardNumber" placeholder="Enter Nagarpalika Ward Number " required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Nagarpalika Ward Number <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p class="text-danger">Note:Enter <i>"0"</i> If you dosen't belongs to any Ward </p>
    </div>

    <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Nagarparishad Ward Number</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_NagarparishadWardNumber" placeholder="Enter Nagarparishad Ward Number " required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Nagarparishad Ward Number <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p class="text-danger">Note:Enter <i>"0"</i> If you dosen't belongs to any Ward </p>
    </div>

    <div class="form-group col-md-4">
      <h5><label for="inputCity" class="badge badge-pill badge-primary">Grampanchayat Ward Number</label></h5>
      <input type="text" class="form-control signupdata" id="inputCity" name="User_GrampanchayatWardNumber" placeholder="Enter Grampanchayat Ward Number " required>
      <div class="valid-feedback">
      <h6><span class="badge badge-pill badge-success">Validated <i class="fa fa-check-circle"></i></span> </h6>
      </div>
      <div class="invalid-feedback">
      <h6><span class="badge badge-pill badge-danger">Enter Grampanchayat Ward Number <i class="fa fa-times-circle"></i></span></h6>
      </div>
      <p class="text-danger">Note:Enter <i>"0"</i> If you dosen't belongs to any Ward </p>
    </div>








  </div>
  <br>
  <br>
  <button type="submit" class="btn btn-success btn-lg btn-block" name="SaveData">Save Data</button>
</form>
	</div>
	<!-- Form End--> 

</div>	
</div>

  <br>
  <br>

  
</body>
</html>

<!--PHP Started-->

<?php 
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

if(isset($_POST["SaveData"]))
{
$User_Name=$_POST["User_Name"];
$User_Email=$_POST["User_Email"];
$User_Password=md5($_POST["User_Password"]);
$User_Confirmpassword=$_POST["User_Confirmpassword"];
$User_Mobile=$_POST["User_Mobile"];
$User_Aadhar=$_POST["User_Aadhar"];
$User_Electionid=$_POST["User_Electionid"];
$User_Address=$_POST["User_Address"];
$User_State=$_POST["User_State"];
$User_District=$_POST["User_District"];
$User_Tahsil=$_POST["User_Tahsil"];
$User_City=$_POST["User_City"];
$User_Pincode=$_POST["User_Pincode"];
$User_LoksabhaConstituency=$_POST["User_LoksabhaConstituency"];
$User_VidhansabhaConstituency=$_POST["User_VidhansabhaConstituency"];
$User_MahanagarpalikaConstituency=$_POST["User_MahanagarpalikaConstituency"];
$User_NagarpalikaConstituency=$_POST["User_NagarpalikaConstituency"];
$User_JilhaparishadConstituency=$_POST["User_JilhaparishadConstituency"];
$User_NagarparishadConstituency=$_POST["User_NagarparishadConstituency"];
$User_PanchayatsamitiConstituency=$_POST["User_PanchayatsamitiConstituency"];
$User_GrampanchayatConstituency=$_POST["User_GrampanchayatConstituency"];
$User_MahanagarpalikaWardNumber=$_POST["User_MahanagarpalikaWardNumber"];
$User_NagarpalikaWardNumber=$_POST["User_NagarpalikaWardNumber"];
$User_NagarparishadWardNumber=$_POST["User_NagarparishadWardNumber"];
$User_GrampanchayatWardNumber=$_POST["User_GrampanchayatWardNumber"];


$sql = "INSERT INTO usersignup (User_Name,User_Email,User_Password,User_Confirmpassword,User_Mobile,User_Aadhar,User_Electionid,User_Address,User_State,User_District,User_Tahsil,User_City,User_Pincode,User_LoksabhaConstituency,User_VidhansabhaConstituency,User_MahanagarpalikaConstituency,User_NagarpalikaConstituency,User_JilhaparishadConstituency,User_NagarparishadConstituency,User_PanchayatsamitiConstituency,User_GrampanchayatConstituency,User_MahanagarpalikaWardNumber,User_NagarpalikaWardNumber,User_NagarparishadWardNumber, User_GrampanchayatWardNumber)
VALUES ('$User_Name','$User_Email','$User_Password','$User_Confirmpassword','$User_Mobile','$User_Aadhar','$User_Electionid','$User_Address','$User_State','$User_District','$User_Tahsil','$User_City','$User_Pincode','$User_LoksabhaConstituency','$User_VidhansabhaConstituency','$User_MahanagarpalikaConstituency','$User_NagarpalikaConstituency','$User_JilhaparishadConstituency','$User_NagarparishadConstituency','$User_PanchayatsamitiConstituency','$User_GrampanchayatConstituency','$User_MahanagarpalikaWardNumber','$User_NagarpalikaWardNumber','$User_NagarparishadWardNumber', '$User_GrampanchayatWardNumber')";

if ($conn->query($sql) === TRUE) {
    echo "<script type='text/javascript'>
		swal({
  title: 'Your Account is Created',
  text: 'Your are User Now,Just goto Home page and Click On login button for Login',
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

$conn->close();
}

 ?>
<!--PHP Ended-->
<!--If user came without login -->

<!--If user came without login end-->