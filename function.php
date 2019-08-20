<?php 

		function showdetails($standard,$rollno)
		{
			include('dbcon.php');
			
			$query="SELECT * FROM `student` WHERE `rollno`='$rollno' AND standard='$standard'";
			 $run=mysqli_query($con,$query);
			 
			 if(mysqli_num_rows($run)>0)
			 {
				 $data=mysqli_fetch_assoc($run);
				 
				 ?>
				 <table border="1" style="width:50%; margin-top:20px;" align="center"> 
					<tr>
						<th colspan="3">Student Details</th>
					</tr> 
					<tr>
						<td rowspan="5"><img src="css/<?php echo $data['image'];?>" style="max-height:150px; padding-left:50px;"/> </td>
							<th>Roll No</th>
							<td> <?php echo $data['rollno'];?></td>
					</tr>
							<th>Name</th>
							<td> <?php echo $data['name'];?></td>
					</tr>
					
								<th>City</th>
							<td> <?php echo $data['city'];?></td>
					</tr>
					
								<th>Parents Contact No:</th>
							<td> <?php echo $data['pcontact'];?></td>
						</tr>
				 
								<th>Standard</th>
							<td> <?php echo $data['standard'];?></td>
					</tr>
				 </table>
				 <?php
			 }
			 
				else
				{
					echo "<script> alert('No Student Found.')</script>";
				}
	}

?>