<?php 
 
 $con= mysqli_connect('localhost','root','','sms');
	
	if($con == false)
	{
		echo "db not connected";
	}
?>