<?php

	session_start(); 
					
		if(isset($_SESSION['uid']))
		{
			echo "";
		}
	else
	{
		header('location:../login.php');
	}

?>
<?php 

	include('header.php');
	include('titlehead.php');
?>

	<form method="post" action="addstudent.php" enctype="multipart/form-data"> 
		
		<table border="1" align="center" style="width:50%; margin-top:40px;"> 
		 <tr>
		 <th>Roll No</th>
		 <td><input type="text" name="rollno" placeholder="Enter your Rollno" required></td>
		 </tr>
		 <tr>
		 <th>Full Name</th>
		 <td><input type="text" name="name" placeholder="Enter your Fullname" required></td>
		 </tr>
		 <tr>
		 <th>City</th>
		 <td><input type="text" name="city" placeholder="City Name" required></td>
		 </tr>
		 <tr>
		 <th>Parent Contact No</th>
		 <td><input type="text" name="pcon" placeholder="Enter Parents Contact No" required></td>
		 </tr>
		 <tr>
		 <th>Standard</th>
		 <td><input type="number" name="std" placeholder="Enter Standard" required></td>
		 </tr>
		 <tr>
		 <th>Image</th>
		 <td><input type="file" name="simg" required></td>
		 </tr>
		 
		 </tr>
		 <tr>
		 <td colspan="2" align="center"><input type="submit" name="submit" value="submit"></td>
		 </tr>
		</table>
	
	</form>
	</body>
	</html>
	
	<?php
	if(isset($_POST['submit']))
	{
		include('../dbcon.php');
		
		$rollno=$_POST['rollno'];
		$name=$_POST['name'];
		$city=$_POST['city'];
		$pcon=$_POST['pcon'];
		$std=$_POST['std'];
		$imagename= $_FILES['simg']['name'];
		$tempname= $_FILES['simg']['tmp_name'];
		
		move_uploaded_file($tempname,"../dataimg/$imagename");
		
			
	$query="INSERT INTO `student`(`id`, `rollno`, `name`, `city`, `pcontact`, `standard`, `image`) VALUES (NULL,'$rollno','$name','$city','$pcon','$std','$imagename')";
	$run=mysqli_query($con,$query);	
	
		if($run == true)
		{ 
			?> 
			 <script>
			 alert('data inserted successfully!');
			</script>
	<?php 
	}
	}
	?>