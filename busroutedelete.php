<html>
<title></title>
<head></head>
<body>
<?php
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
	$s=$_GET['s'];
?>
	<?php
			$queryinsert="delete from busroute where busrouteid='$s'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Data Deleted');window.location.href='addbusroute.php'</script>";
			}
			else
			{
				echo"<script>alert('Data not Deleted');window.location.href='addbusroute.php'</script>";
			}
	?>	
</body>
</html>
