<!doctype html>
<html>

<head>
    <title>Signup
</title>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;
}
* {box-sizing: border-box;}

/* Full-width input fields */
input[type=text], input[type=password], input[type=tel], input[type=email] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=password]:focus, input[type=tel]:focus,input[type=email]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for all buttons */
button {
  background-color: #04AA6D;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

button:hover {
  opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
  padding: 14px 20px;
  background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
  padding: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
  position: absolute;
  right: 35px;
  top: 15px;
  font-size: 40px;
  font-weight: bold;
  color: #f1f1f1;
}

.close:hover,
.close:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfix::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
  .cancelbtn, .signupbtn {
     width: 100%;
  }
}
.apple1{
padding-top:120px;
height:400px;
width:auto;
background-color:#435165;
text-align: center;

}
.apple h{
 padding-top: 20px;
 padding-left:10px;
 padding-right:10px;
text-align:center;

}
.apple button{

position:absolute;
left:45%;
}
.alert{

width: 100%;
height: 100px;
background-color: rgb(192,192,192);
text-align: center;
padding-top: 20px;


}
</style>
<body>
<section class="sub-header">
<div class="menubar" id="menubar">
<ul>
<li ><a href="index.html" ><i class="fa fa-home"></i> Home</a></li>
<li><a href="event.html">Events</a>
<div class="sub-menu-1">
<ul>
<li><a href="#neeti">Tech-Neeti</a></li>
<li><a href="#manthan">Tech-Manthan</a></li>
<li><a href="#ipl">Ipl Auction</a></li>
<li><a href="#robo"><i class="fa fa-angle-right"></i>Robotics    <font size="0.5"> <span style="color:red;">></span> </font></a>
<div class="sub-menu-11">
<ul>
<li><a href="#">Robo-War</a></li>
<li><a href="#">Quadcopter</a></li>
<li><a href="#">Workshops</a></li>
</ul>
</div>
</li>
<li><a href="event.html">Quizes    <font size="0.5"> <span style="color:red;">></span> </font></a>
<div class="sub-menu-12">
<ul>
<li><a href="#">Biz-Gyaan</a></li>
<li><a href="#">Sci-Fi</a></li>
<li><a href="#">Gs</a></li>
</ul>
</div>
</li>
</ul>
</div>
</li>

<li><a href="#">Sponsors</a>
<div class="sub-menu-2">
<ul>
<li><a href="https://www.microsoft.com/en-in/" target="_blank">Microsoft</a></li>
<li><a href="https://www.google.co.in/" target="_blank">Google</a></li>
<li><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
<li><a href="https://www.iitm.ac.in/403?r=2" target="_blank">I.I.T Madras</a></li>
</ul>
</div>
</li>
<li><a href="about.html">About Us</a></li>
<li><a href="contact us.html"> Contact Us</a></li>
<li class="active"><a href="login.php">Login</a></li>
</ul>
</div>
<div class="text-box-1">
<h1>SignUp</h1>
</div>
</section>
<?php

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['email'];
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $mob = $_POST['mob'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender']; 
  
  
   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "phplogin";
  
   $conn = mysqli_connect($servername,$username,$password,$database);
   if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
  }
  else{ 
    $sql = "SELECT username FROM `accounts` WHERE username = '$user'";
$res = mysqli_query($conn , $sql);
$row=mysqli_fetch_assoc($res);
if($row['username']== $user){
  echo '<svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
	<symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
	  <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
	</symbol>
	<symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
	  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
	</symbol>
	<symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
	  <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
	</symbol>
  </svg>
  <div class="alert alert-warning d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
  <div>
    Error! Username is Already Taken
  </div>
  </div>';
}
else{
  // Submit these to a database
  // Sql query to be executed 
  $sql = "INSERT INTO `accounts` (`username`, `password`, `email`, `fname`, `sname`, `mob`, `dob`, `gender`) VALUES ('$user', '$pass', '$email', '$fname', '$sname', '$mob', '$dob', '$gender');";
  $result = mysqli_query($conn, $sql);

  if($result){
    echo '<div class="alert">
    <strong>Success!</strong> <p>Your entry has been submitted successfully!</p>
  </div>';
  }
  else{
      // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
      echo '<div class="alert">
    <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
  </div>';
  }

  
}
  
  }
  
  }
 
 ?>
<section class="apple1">
<div class="apple">
    <h1>Technomania'21 Welcomes You To join us</h1>
    <p>Create a id with us to join events</p>
<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Sign Up</button>
</div>
</section>
<div id="id01" class="modal">
<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content" action="/phplogin/signup.php" method="post">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="text" placeholder="Enter User Name" name="username"  required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>

      <label for="email"><b>Email</b></label>
      <input type="email" placeholder="Enter Email" name="email"  required>


      <label for="name"><b>Name</b></label><br>
      <input type="text" placeholder="Firstname" title="Enter Your Name"" name="fname"  style="width:45%; margin-right:100px;"required>
     <input type="text" placeholder="Surname" name="sname"  title="Enter Middle And Surname Respectvely" style="width:45%; margin-bottom:20px;"required><br>
      
      <label for="mob"><b>Mobile Number</b><br></label><br>
      <input type="tel" minlength="10" maxlength="10" name="mob" style="width:45%; margin-right:100px;" title="Enter Yor 10 digit Mobile Number" placeholder="xxxxxxxxxx" required><br>
<label for="dob"><b>DOB</b></label><br>
      <input type="date" placeholder="mm/dd/yyyy" name="dob" style="margin-bottom:20px; margin-top:10px;" required><br>
<b>Gender</b>
      
  <br><input type="radio" id="html" name="gender" value="Male" style="margin-left:14px;">
  <label for="html" ><b>Male</b></label><br>
  <input type="radio" id="css" name="gender" value="Female">
  <label for="css"><b>Female</b></label><br>
  <input type="radio" id="javascript" name="gender" value="Others" style="margin-bottom:20px;">
  <label for="javascript" ><b>Others</b></label><br>
      <input type="checkbox" checked="checked" name="chk" style="margin-bottom:20px;" required>
      By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" onclick="hello1.html">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</div>
<section class="footer">
<div class="footer-img">
<img src="download.jpg" style="width:200px;height:140px; margin-top:17px;">
</div>
<h1>Thanks</h1>
<p>For visiting to our website For any feedback</p>
<a href="contact us.php" class="hero-btn">Contact Us</a>
<div class="ss">
<a href="#menubar">Back To Top</a>
</div>

</section>
<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>