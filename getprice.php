
<?php
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
	
	$q1=$_GET['q'];
	$q2=$_GET['q1'];
	$queryselect="select abs(r1.km-r2.km) as km from bustoroute r1,bustoroute r2 where r1.busrouteid=r2.busrouteid and r1.stopagename='$q1' and r2.stopagename='$q2'";
	$res=mysqli_query($conn,$queryselect);
	$row=mysqli_fetch_assoc($res);
	{
	$a=$row['km'];
	?>
	
	<?php
	}
	
?>
 <input type="text"  class="form-control"  name="price" value="<?php echo $a*2;?>" readonly>
