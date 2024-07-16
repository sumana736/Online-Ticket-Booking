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
	$s=$_GET['e'];
?>
	<?php
			$queryinsert="delete from station where stationid='$s'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Data Deleted');window.location.href='addbusstopage.php'</script>";
			}
			else
			{
				echo"<script>alert('Data not Deleted');window.location.href='addbusstopage.php'</script>";
			}
	?>	
</body>
</html>