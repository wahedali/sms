<?php 

	include('header.php');
	include('titlehead.php');
?>
<table align="center" style="margin-top:50px;">
<form method="post" action="deletestudent.php">
<tr>
<th>Enter Standard:</th>
<td><input type="number" name="standard" placeholder="Enter Standard" required /></td>

<th>Enter Student Name:</th>
<td><input type="text" name="stuname" placeholder="Enter Student Name" required /></td>

<td colspan="2" style="float:right"> <input type="submit" name="submit" value="search"></td>
</tr>
</form>
</table>

<table border="1" align="center" width="80%" style="margin-top:10px;">
<tr style="background-color:#000; color:#fff;">
<th>No</th>
<th>Image</th>
<th>Name</th>
<th>Rollno</th>
<th>Delete</th>
</tr>








<?php
 	
	include('../dbcon.php');
		
		$id=$_REQUEST['sid'];
		
	$query="DELETE FROM `student` WHERE `id`='$id'";
	
	$run=mysqli_query($con,$query);	
	
		if($run == true)
		{ 
			?> 
			 <script>
			 alert('data deleted successfully!');
				window.open('location:deletestudent.php','_self');
			</script>
	<?php 
	}
	
	?>