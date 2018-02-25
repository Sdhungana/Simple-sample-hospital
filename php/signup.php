<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<?php
if(isset($_POST['signup'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $number = $_POST['number'];
  $password = $_POST['password'];

if (isset($_POST['username'])) {

  if (strlen($username) == "") {
    showMessage('Empty Field');
  }
  else if(strlen($username) < 3){

   showMessage('Must be at least 3 characters ');
}
  elseif (!preg_match('/^[a-zA-Z]{2,30}\s{1}[a-zA-Z]{3,30}$/', $username)) {
  	showMessage('Enter First & Lastname with space');
  }
  else{
  	$username1 = sanitize($username);

  }

}

if (isset($_POST['email'])) {
	if(strlen($email) == ""){
		showMessage('Empty Field');
	}
    else if(!preg_match('/[a-zA-Z0-9]{3,20}+@[a-z]{5,7}+.com$/', $email)){
    	showMessage('Invalid Email');
    }
    else{
    	$email1 = sanitize($email);
   
    }
     
}

if (isset($_POST['address'])) {
	if (strlen($address) == "") {
		showMessage('Empty Field');
	}
	else if(strlen($address) < 3){
		showMessage('Invalid Address');
	}
	else if(preg_match('/[@#$%^&!?\')(|><}{\]\[~`+*\/]/', $address)){

		showMessage('Invalid Address');
	}
	else{
        $address1 = sanitize($address);
	}

}

if (isset($_POST['number'])) {
	if (strlen($number) == "") {
		showMessage('Empty Field');
	}
	else if (strlen($number) > 10) {
		showMessage('Invalid MobileNo.');
	}
	else if(!preg_match('/^9+([7-8][0-9][0-9][0-9][0-9][0-9][0-9][0-9][0-9])/', $number)){
		showMessage('Inavlid MobileNo.');
	}
	else{
		$number1 = sanitize($number);
	}
}

if (isset($_POST['password'])) {
	if (strlen($password) == "") {
		showMessage('Empty Field');
	}
	else if(preg_match('/[@!%$?^.\+*\/`~"=-_#<>}{\]\[]/', $password)){
		showMessage('Only letters & numbers are allowed');
	}
	else if(!preg_match('/[a-zA-Z0-9]{6,10}/', $password)){
		showMessage('Weak password');
	}
	else{
		$password1 = sanitize($password);
	}
}

require 'config.php';
require 'getdate.php';
$con = get_connection();
$getdate =get_date();
$username2 = mysqli_real_escape_string($con, $username1);
$email2 = mysqli_real_escape_string($con, $email1);
$address2 = mysqli_real_escape_string($con, $address1);
$number2 = mysqli_real_escape_string($con, $number1);
$password2 = mysqli_real_escape_string($con,$password1);
//$check = $_POST['check'];
$checkuser = "select username from signupinfo where username = '$username1' ";
$run = mysqli_query($con,$checkuser);
if(!mysqli_num_rows($run) == 1){

$sql="insert into signupinfo(username, email, address, contactno, password, signupdate) 
values('$username2','$email2','$address2',' $number2','$password2', '$getdate')";
$result = mysqli_query($con,$sql);
if (!$result) {
	echo "Error".mysqli_error($con);
 }
 else{
 	header('location:../index.html');
 }
	}
	else{
		echo "User Already Exists";
	}
 }
 
 function showMessage($message){
  echo $message.="<br>";
 }

 function sanitize($data){
     $data = htmlspecialchars($data);
     $data = stripslashes($data);
     $data = trim($data);
     return $data;
 }


?>
</body>
</html>
