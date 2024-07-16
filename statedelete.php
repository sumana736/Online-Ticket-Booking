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
			$queryinsert="delete from state where stateid='$s'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Data Deleted');window.location.href='addstate.php'</script>";
			}
			else
			{
				echo"<script>alert('Data not Deleted');window.location.href='addstate.php'</script>";
			}
	?>	
</body>
</html>