<?php
	$aid=$_GET['e'];
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();
	}
	$querydelete="delete from admin where aid='$aid'";
	if(mysqli_query($conn,$querydelete))
	{
		echo"<script>alert('data deleted');window.location.href='adadmin.php'</script>";
	}
	else
	{
		echo"<script>alert('Data not deleted');</script>";
	}
?>
	