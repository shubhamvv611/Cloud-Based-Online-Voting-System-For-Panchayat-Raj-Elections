<?php session_start(); if ($_SESSION["UserName"]==true) {
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Online Voting</title>
    <!--Linking-->
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
  <script type="text/javascript" src="style/js/sweetalert.js"></script>
  <!--Linking End-->
</head>
<body>
    <nav class="navbar navbar-toggleable-md navbar-light bg-danger colorwhite">
    <a class="navbar-brand" href="#">
      <h3><span class="colorwhite"><i class="fa fa-users" aria-hidden="true"></i> Members List</span></h3>
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

<?php 
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



 ?>
<div class="container">
  <div style="border:3px solid #dc3545;border-radius:6px;" >
  <div class="form-row" style="padding-top:5%">
<?php 
// Name=ElectionType passing from previous page and this is seperate using thier value
// Loksabha members
if ($_POST['ElectionType']=='Apply Loksabha Election') {
    
    $UserLoksabha="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserLoksabha);
    $row = mysqli_fetch_assoc($UserData);
    $UserLoksabhaContituency=$row['User_LoksabhaConstituency'];
// Users Locsabhaconstituency is fetched Now List Of members fetching     
    $sql="SELECT * from addmember where SelectElectionName='Loksabha' AND ConstituencyName='$UserLoksabhaContituency'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<div class='card zoom form-group col-md-3' style='margin-left:5%;margin-bottom:4%;'>
            <img src='data:image;base64,".base64_encode($row["CandidateProfile"])."' class='img-fluid rounded-circle mx-auto d-block' style='width:100%;height:256px;' alt='Image not Found'>
              <div class='card-body'>
              <h4 class='card-title'>".$row["NameOfCandidate"]."</h4>
              <p class='card-text'>".$row["PartyName"]."</p>
              </div>
            </div>
            <br>";
          }
          $_SESSION["ElectionName"]='Loksabha';
          echo "
          </div>
          <br>
        <form action='UserPreference.php' method='POST'>
        <button class='btn btn-danger btn-lg mx-auto d-block' style='margin-bottom:3%' value='Loksabha' name='Loksabha'> Next</button></form>

          ";

       }
}
// Loksabha members end


// Vidhansabha members
elseif ($_POST['ElectionType']=='Apply Vidhansabha Election') {
  //echo "VidhansabhaElection";

    $UserVidhansabha="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserVidhansabha);
    $row = mysqli_fetch_assoc($UserData);
    $UserVidhansabhaContituency=$row['User_VidhansabhaConstituency'];
// Users Locsabhaconstituency is fetched Now List Of members fetching     
    $sql="SELECT * from addmember where SelectElectionName='Vidhansabha' AND ConstituencyName='$UserVidhansabhaContituency'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<div class='card zoom form-group col-md-3' style='margin-left:5%;margin-bottom:4%;'>
            <img src='data:image;base64,".base64_encode($row["CandidateProfile"])."' class='img-fluid rounded-circle mx-auto d-block' style='width:100%;height:256px;' alt='Image not Found'>
              <div class='card-body'>
              <h4 class='card-title'>".$row["NameOfCandidate"]."</h4>
              <p class='card-text'>".$row["PartyName"]."</p>
              </div>
            </div>
            <br>";
          }
          $_SESSION["ElectionName"]='Vidhansabha';
          echo "
          </div>
          <br>
        <form action='UserPreference.php' method='POST'>
        <button class='btn btn-danger btn-lg mx-auto d-block' style='margin-bottom:3%' value='Vidhansabha' name='Loksabha'> Next</button></form>

          ";

       }
}
// Vidhansabha members ends


// Mahanagarpalika members
elseif ($_POST['ElectionType']=='Apply Mahanagarpalika Election') {
    //echo "MahanagarElection";
    $UserMahanagarpalika="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserMahanagarpalika);
    $row = mysqli_fetch_assoc($UserData);
    $UserMahanagarpalikaConstituency=$row['User_MahanagarpalikaConstituency'];
    $UserMahanagarpalikaWardNumber=$row['User_MahanagarpalikaWardNumber'];
// Users Locsabhaconstituency is fetched Now List Of members fetching     
    $sql="SELECT * from addmember where SelectElectionName='Mahanagarpalika' AND ConstituencyName='$UserMahanagarpalikaConstituency' AND CandidateWardNumber='UserMahanagarpalikaWardNumber'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<div class='card zoom form-group col-md-3' style='margin-left:5%;margin-bottom:4%;'>
            <img src='data:image;base64,".base64_encode($row["CandidateProfile"])."' class='img-fluid rounded-circle mx-auto d-block' style='width:100%;height:256px;' alt='Image not Found'>
              <div class='card-body'>
              <h4 class='card-title'>".$row["NameOfCandidate"]."</h4>
              <p class='card-text'>".$row["PartyName"]."</p>
              </div>
            </div>
            <br>";
          }
          $_SESSION["ElectionName"]='Mahanagarpalika';
          echo "
          </div>
          <br>
        <form action='UserPreference.php' method='POST'>
        <button class='btn btn-danger btn-lg mx-auto d-block' style='margin-bottom:3%' value='Mahanagarpalika' name='Loksabha'> Next</button></form>

          ";

       }
}
// Mahanagarpalika members ends


//nagarpalika members ends
elseif ($_POST['ElectionType']=='Apply Nagarpalika Election') {
  //echo "NagarpalikaElection";
    $UserNagarpalika="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserNagarpalika);
    $row = mysqli_fetch_assoc($UserData);
    $UserNagarpalikaConstituency=$row['User_NagarpalikaConstituency'];
    $UserNagarpalikaWardNumber=$row['User_NagarpalikaWardNumber'];
// Users Locsabhaconstituency is fetched Now List Of members fetching     
    $sql="SELECT * from addmember where SelectElectionName='Nagarpalika' AND ConstituencyName='$UserNagarpalikaConstituency' AND CandidateWardNumber='UserNagarpalikaWardNumber'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<div class='card zoom form-group col-md-3' style='margin-left:5%;margin-bottom:4%;'>
            <img src='data:image;base64,".base64_encode($row["CandidateProfile"])."' class='img-fluid rounded-circle mx-auto d-block' style='width:100%;height:256px;' alt='Image not Found'>
              <div class='card-body'>
              <h4 class='card-title'>".$row["NameOfCandidate"]."</h4>
              <p class='card-text'>".$row["PartyName"]."</p>
              </div>
            </div>
            <br>";
          }
          $_SESSION["ElectionName"]='Nagarpalika';
          echo "
          </div>
          <br>
        <form action='UserPreference.php' method='POST'>
        <button class='btn btn-danger btn-lg mx-auto d-block' style='margin-bottom:3%' value='Nagarpalika' name='Loksabha'> Next</button></form>

          ";

       }
}
//nagarpalika members ends


// Nagarparishad members 
elseif ($_POST['ElectionType']=='Apply Nagarparishad Election') {
//  echo "NagarparishadElection";
    $UserNagarparishad="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserNagarparishad);
    $row = mysqli_fetch_assoc($UserData);
    $UserNagarparishadConstituency=$row['User_NagarparishadConstituency'];
    
// Users Locsabhaconstituency is fetched Now List Of members fetching     
    $sql="SELECT * from addmember where SelectElectionName='Nagarparishad' AND ConstituencyName='$UserNagarparishadConstituency'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<div class='card zoom form-group col-md-3' style='margin-left:5%;margin-bottom:4%;'>
            <img src='data:image;base64,".base64_encode($row["CandidateProfile"])."' class='img-fluid rounded-circle mx-auto d-block' style='width:100%;height:256px;' alt='Image not Found'>
              <div class='card-body'>
              <h4 class='card-title'>".$row["NameOfCandidate"]."</h4>
              <p class='card-text'>".$row["PartyName"]."</p>
              </div>
            </div>
            <br>";
          }
          $_SESSION["ElectionName"]='Nagarparishad';
          echo "
          </div>
          <br>
        <form action='UserPreference.php' method='POST'>
        <button class='btn btn-danger btn-lg mx-auto d-block' style='margin-bottom:3%' value='Nagarparishad' name='Loksabha'> Next</button></form>

          ";

       }
}
// Nagarparishad members ends


// Grampanchayat members 
elseif ($_POST['ElectionType']=='Apply Grampanchayat Election') {
  //echo "GrampanchayatElection";
    $UserGrampanchayat="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserGrampanchayat);
    $row = mysqli_fetch_assoc($UserData);
    $UserGrampanchayatConstituency=$row['User_GrampanchayatConstituency'];
    
// Users Locsabhaconstituency is fetched Now List Of members fetching     
    $sql="SELECT * from addmember where SelectElectionName='Grampanchayat' AND ConstituencyName='$UserGrampanchayatConstituency'  AND CandidateWardNumber='UserGrampanchayatWardNumber'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<div class='card zoom form-group col-md-3' style='margin-left:5%;margin-bottom:4%;'>
            <img src='data:image;base64,".base64_encode($row["CandidateProfile"])."' class='img-fluid rounded-circle mx-auto d-block' style='width:100%;height:256px;' alt='Image not Found'>
              <div class='card-body'>
              <h4 class='card-title'>".$row["NameOfCandidate"]."</h4>
              <p class='card-text'>".$row["PartyName"]."</p>
              </div>
            </div>
            <br>";
          }
          $_SESSION["ElectionName"]='Grampanchayat';
          echo "
          </div>
          <br>
        <form action='UserPreference.php' method='POST'>
        <button class='btn btn-danger btn-lg mx-auto d-block' style='margin-bottom:3%' value='Grampanchayat' name='Loksabha'> Next</button></form>

          ";
       }
}
// Grampanchayat members ends

// Jilhaparishad members 
elseif ($_POST['ElectionType']=='Apply JilhaParishad Election') {
  //echo "JiElection";
     $UserJilhaParishad="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserJilhaParishad);
    $row = mysqli_fetch_assoc($UserData);
    $UserJilhaparishadConstituency=$row['User_JilhaparishadConstituency'];
    
// Users Locsabhaconstituency is fetched Now List Of members fetching     
    $sql="SELECT * from addmember where SelectElectionName='JilhaParishad' AND ConstituencyName='$UserJilhaparishadConstituency'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<div class='card zoom form-group col-md-3' style='margin-left:5%;margin-bottom:4%;'>
            <img src='data:image;base64,".base64_encode($row["CandidateProfile"])."' class='img-fluid rounded-circle mx-auto d-block' style='width:100%;height:256px;' alt='Image not Found'>
              <div class='card-body'>
              <h4 class='card-title'>".$row["NameOfCandidate"]."</h4>
              <p class='card-text'>".$row["PartyName"]."</p>
              </div>
            </div>
            <br>";
          }
          $_SESSION["ElectionName"]='Jilhaparishad';
          echo "
          </div>
          <br>
        <form action='UserPreference.php' method='POST'>
        <button class='btn btn-danger btn-lg mx-auto d-block' style='margin-bottom:3%' value='Jilhaparishad' name='Loksabha'> Next</button></form>

          ";
       }
}
// Jilhaparishad members ends

// Panchayat Samiti members ends
elseif ($_POST['ElectionType']=='Apply Panchayatsamiti Election') {
  //echo "PElection";
    $UserPanchayatsamiti="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserPanchayatsamiti);
    $row = mysqli_fetch_assoc($UserData);
    $UserPanchayatsamitiConstituency=$row['User_PanchayatsamitiConstituency'];
    
// Users Locsabhaconstituency is fetched Now List Of members fetching     
    $sql="SELECT * from addmember where SelectElectionName='Panchayatsamiti' AND ConstituencyName='$UserPanchayatsamitiConstituency'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<div class='card zoom form-group col-md-3' style='margin-left:5%;margin-bottom:4%;'>
            <img src='data:image;base64,".base64_encode($row["CandidateProfile"])."' class='img-fluid rounded-circle mx-auto d-block' style='width:100%;height:256px;' alt='Image not Found'>
              <div class='card-body'>
              <h4 class='card-title'>".$row["NameOfCandidate"]."</h4>
              <p class='card-text'>".$row["PartyName"]."</p>
              </div>
            </div>
            <br>";
          }
          $_SESSION["ElectionName"]='Panchayatsamiti';
          echo "
          </div>
          <br>
        <form action='UserPreference.php' method='POST'>
        <button class='btn btn-danger btn-lg mx-auto d-block' style='margin-bottom:3%' value='Panchayatsamiti' name='Loksabha'> Next</button></form>

          ";
       }
}
// Panchayat Samiti members ends
 
 ?>
</div>      

  </div>
<!--Container div is below -->
</div>
<br>
<br>
<br>
<!--Footer start -->
  <div class="footer">
    <div class="card card-body bg-danger ">
      <center class="colorwhite"><i class="fa fa-laptop" aria-hidden="true"></i> Developed By Pranoti with <i class="fa fa-heart" aria-hidden="true" style="color:white"></i></center>
      <center class="colorwhite"> <i class="fa fa-copyright" aria-hidden="true"></i> Reserved by Election Commission of India</center>
     </div>
  </div>
  <!--Footer end -->

</body>
</html>
<?php 
}
else{
  header("Location:index.php");
}
?>