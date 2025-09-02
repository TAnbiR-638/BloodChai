<?php 

$con=new mysqli("localhost","root","","blood_chai");
if($con->connect_error)
{
	echo "Database Connection Failed";
}

?>