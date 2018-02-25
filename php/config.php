<?php
  function get_connection(){
	$con = mysqli_connect("localhost","root","","hospital");
	if (!$con) {
		echo "Connection Failed".mysqli_error($con);
	
}
else{
	return $con;
}
}


?>