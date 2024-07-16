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
	$a=$_GET['s'];
?>
	<?php
			$queryinsert="delete from time where timeid='$a'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Data Deleted');window.location.href='addtime.php'</script>";
			}
			else
			{
				echo"<script>alert('Data not Deleted');window.location.href='addtime.php'</script>";
			}
	?>	
</body>
</html>