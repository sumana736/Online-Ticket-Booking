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
	$a=$_GET['a'];
?>
	<?php
			$queryinsert="delete from addbus where busid='$a'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Data Deleted');window.location.href='addtrain.php'</script>";
			}
			else
			{
				echo"<script>alert('Data not Deleted');window.location.href='addtrain.php'</script>";
			}
	?>	
</body>
</html>