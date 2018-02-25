<?php 
session_start();
if (!isset($_SESSION['uname'])) {
	header('location: ../index.php');
}
?>
<!--  Appointment-->
<?php

if (isset($_POST['appoint'])) {
  require 'config.php';
  $con = get_connection();
  $run = "select * from signupinfo where username ='".$_SESSION['uname']."' ";
  $result = mysqli_query($con,$run);
  $data = mysqli_fetch_assoc($result);
  $run1 = "insert into appointment(userId , service , doctor) values('".$data['id']."','".$_POST['service']."','".$_POST['doctor']."')";
   $result1 = mysqli_query($con,$run1);
   if (!$result1) {
     echo "Failed to insert data ".mysqli_error($con);
   }
   mysqli_close($con); 
   header('location:dashboard.php');
}
?>
<!-- Appointment -->

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="../js/dashboard.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;background-color: #3ca6d4;border:none;
    }
    #top-nav-row{
    	font-size: 17px;
    }


    .sample{
    	color: #fe6f23;
    }
    .hospital{
    	color: #ffffff;
    }

     #myNavbar>  ul> li > a{
    	color: #ffffff;
    }
    #myNavbar > ul > li >a.active1{
    	background-color: #fe6f23;
    }

  #myNavbar > ul > li > a:hover:not( .active1){
    	color: #fe6f23;
    }
    .well{
    	color: #fe6f23;font-size: 17px;letter-spacing: 1px;
    }

     ul#checkbox  li {
    	list-style-type: none;font-size: 18px;
    }

    #submit{
    	margin: 10px 40%;background-color: #fe6f23;
    
    }
    #fix{
    	color:  dodgerblue;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 525px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #f1f1f1;
      height: 100%;
    }
    .thumbnail{
    	background-color: #3ca6d4;
    }
    .thumbnail > .caption{
    	color: #ffffff;
    }
    
    /* Set black background color, white text and some padding */
    footer {
      background-color: #3ca6d4;
      color: white;
      padding: 15px;
      
    }
    footer > #social_icons > i{
        margin: 8px;font-size: 20px;
    }

    #social_icons > i:hover{
    	color: #fe6f23;
    }

    footer > #copyright{
    	font-size: 15px;
    }
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid" >
  	<div class="row" id="top-nav-row">
  		<div class="col-sm-2 " >
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
   <a class="navbar-brand" href="../index.php"><span class="sample">Sample</span><span class="hospital"> Hospital</span></a>
    </div>
</div>
    <div class="col-sm-10">
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav" >
        <li ><a href="../index.php" class="active1">Home</a></li>
        <li><a href="#" id="service">Services</a></li>
        <li><a href="#" id="doctors">Doctors</a></li>
        <li><a href="#" id="appointments">Appointments</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
      	<li><a href="#"><span class="glyphicon glyphicon-cog"></span> Settings</a></li>
        <li><a href="destroy.php"><span class="glyphicon glyphicon-off"></span> Logout</a></li>
      </ul>
    </div>
</div>
</div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
      <p><a href="#">Link</a></p>
    </div>
    <div class="col-sm-8 text-left"> 
    	<div class="row>">
    	<div class="well">
    	<span id="default" style="cursor: pointer;">Dashboard</span>
      </div>
    </div>
    <div class="row">
    	
    	<!---Default box-->
<div class="col-sm-12" style="background-color: orange;" id="default1">
	<h3>Welcome <?php $a = $_SESSION['uname']; $b = explode(' ' , $a); echo strtoupper($b[0]); ?> :)</h3>
      <hr>
  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
  consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
    </div>
<!-- Default box end -->
    <div class="col-sm-12" style="background-color: orange; display: none;" id="service1">
    	
    		<h3> Available Services</h3>
     <ul class="list-group">
    <li class="list-group-item list-group-item-success">Cardiology</li>
    <li class="list-group-item list-group-item-info">Dermatology</li>
    <li class="list-group-item list-group-item-warning">Physician</li>
    <li class="list-group-item list-group-item-danger">Pediatrics</li>
     <li class="list-group-item list-group-item-info">Pathology</li>
     <li class="list-group-item list-group-item-success">Orthodontics</li>
  </ul>
    
    </div>

<div class="col-sm-12" style="background-color: orange; display: none;" id="doctors1">
    	<h3>About Doctors</h3>
  <div class="panel-group" id="accordion">
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Dr.Ram</a>
        </h4>
      </div>
      <div id="collapse1" class="panel-collapse collapse in">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Dr.Shyam</a>
        </h4>
      </div>
      <div id="collapse2" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
    <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Dr.Hari</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
     <div class="panel panel-default">
      <div class="panel-heading">
        <h4 class="panel-title">
          <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Dr.Suman</a>
        </h4>
      </div>
      <div id="collapse3" class="panel-collapse collapse">
        <div class="panel-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</div>
      </div>
    </div>
  </div> 
    </div>

    <div class="col-sm-12" style="background-color: orange; display: none;" id="appointments1" >
    	<h3 id="fix">Fix an Appointment</h3>
  <h3><small>Check mark the box with the services &amp; doctors you want to fix an appointment with.</small></h3>
    <div class="row bg bg-primary">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
<div class="form-group" >
	<div class="col-sm-3">
		<ul id="checkbox">
			<li><input type="checkbox" name="service" value="Dermatologists">Dermatologists
	<ul>
		<li><input type="checkbox" name="doctor" value="Dr.A">Dr.A</li>
		<li><input type="checkbox" name="doctor" value="Dr.B">Dr.B</li>
		<li><input type="checkbox" name="doctor" value="Dr.C">Dr.C</li>
	</ul>
</li>
</ul>
</div>
	<div class="col-sm-3">
			<ul id="checkbox">
			<li><input type="checkbox" name="service" value="Cardiologists">Cardiologists
	<ul>
		<li><input type="checkbox" name="doctor" value="Dr.D">Dr.D</li>
		<li><input type="checkbox" name="doctor" value="Dr.E">Dr.E</li>
		<li><input type="checkbox" name="doctor" value="Dr.F">Dr.F</li>
	</ul>
</li>
</ul>
</div>
	<div class="col-sm-3">
			<ul id="checkbox">
			<li><input type="checkbox" name="service" value="Pathologists">Pathologists
	<ul>
		<li><input type="checkbox" name="doctor" value="Dr.G">Dr.G</li>
		<li><input type="checkbox" name="doctor" value="Dr.H">Dr.H</li>
		<li><input type="checkbox" name="doctor" value="Dr.I">Dr.I</li>
	</ul>
</li>
</ul>
</div>
	<div class="col-sm-3">
			<ul id="checkbox">
			<li><input type="checkbox" name="service" value="Physicians">Physicians
	<ul>
		<li><input type="checkbox" name="doctor" value="Dr.J">Dr.J</li>
		<li><input type="checkbox" name="doctor" value="Dr.K">Dr.K</li>
		<li><input type="checkbox" name="doctor" value="Dr.L">Dr.L</li>
	</ul>
</li>
</ul>
</div>
</div>
<button type="submit" class="btn" id="submit" name="appoint">SUBMIT</button>
</form>
</div>
</div>
</div>
</div>
    <div class="col-sm-2 sidenav">
      <div class="thumbnail">

        <!--- Dashboard profile pic upload -->
 <img src="../userdashboard/

<?php
require 'config.php';
$con = get_connection();
$s = "select profilepic from signupinfo where username = '".$_SESSION['uname']."'";
$q = mysqli_query($con,$s);
$r = mysqli_fetch_assoc($q);
echo $r['profilepic'];
mysqli_close($con); 
?> " class="img-responsive" >
<?php 
if (isset($_POST['button'])) {
      
    $con = get_connection();
  $filename = $_FILES['image']['name'];
  $file_source = $_FILES['image']['tmp_name'];
  $ext = pathinfo($filename)['extension'];
  //$desti = '../userdashboard/'.$filename;
  //if (!file_exists($desti)) {
   
  if ($ext == 'jpeg' || $ext == 'png' || $ext == 'jpg') {
    $upload = move_uploaded_file($file_source, '../userdashboard/'.$filename);
$sql = "update signupinfo set profilepic = '".$filename."' where username = '".$_SESSION['uname']."' ";
echo $filename;
 $run = mysqli_query($con,$sql);

 
    //if(!$run){
     // echo "Failed to upload".mysqli_error($con);
    //}
  }
  else
  {
    echo "Unsupported File Format".mysqli_error($con);
  }
//}
//else{ 
 // echo "File Already Exists".mysqli_error($con);
//}
mysqli_close($con); 
} 
?>
 <!--- Dashboard profile pic upload -->
 

        <div class="caption">
        	<?php echo $_SESSION['uname'];  ?>
        </div>
      </div>

      
     <form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ; ?>" enctype="multipart/form-data">
      	<input type="file" name="image"><br>
  <button type="submit" name="button" value="submit" class="btn btn-primary">Change Profile Pic</button>
      </form>


    </div>
  </div>
</div>

<footer class="container-fluid text-center">
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
</footer>


</body>
</html>
