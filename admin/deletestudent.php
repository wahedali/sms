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
		if(isset($_POST['submit']))	
		{
			include('../dbcon.php');
			
			$standard= $_POST['standard'];
			$name= $_POST['stuname'];
			
			$query="SELECT * FROM `student` WHERE `standard`='$standard' AND `name` LIKE '%$name%'";
			$run=mysqli_query($con,$query);
			
				
			if(mysqli_num_rows($run)<1)
			{
				echo "<tr><td colspan='5'>No Records Found</td></tr>";
			}
			else 
			{
				$count=0;
				while($data=mysqli_fetch_assoc($run))
				{
					$count++;
					?>
					
					<tr align="center">
						<td><?php echo $count; ?></td>
						<td><img src="../dataimg/<?php echo $data['image']?>" style="max-width:100px;"/></td>
						<td><?php echo $data['name'];?></td>
						<td><?php echo $data['rollno'];?></td>
						<td><a href="deleteform.php?sid=<?php echo $data['id'];?>">Delete</td>
					</tr>
			<?php
			}
	}	
		}
	?>
	
	</table>