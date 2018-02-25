<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php
if(isset($_POST['login'])){
  $username = $_POST['username'];
  $password = $_POST['password'];

if (isset($_POST['username'])) {

  if (strlen($username) == "") {
    showMessage('Empty Field');
  }
  else if(strlen($username) < 3){

   showMessage('Must be at least 3 characters');
}
  elseif (!preg_match('/^[a-zA-Z]{2,30}\s{1}[a-zA-Z]{3,30}$/', $username)) {
    showMessage('Enter First & Lastname with space');
  }
  else{
    $username1 = sanitize($username);

  }

}

if (isset($_POST['password'])) {
  if (strlen($password) == "") {
    showMessage('Empty Field');
  }
  else if(preg_match('/[@#$%^&!?\')(|><}{\]\[~`+*\/]/', $password)){
    showMessage('Only letters & numbers are allowed');
  }

  else{
    $password1 = sanitize($password);
  }
}

require 'config.php';
$con = get_connection();
$username2 = mysqli_real_escape_string($con, $username1);
$password2 = mysqli_real_escape_string($con,$password1);

$checkuser ="select username, password from signupinfo where username = '$username2' && password = '$password2'";
$run = mysqli_query($con,$checkuser);
if(mysqli_num_rows($run) == 1){
  $_SESSION['uname'] = $username2;

  // ----COOKIE SECTION START----------- //

  if(isset($_POST['remember']))
{
  setcookie('member_login',$username2, time()+(3600 * 24 * 365),'/PHP/HospitalTemplate/');
  setcookie('member_password',$password2, time()+(3600 * 24 * 365),'/PHP/HospitalTemplate/');
}
else{
  if(isset($_COOKIE['member_login'])){
    setcookie('member_login', '' ,time()-(3600),'/PHP/HospitalTemplate/');
  }
  if(isset($_COOKIE['member_password'])){
    setcookie('member_password','',time()-(3600),'/PHP/HospitalTemplate/');
  }
}
//-----------COOKIE SECTION END----------------//
    header('location:dashboard.php');
  }
  else{
    echo "Incorrect Username or Password";
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