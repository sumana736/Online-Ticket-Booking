<?php
	$aid=$_GET['s'];
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
?>
	
	<?php
			$queryinsert="delete from admin where aid='$aid'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Data Deleted');window.location.href='addadmin.php'</script>";
			}
			else
			{
				echo"<script>alert('Data not deleted')</script>";
			}
		
	?>	