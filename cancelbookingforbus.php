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
	$bkn=$_GET['bkn'];
	$queryroute="select * from busbooking where bkn='$bkn'";
	$resroute=mysqli_query($conn,$queryroute);
	while($rowroute=mysqli_fetch_assoc($resroute))
	{
		$busid= $rowroute['busid'];
		$seat=$rowroute['seatno'];
		$bt=$rowroute['bustype'];
		$tos=$rowroute['tos'];
		$froms=$rowroute['froms'];
		$journeydate= $rowroute['journeydate'];
		$queryroute1="select * from busbooking where status='waiting' and busid='$busid' and bustype='$bt' and tos='$tos' and froms='$froms' and journeydate='$journeydate' order by bookingid limit 1";
		$resroute1=mysqli_query($conn,$queryroute1);
		$rowroute1=mysqli_fetch_assoc($resroute1);
		$rc1=mysqli_num_rows($resroute1);
		if($rc1>0)
		{
		$bknid=$rowroute1['bookingid'];
		echo "<script>alert('$bknid')</script>";
		$queryupdate="update busbooking set seatno='$seat',status='confirm' where bookingid='$bknid'";
		mysqli_query($conn,$queryupdate);
		}
		
		
		
	}
		
?>
	<?php
			$queryinsert="delete from busbooking where bkn='$bkn' and status='confirm'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Cancel booking');window.location.href='upcomingjourneyforbus.php'</script>";
			}
			else
			{
				echo"<script>alert('cancel failed!');window.location.href='upcomingjourneyforbus.php'</script>";
			}
	?>	
</body>
</html>