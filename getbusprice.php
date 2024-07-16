
<?php
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
	
	$q1=$_GET['q'];
	$q2=$_GET['q1'];
	$q3=$_GET['q2'];
	$q4=$_GET['q3'];
	$q5=$_GET['q4'];
	if($q1!=""&&$q2!=""&&$q3!=""&&$q4!=""&&$q5!="")
	{
	if($q5=="AC")
	{
		$r=5;
	}
	else
	{
		$r=2;
	}
	$queryselect="select abs(r1.km-r2.km) as km from bustoroute r1,bustoroute r2 where r1.busrouteid=r2.busrouteid and r1.stopagename='$q1' and r2.stopagename='$q2'";
	$res=mysqli_query($conn,$queryselect);
	$row=mysqli_fetch_assoc($res);
	$km=$row['km'];
	
		$p=$km*($r/2)*$q3+$km*$r*$q4;
		
		
	}
	else
	{
		$p=0;
	}
	
?>
 <input type="text"  class="form-control"  name="price" value="<?php echo $p;?>" readonly>
