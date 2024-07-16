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
	$n=$_GET['n'];
?>
	<?php
			$queryinsert="delete from class where classid='$s'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Data Deleted');window.location.href='addclass.php?s=".$n."'</script>";
			}
			else
			{
				echo"<script>alert('Data not Deleted');window.location.href='addclass.php?s=".$n."'</script>";
			}
	?>	
</body>
</html>