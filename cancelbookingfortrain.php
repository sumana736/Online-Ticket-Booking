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
	$pnr=$_GET['pnr'];
	$queryroute="select * from booking where pnrno='$pnr'";
	$resroute=mysqli_query($conn,$queryroute);
	while($rowroute=mysqli_fetch_assoc($resroute))
	{
		
		$trainid= $rowroute['trainid'];
		$boggiesname= $rowroute['boggiesname'];
		$seat=$rowroute['seatno'];
		$class=$rowroute['class'];
		$tos=$rowroute['tos'];
		$froms=$rowroute['froms'];
		$journeydate= $rowroute['journeydate'];
		
		$queryroute1="select * from booking where status='waiting' and trainid='$trainid' and boggiesname='$boggiesname' and class='$class' and tos='$tos' and froms='$froms' and journeydate='$journeydate' order by bookingid limit 1";
		$resroute1=mysqli_query($conn,$queryroute1);
		$rowroute1=mysqli_fetch_assoc($resroute1);
		$rc1=mysqli_num_rows($resroute1);
		
		if($rc1>0)
		{
		$bknid=$rowroute1['bookingid'];
		echo "<script>alert('$bknid')</script>";
		$queryupdate="update booking set seatno='$seat',status='confirm' where bookingid='$bknid'";
		mysqli_query($conn,$queryupdate);
		}
		
		
		
	}
		
?>
	<?php
			$queryinsert="delete from booking where pnrno='$pnr' and status='confirm'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Cancel booking');window.location.href='upcomingjourney.php'</script>";
			}
			else
			{
				echo"<script>alert('cancel failed!');window.location.href='upcomingjourney.php'</script>";
			}
	?>	
</body>
</html>