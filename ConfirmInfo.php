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

if($_SESSION['ElectionName']=='Loksabha')
{

  $query1="SELECT Loksabha_Date FROM addloksabhaelection where Loksabha_Constituency='".$row['User_City']."'";

  $result1 = mysqli_query($conn,$query1);

  $row1 = mysqli_fetch_assoc($result1);

  $ElectionDate=$row1['Loksabha_Date'];

}
else if($_SESSION['ElectionName']=='Vidhansabha'){

  $query1="SELECT Vidhansabha_Date FROM addvidhansabhaelection where Vidhansabha_Constituency='".$row['User_City']."'";

  $result1 = mysqli_query($conn,$query1);

  $row1 = mysqli_fetch_assoc($result1);

  $ElectionDate=$row1['Vidhansabha_Date'];
}
else if($_SESSION['ElectionName']=='Mahanagarpalika'){

  $query1="SELECT Mahanagarpalika_Date FROM addmahanagarpalikaelection where Mahanagarpalika_Constituency='".$row['User_City']."'";

  $result1 = mysqli_query($conn,$query1);

  $row1 = mysqli_fetch_assoc($result1);

  $ElectionDate=$row1['Mahanagarpalika_Date'];
}
else if($_SESSION['ElectionName']=='Nagarpalika'){

  $query1="SELECT Nagarpalika_Date FROM addnagarpalikaelection where Nagarpalika_Constituency='".$row['User_City']."'";

  $result1 = mysqli_query($conn,$query1);

  $row1 = mysqli_fetch_assoc($result1);

  $ElectionDate=$row1['Nagarpalika_Date'];
}
else if($_SESSION['ElectionName']=='Nagarparishad'){

  $query1="SELECT Nagarparishad_Date FROM addnagarparishadelection where Nagarparishad_Constituency='".$row['User_City']."'";

  $result1 = mysqli_query($conn,$query1);

  $row1 = mysqli_fetch_assoc($result1);

  $ElectionDate=$row1['Nagarparishad_Date'];
}
else if($_SESSION['ElectionName']=='Jilhaparishad'){

  $query1="SELECT Jilhaparishad_Date FROM addjilhaparishadelection where Jilhaparishad_Constituency='".$row['User_City']."'";

  $result1 = mysqli_query($conn,$query1);

  $row1 = mysqli_fetch_assoc($result1);

  $ElectionDate=$row1['Jilhaparishad_Date'];
}
else if($_SESSION['ElectionName']=='Panchayatsamiti'){

  $query1="SELECT Panchayatsamiti_Date FROM addpanchayatsamitielection where Panchayatsamiti_Constituency='".$row['User_City']."'";

  $result1 = mysqli_query($conn,$query1);

  $row1 = mysqli_fetch_assoc($result1);

  $ElectionDate=$row1['Panchayatsamiti_Date'];
}
else if($_SESSION['ElectionName']=='Grampanchayat'){

  $query1="SELECT Grampanchayat_Date FROM addgrampanchayatelection where Grampanchayat_Constituency='".$row['User_City']."'";

  $result1 = mysqli_query($conn,$query1);

  $row1 = mysqli_fetch_assoc($result1);

  $ElectionDate=$row1['Grampanchayat_Date'];
}
else
{

  echo "No Election";
}

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
  <style type="text/css">
   td:first-child{ 
    color:#dc3545;
    line-height:25px; 
  }
  </style>
  <!--linking End-->
</head> 
<body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-danger colorwhite">
    <a class="navbar-brand" href="#">
      <h3><span class="colorwhite"><i class="fa fa-info-circle" aria-hidden="true">&#160;</i>Confirm Info</span></h3>
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
<!--Nav ENd -->
<!--Container start -->
<div class="container-fluid">
    <h2 class="display-5 text-center">Confirm Your Information Before Apply</h2> 
    <br>
    <form action="#" method="POST">
      <div class="container" style="border-radius:8px;border: 2px solid #dc3545;max-width:600px;word-break:break-word;">
        <table class="table table-borderless">
          <tbody>
              <tr >
                  <td >Name Of the Candidate</td>
                  <td>:</td>
                  <td name="User_Name"><?php echo $row['User_Name']; ?></td>
              </tr>
                <tr>
                  <td>Email Id of Candidate</td>
                  <td>:</td>
                  <td name="User_Email"><?php echo $_SESSION['UserName']; ?></td>
              </tr>
               <tr >
                  <td>Election</td>
                  <td>:</td>
                  <td name="Election_Name"><?php echo $_SESSION['ElectionName'];?></td>
              </tr>
               <tr >
                  <td>Election Constituency</td>
                  <td>:</td>
                  <td name="Election_Constituency"><?php echo $row['User_City']; ?></td>

              </tr>
               <tr >
                  <td>Election Date</td>
                  <td>:</td>
                  <td name="election_Date"><?php echo $ElectionDate;?></td>
              </tr>
               <tr >
                  <td>Election City Selected</td>
                  <td>:</td>
                  <td name="Election_City_Selected"><?php echo $_SESSION['User_ElectionCity'];?></td>
              </tr>
               <tr >
                  <td>Election Booth Selected</td>
                  <td>:</td>
                  <td name="Election_Booth_Selected"><?php echo $_SESSION['ElectionStation'];?></td>
              </tr>
          </tbody>
        </table>
      </div>
      <br>
     
      <center >
        <input type="checkbox" class="form-check-input ElectionBooth" required> <label > I, confirm Above Information</label>
      </center>
      <br>
      <button type="submit" class="btn btn-danger btn-lg mx-auto d-block" name="Apply" disabled>Apply For Election</button>
    </form>
</div>
<!--Container ENd -->
<script type="text/javascript">
  $(function () {
  $('.ElectionBooth').click(function(e) {
    $('.ElectionBooth').not(this).prop('checked', false);
  });
});

//To check that is atleast one checkbox select or not 
var checkboxes = $("input[type='checkbox']"),
    submitButt = $("button[type='submit']");

checkboxes.click(function() {
    submitButt.attr("disabled", !checkboxes.is(":checked"));
});
</script>

</body>
</html>
<!--Footer Start -->
<div class="footer">
    <div class="card card-body bg-danger">
      <center class="colorwhite"><i class="fa fa-laptop" aria-hidden="true"></i> Developed By Pranoti with <i class="fa fa-heart" aria-hidden="true" style="color:white"></i></center>
      <center class="colorwhite"> <i class="fa fa-copyright" aria-hidden="true"></i> Reserved by Election Commission of India</center>
     </div>
  </div>
<!--Footer ENd -->
<?php
if(isset($_POST["Apply"]))
{
$User_Name=$row['User_Name'];
$User_Email=$_SESSION['UserName']; 
$Election_Name=$_SESSION['ElectionName'];
$Election_Constituency=$row['User_City'];
$Election_Date=$ElectionDate;
$Election_City_Selected=$_SESSION['User_ElectionCity'];
$Election_Booth_Selected=$_SESSION['ElectionStation'];



$sql = "INSERT INTO appliedforelection (User_Name,User_Email,Election_Name,Election_Constituency,Election_Date,Election_City_Selected,Election_Booth_Selected)
VALUES ('$User_Name','$User_Email','$Election_Name','$Election_Constituency','$Election_Date','$Election_City_Selected','$Election_Booth_Selected')";

$sql1="UPDATE pollingstation SET seatsavailability = seatsavailability-1 WHERE pollingstation = '$Election_Booth_Selected'";


if ($conn->query($sql) && $conn->query($sql1) === TRUE) {
    echo "<script type='text/javascript'>
    swal({
  title: 'You Applied Successfully',
  text: 'Details Will Be Shared Soon',
  icon: 'success',
  button: 'Close',
});
    </script>";
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
          echo "<script type='text/javascript'>
                swal({
                title: 'Something Went Wrong',
                text: 'Please Request Again For Voting',
                icon: 'error',
                button: 'Close',
                });
                </script>";
}

$conn->close();
}

 ?>
<!--Below php is else part of php which is checking that user is loggedin or not-->
<?php 
}
else{
  header("Location:index.php");
}


 ?>
