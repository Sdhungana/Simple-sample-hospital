<?php
require 'php/login.php';
?>
<!DOCTYPE html>
<html>
<head>
<title>Sample Hospital</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style/style1.css">
<link rel="stylesheet" type="text/css" href="engine1/style.css" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
	<script src="js/testimonial.js"></script>	
	<script src="js/modal.js"></script>
	<script src="js/cs_validation.js"></script>

</head>
<body>


  <!--  SignUp section-->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:20px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> SignUp</h4>
          
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form id="formname" role="form" method="POST" action="php/signup.php" onsubmit="return validateForm();">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
    <input type="text" class="form-control" id="usrname" name="username" placeholder="Enter username" onkeyup="validateName();" required="">
              <span id="errUsername"></span>
            </div>
             <div class="form-group">
              <label for="email"><span class="glyphicon glyphicon-envelope"></span> Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email" onkeyup="validateEmail();" required="" >
               <span id="errEmail"></span>
            </div>
            <div class="form-group">
              <label for="address"><span class="glyphicon glyphicon-book"></span> Address</label>
 <input type="text" class="form-control" id="address" name="address" placeholder="Enter address" onkeyup="validateAddress();" required=""> <span id="errAddress"></span>
            </div>
            <div class="form-group">
              <label for="number"><span class="glyphicon glyphicon-phone-alt"></span> ContactNo</label>
 <input type="number" class="form-control" id="number" name="number"  placeholder="Enter MobileNo" onkeyup="validateContactNo();" required="" >
               <span id="errNumber"></span>
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
<input type="text" class="form-control" id="password" name="password" placeholder="Enter password" onkeyup="validatePassword();"" required="">
               <span id="errPassword"></span>
            </div>
           
              <button type="submit" name="signup" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> SignUp</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit"  class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <!--<p>Already a member? <a href="#">LogIn</a></p>-->
          <!--<p>Forgot <a href="#">Password?</a></p>-->
        </div>
      </div>
      
    </div>
  </div> 


<!--Login section   -->
   <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="POST" action="php/login.php" onsubmit="return validateForm1();">
          
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
<input type="text" class="form-control"  id="usrname1" name="username" placeholder="Enter username" onkeyup="validateName1();" required value="<?php if(isset($_COOKIE['member_login'])){echo $_COOKIE['member_login']; } ?>" />
                <span id="errUsername1"></span>
            </div>
            <div class="form-group">
    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
   <input type="password" class="form-control" id="password1" name="password" placeholder="Enter password" onkeyup="validatePassword1();" required value="<?php if(isset($_COOKIE['member_password'])){echo $_COOKIE['member_password']; } ?>" />
              <span id="errPassword1"></span>
            </div>
            <div class="checkbox">
 <label><input type="checkbox" name="remember" <?php if(isset($_COOKIE['member_login'])){ ?> checked <?php } ?> />Remember me</label>
            </div>
    <button type="submit" name="login" class="btn btn-primary btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
         <!-- <p>Not a member? <a href="" >Sign Up</a></p>-->
         <!-- <p>Forgot <a href="#">Password?</a></p>-->
        </div>
      </div>
      
    </div>
  </div> 

<!-- Header section Start -->
<header>
	<div id="header1">
		<div class="container">
			<div id="social_icons">
				<i class="fa fa-facebook" title="Facebook"></i>
				<i class="fa fa-instagram" title="Instagram"></i>
				<i class="fa fa-twitter" title="Twitter"></i>
				<i class="fa fa-rss" title="Rss"></i>
				<i class="fa fa-pinterest" title="Pinterest"></i>

			</div>
			<div id="appointment">
				<button type="button" name="login" class="btn1" id="myBtn1" >Login</button>
			    <button type="submit" name="signup" class="btn1" id="myBtn">SignUp</button>
				<!--<span class="appointment1"><i class="fa fa-plus-circle"></i> Book an appointment</span>
				<span><i class="fa fa-ambulance"></i> Hospital Timing</span>-->
			</div>
		</div>
	</div>
		
	<div id="header2">
		<div class="container">
			<div id="logo">
				<h2><span class="sample">Sample</span> Hospital</h2>
			</div>
			<div id="call_mail">
				<div id="box">
			  <span class="middleheader"><a href="mailto:#" style="text-decoration: none;color: black;"><i class="fa fa-envelope "></i>  Mail to : info@samplehospital.com</a></span>
			  </div>
			  	<div id="box">
			  	<span class="middleheader"><i class="fa fa-phone "></i>  Call us: +977-889399393</span>
				</div>
			</div>
		</div>
	</div>
	

	<div id="header3">
		<div class="container">
			<nav>
	<!--<div class="toggle">
		<i class="fa fa-bars menu1"></i>
	</div>-->

				<ul>
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="#aboutus">About us</a></li>
					<li><a href="#services">Services</a></li>
					<li><a href="#our-gallery">Gallery</a></li>
					<li><a href="#testimonials">Testimonials</a></li>
					<li><a href="#">Contact us</a></li>

				</ul>
			</nav>
			<div id="search-bar">
		    <input type="search" name="search" placeholder="Search for...">
		    <button type="submit" name="search_button"><i class="fa fa-search"></i></button>
		   
		</div>
	</div>
</div>

</header>


<section id="main_slider">

	<!-- Start WOWSlider.com BODY section -->
		<div id="wowslider-container1">
	<div class="ws_images"><ul>
		<li><img src="data1/images/slider1.jpg" alt="Health Is Wealth" title="Health Is Wealth" id="wows1_0"/></li>
		<li><img src="data1/images/slider2.jpg" alt="image carousel" title="Health Is Wealth" id="wows1_1"/></li>
	<li><img src="data1/images/slider3.jpg" alt="Health Is Wealth" title="Health Is Wealth" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="Health Is Wealth"><span><img src="data1/tooltips/slider1.jpg" alt="Health Is Wealth"/>1</span></a>
		<a href="#" title="Health Is Wealth"><span><img src="data1/tooltips/slider2.jpg" alt="Health Is Wealth"/>2</span></a>
		<a href="#" title="Health Is Wealth"><span><img src="data1/tooltips/slider3.jpg" alt="Health Is Wealth"/>3</span></a>
	</div></div><!--<div class="ws_script" style="position:absolute;left:-99%"><a href="http://wowslider.net">jquery carousel</a> by WOWSlider.com v8.8</div>
	<div class="ws_shadow"></div>-->
	</div>	
	<!-- End WOWSlider.com BODY section -->
</section>

<section id="aboutus">
	<div class="container">
		<h1 class="headings">About Us</h1>
<div id="abt-img">
		<img src="images/aboutus-doc.png" >
</div>
<div id="aboutus1">
	
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
	consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
	cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non lorem
	</p>
<ul>
	<li><img src="images/1.png"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
	<li><img src="images/1.png"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
	<li><img src="images/1.png"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
	<li><img src="images/1.png"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
	<li><img src="images/1.png"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
	<li><img src="images/1.png"> Lorem Ipsum is simply dummy text of the printing and typesetting industry.</li>
</ul>

</div>
<div id="abt-btn">
<button onclick="javascript:window.location.href='#'">Read more</button>
</div>

</div>
</section>

<section id="services">
	
	<div class="container">
		<h1 class="headings">Our Services</h1>
		<div id="box-content" >
	<img src="images/icon1.png" >
			<h3>Cardio Monitoring</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam
				</p>
				<button type="button">Read more</button>
		</div>
			<div id="box-content">
				<img src="images/icon2.png">
			<h3>Internal medicine</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</p>
				<button type="button">Read more</button>
		</div>
			<div id="box-content">
				<img src="images/icon3.png">
			<h3>Surgery</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</p>
				<button type="button">Read more</button>
		</div>
			<div id="box-content">
				<img src="images/icon4.png">
			<h3>Dermatology</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				</p>
				<button type="button">Read more</button>
		</div>

	

	</div>

</section>

<section id="our-gallery">
	<div class="container">
		<h1 class="headings">Our Gallery</h1>
	<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/d-1.png">
      <img src="images/d-1.png" alt="Trolltunga Norway" width="300" height="200">
    </a>
  </div>
  <div class="desc">
  	<div class="doc-name">Dr.Arthur</div>
  	Nephrologist
  </div>
</div>


<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/d-2.png">
      <img src="images/d-2.png" alt="Forest" width="600" height="400">
    </a>
  </div>
   <div class="desc">
   	<div class="doc-name">Dr.Arthur</div>
   Neurologist</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/d-3.png">
      <img src="images/d-3.png" alt="Northern Lights" width="600" height="400">
    </a>
  </div>
   <div class="desc">
   	<div class="doc-name">Dr.Arthur</div>
   Hematologist
</div>
</div>

<div class="responsive">
  <div class="gallery">
    <a target="_blank" href="images/d-4.png">
      <img src="images/d-4.png" alt="Mountains" width="600" height="400">
    </a>
  </div>
  <div class="desc">
  <div class="doc-name">Dr.Arthur</div>
Surgeon
</div>
</div>
	</div>
</section>


<section id="testimonials">
	<div class="container">
		<h1 class="headings">What our client says</h1>
    <div class="row">
        <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
                <div class="testimonial">
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <div class="testimonial-content">
                        <div class="pic">
                            <img src="images/testimonial.jpg">
                        </div>
                        <h3 class="title">williamson</h3>
                    </div>
                </div>
 
                <div class="testimonial">
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <div class="testimonial-content">
                        <div class="pic">
                            <img src="images/testimonial.jpg">
                        </div>
                        <h3 class="title">Kristina</h3>
                    </div>
                </div>
 
                <div class="testimonial">
                    <p class="description">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda deleniti dolor ipsum molestias mollitia ut. Aliquam aperiam corporis cumque debitis delectus dignissimos. Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    </p>
                    <div class="testimonial-content">
                        <div class="pic">
                            <img src="images/testimonial.jpg">
                        </div>
                        <h3 class="title">Steve Thomas</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</section>


<footer  id="sub-footer">
<img src="images/footer-img.png">
	<div class="container">
		<div id="footer-content">
<div id="col-1">
	<h3>Why choose us</h3>
	<p>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
	</p>
</div>

<div id="col-1">
	<h3>Address</h3>
	<ul>
		<li><i class="fa fa-envelope "></i>info@samplehospital.com</li>
		<li><i class="fa fa-phone "></i>1234567891</li>
		<li><i class="fa fa-map-marker"></i>Kathmandu,Nepal</li>
	</ul>
</div>

<div id="col-1">
	<h3>Quick info</h3>
	
	<ul>
		<li><a href="#">Home</a></li>
		<li><a href="#">About us</a></li>
		<li><a href="#">Services</a></li>
		<li><a href="#">Gallery</a></li>
		<li><a href="#">Contact us</a></li>
	
	</ul>
</div>

<div id="col-1">
<h3>Subscribe newsletter</h3>
<p>Sign up for our newsletter and get the latest news</p>	
<input type="text" name="subscribe" placeholder="Your Email" required="">
<button type="submit">SUBSCRIBE</button>
</div>
</div>

</div>

</footer>


<footer id="main-footer">
	
<div class="container">
	<div id="social_icons">
				<i class="fa fa-facebook" title="Facebook"></i>
				<i class="fa fa-instagram" title="Instagram"></i>
				<i class="fa fa-twitter" title="Twitter"></i>
				<i class="fa fa-rss" title="Rss"></i>
				<i class="fa fa-pinterest" title="Pinterest"></i>

			</div>



			<div id="copyright">
				&copy; 2018 Sample Hospital | Developed By: Sulab Dhungana
			</div>
</div>

</footer>


<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!--<script type="text/javascript" src="engine1/jquery.js"></script>-->




</body>
</html>