<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title>UserLogin Here</title>
<!--linking-->
<link rel="icon" href="../images/favicon.ico" type="image/x-icon"/>
  <link rel="stylesheet" type="text/css" href="../style/css/style.css">
  <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="../style/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../style/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="../style/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="../style/font-awesome-4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="../style/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../style/js/bootstrap.js"></script>
  <script type="text/javascript" src="../style/js/jquery.js"></script>
  <script type="text/javascript" src="../style/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="../style/js/jquery.min.js"></script>
  <script type="text/javascript" src="../style/js/state.js"></script>
  <script type="text/javascript" src="../style/js/validator.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="../style/js/sweetalert.js"></script>
  <!--linking End-->
</head>
<body >
  <br>

  <div class="container-fluid ">
      <center>
        <div class="card card-transperent" style="width:25rem; border-radius:20px;">
            <div class="card-header">
            <center><img src="../images/MainLogo.png" class="rounded-circle"></center>
            <br>
            </div>
          <div class="card-body text-left">
            <form class="was-validated" action="#" method="POST">
            <div class="form-group">
            <label for="uname"><h5><b class="badge badge-pill badge-warning">Enter Your Email</b></h5></label>
              <input type="text" class="form-control display-4 " id="uname" name="UserEmail" placeholder="Enter EmailID "  required>
              <div class="valid-feedback "><b>Valid Email Id</b></div>
              <div class="invalid-feedback "><b>Please fill out this field.</b></div>
          </div>
            <div class="form-group">
                <label for="pwd"><h5><b class="badge badge-pill badge-warning">Password</b></h5></label>
                <input type="password" class="form-control display-4" id="pwd" name="UserPassword" placeholder="Enter password" required>
                <div class="valid-feedback"><b>Password Entered</b></div>
                <div class="invalid-feedback"><b>Please fill out this field.</b></div>
            </div>
            <div class="form-group">
                <label for="pwd"><h5><b class="badge badge-pill badge-warning">Scan Your Finger</b></h5></label>
                <input type="password" class="form-control display-4" id="ScanFinger" name="ScanFinger" placeholder="Enter password" required>
                <div class="valid-feedback"><b>Scan the Finger</b></div>
                <div class="invalid-feedback"><b>Please Scan the Finger.</b></div>
            </div>

          <div class="form-group">
              <div class="card-footer">
                <br>
          <center><button type="submit" class="col-12 btn btn-primary btn-lg" name="Submit">Submit</button></center>
                </div>
              </div>
          </form>
          
      </div>
    </center>
  </div>
  <br>
  <br>
</body>
</html>

<?php 
if(isset($_POST["Submit"]))
{
$UserEmail=$_POST["UserEmail"];
$UserPassword=$_POST["UserPassword"];

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
$sql = "SELECT User_Password  FROM usersignup WHERE User_Email='$UserEmail'"; 
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        //echo "Password: " . $row["Admin_Password"]. "<br>";
        $PasswordFetched=$row["User_Password"];
        //echo "$PasswordFetched";
        if(md5($UserPassword)==$PasswordFetched)
        {
          $_SESSION['UserName'] = $UserEmail;
          header("Location:MahanagarpalikaVoterList.php");
        }
        else{
            echo "<script type='text/javascript'>
                swal({
                  title: 'Password Not Correct',
                  text: 'Please Enter Valid Credential',
                  icon: 'error',
                  button: 'Close',
                });
                </script>";
        }
    }
} else {
    echo "<script type='text/javascript'>
      swal({
        title: 'Record Not found',
        text: 'Please Enter Valid Credential',
        icon: 'error',
        button: 'Close',
      });
      </script>";
}

$conn->close();

}

?>