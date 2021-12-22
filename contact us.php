<!doctype html>
<html>
    
<head>
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<title>contact us</title>
<link rel="stylesheet" href="stylesheet.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
<link rel="styleshee" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
<meta charset="utf-8">
</head>
<body>
<section class="sub-header">
<div class="menubar" id="menubar">
<ul>
<li ><a href="index.html" ><i class="fa fa-home"></i> Home</a></li>
<li ><a href="event.php">Events</a>
<div class="sub-menu-1">
<ul>
<li><a href="#neeti">Tech-Neeti</a></li>
<li><a href="#manthan">Tech-Manthan</a></li>
<li><a href="#ipl">Ipl Auction</a></li>
<li><a href="#robo">Robotics  <i class="fa fa-angle-right"></i> </a>
<div class="sub-menu-11">
<ul>
<li><a href="#">Robo-War</a></li>
<li><a href="#">Quadcopter</a></li>
<li><a href="#">Workshops</a></li>
</ul>
</div>
</li>
<li><a href="#qwo">Quizes    <i class="fa fa-angle-right"></i></a>
<div class="sub-menu-12">
<ul>
<li><a href="#biz">Biz-Gyaan</a></li>
<li><a href="#sci">Sci-Fi</a></li>
<li><a href="#gs">Gs</a></li>
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
<li class="active"><a href="contact us.html">Contact Us</a></li>
<li><a href="login.php">Login</a></li>
</ul>
</div>
<div class="text-box-1">
<h1><b>Contact Us</b></h1>
</div>
</section>
<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];
        $emails = $_POST['email'];
        $mobile = $_POST['mobile'];
        $feed = $_POST['feedback'];
    
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'phplogin';
    $con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
    if ( mysqli_connect_errno() ) {
        // If there is an error with the connection, stop the script and display the error.
        exit('Failed to connect to MySQL: ' . mysqli_connect_error());
    }
    $sql = "INSERT INTO `contact` (`name`, `email`, `mobile`, `feedback`) VALUES ('$name', '$emails', '$mobile', '$feed')";
    $result = mysqli_query($con, $sql);
    if($result)
    {
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
      <div class="alert alert-success d-flex align-items-center" role="alert">
  <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>
  <div>
    Sucess! Your Feedback Is Submitted.
  </div>
</div>';
    }
    else {

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
    Error! Your Feedback Is not submitted.
  </div>
  </div>';
    }

}
    ?>
<section class="location">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3563.405613220634!2d83.43093891487904!3d26.73142948320594!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39915ca3e2aa136b%3A0xc039bdf0211338a9!2sMadan%20Mohan%20Malaviya%20University%20Of%20Technology!5e0!3m2!1sen!2sin!4v1628185901927!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section>
<section class="contact-us">
    <div class="row">
        <div class="contact-col">
            <div>
                <img src="home1.png" style="width:15px; height:15px;">
                <span><h5>Deoria Road,Mohaddipur</h5>
                    <p>Gorakhpur,Uttar Pradesh</p>
                
                </span>
                

            </div>
            <div>
                <img src="call.png" style="width:15px; height:15px;">
                <span><h5>+91 7007013186</h5>
                    <p>Monday To Saturday, 9AM to 6PM</p>
                
                </span>
                

            </div>
            <div>
                <img src="email.png" style="width:15px; height:15px;">
                <span><h5>priyanshupandeyankit02@gmail.com</h5>
                    <p>Email Us your Query</p>
                
                </span>
                

            </div>
        </div>
        <div class="contact-col">
          <form action="contact us.php" method="post">
              <input type="text" name="name" placeholder="Enter Your Name" required >
              <input type="email"name="email" placeholder="Enter Your Email" required >
              <input type="tel" maxlength="10" minlength="10" name="mobile" placeholder="Enter Mobile Number"  >
              <textarea rows="10" name="feedback" placeholder="Enter your feedback" required></textarea>
              <button type="submit" class="hero-btn red-btn">Send Message</button>

          </form>
        
            </div>
        
    </div>
</section>
<section class="footer">
<div class="footer-img">
<img src="download.jpg" style="width:200px;height:140px; margin-top:17px;">
</div>
<h1>Thanks</h1>
<p>For visiting to our website For any feedback</p>
<a href="#" class="hero-btn">Contact Us</a>
<div class="ss">
<a href="#menubar">Back To Top</a>
</div>

</section>
</body>
</html>
