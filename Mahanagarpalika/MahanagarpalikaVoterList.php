<?php session_start(); if ($_SESSION["UserName"]==true) {
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Vote for Mahanagarpalika</title>
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
 <style type="text/css">
 .outerBorder
{
	border:4px solid #dc3545!important;
}
 </style>
  </head>

<body >
<!--Timer start-->
<?php

$timestamp = time();
$diff =20; //<-Time of countdown in seconds.  ie. 3600 = 1 hr. or 86400 = 1 day.

//MODIFICATION BELOW THIS LINE IS NOT REQUIRED.
$hld_diff = $diff;
if(isset($_SESSION['ts'])) {
  $slice = ($timestamp - $_SESSION['ts']);  
  $diff = $diff - $slice;
}

if(!isset($_SESSION['ts']) || $diff > $hld_diff || $diff < 0) {
  $diff = $hld_diff;
  $_SESSION['ts'] = $timestamp;
}

//Below is demonstration of output.  Seconds could be passed to Javascript.
$diff; //$diff holds seconds less than 3600 (1 hour);

$hours = floor($diff / 3600) . ' : ';
$diff = $diff % 3600;
$minutes = floor($diff / 60) . ' : ';
$diff = $diff % 60;
$seconds = $diff;
?>
<div class="container-fluid ">
<br>
<div class="card outerBorder">
 	<div class="card-body">
	<div class="row">
  		<div class="col-sm-2">
    <div class="card" id="element" style="position:fixed;z-index:3;color:white;background-color:#dc3545;" >
      <div class="card-body UserTime">
       
        <center><p class="card-text" id="strclock" style="font-size:2em"></p></center>
        
      </div>
    </div>
  </div>
	<div class="col-sm-10">
	    <center><h5 class="display-4">Cast Your Vote in 20 Sec</h5></center>
	 </div>
</div>
  <br>
  <br>
 
 			<div class="form-row" style="padding-top:5%">
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
<?php 
// Fetching Data for Vidhansabha
 $UserMahanagarpalika="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserMahanagarpalika);
    $row = mysqli_fetch_assoc($UserData);
    $UserMahanagarpalikaContituency=$row['User_MahanagarpalikaConstituency'];
    $UserMahanagarpalikaWard=$row['User_MahanagarpalikaWardNumber'];
  
    
// Users Locsabhaconstituency is fetched Now List Of members fetching     
    $sql="SELECT * from addmember where SelectElectionName='Mahanagarpalika' AND ConstituencyName='$UserMahanagarpalikaContituency' AND CandidateWardNumber='$UserMahanagarpalikaWard'";
    $result=$conn->query($sql);
    if ($result-> num_rows >0) {
    while ($row=$result-> fetch_assoc()) {
      echo "<div  class='card  form-group col-md-3' style='margin-left:5%;margin-bottom:4%;'>
      			<form action='#' method='POST'>
            <img src='data:image;base64,".base64_encode($row["CandidateProfile"])."' class='img-fluid rounded-circle mx-auto d-block' style='width:100%;height:256px;' alt='Image not Found'>
              <div class='card-body'>
    <h4 class='card-title bg-danger text-white' style='padding:10px;border-radius:10px;'>".$row["NameOfCandidate"]."</h4>
     <p class='card-text bg-warning ' style='padding:10px;border-radius:10px;'>".$row["PartyName"]."</p>
              <center><p><input class='form-check-input ElectionBooth' type='checkbox' name='Candidate' value=".$row['PartyName']."></p></center><br>
              </div>
            </div>
            <br>";
          }
        echo "
          </div>
          <br>
        
        <button class='btn btn-danger btn-lg mx-auto d-block' style='margin-bottom:3%'  name='CastVote'> Cast Your Vote</button></form>

          ";

       }
       else{

        echo "No Mambers to Fetch";
       }
// Fetching Data for Loksabha End
 ?>
 		</div>
 	</div>
 </div>	
</div>
<br><!--Main container Div end -->
<?php 
if (isset($_POST['CastVote'])) {
	$Election_Party=$_POST['Candidate'];//Name of the selected Candidate
	$UserMahanagarpalika="SELECT * from usersignup where User_Email='".$_SESSION['UserName']."' LIMIT 1";
    $UserData= mysqli_query($conn,$UserMahanagarpalika);
    $row = mysqli_fetch_assoc($UserData);
    $UserMahanagarpalikaContituency=$row['User_MahanagarpalikaConstituency'];
    $UserMahanagarpalikaDistrict=$row['User_District'];
    $UserMahanagarpalikaWard=$row['User_MahanagarpalikaWardNumber'];
    $UserMahanagarpalikaState=$row['User_State'];
   $sql="INSERT INTO electionresult (Election_Name,Election_State,Election_District,Election_Constituency,Election_Ward,Election_Party) VALUES('Mahanagarpalika','$UserMahanagarpalikaState','$UserMahanagarpalikaDistrict','$UserMahanagarpalikaContituency','$UserMahanagarpalikaWard','$Election_Party')";


			if ($conn->query($sql) === TRUE) {

				 echo "<script>
				 		window.location = 'VoteCasted.php';
				        </script>";

			}
			else{
				echo "<script type='text/javascript'>
                swal({
                title: 'Something Went Wrong',
                text: 'Please Contact To Booth Admin',
                icon: 'error',
                button: 'Close',
                });
                </script>";
			}

}





 ?>
<script type="text/javascript">
 var hour = <?php echo floor($hours); ?>;
 var min = <?php echo floor($minutes); ?>;
 var sec = <?php echo floor($seconds); ?>

function countdown() {
 if(sec <= 0 && min > 0) {
  sec = 59;
  min -= 1;
 }
 else if(min <= 0 && sec <= 0) {
  min = 0;
  sec = 0;
 }
 else {
  sec -= 1;
 }
 
 if(min <= 0 && hour > 0) {
  min = 59;
  hour -= 1;
 }
 
 var pat = /^[0-9]{1}$/;
 sec = (pat.test(sec) == true) ? '0'+sec : sec;
 min = (pat.test(min) == true) ? '0'+min : min;
 hour = (pat.test(hour) == true) ? '0'+hour : hour;
 
 document.getElementById('strclock').innerHTML = hour+":"+min+":"+sec;
 setTimeout("countdown()",1000);
 }
 countdown();
 
setTimeout("location.href = 'TimeOut.php';",20000);//automatically terminate the page  20000 for 20 sec
</script>
 <!--Timer Ended-->
<!--For checking Only one checkbox start -->
<script type="text/javascript">
  $(function () {
  $('.ElectionBooth').click(function(e) {
    $('.ElectionBooth').not(this).prop('checked', false);
  });
});
</script>

</body>
</html>
<?php 
}
else{
  header("Location:index.php");
}
?>