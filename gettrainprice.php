<?php
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
	
	$f=$_GET['f'];
	$t=$_GET['t'];
	$noofch=$_GET['noofch'];
	$noofad=$_GET['noofad'];
	$c=$_GET['q4'];
	if($f!="" && $t!="" && $noofch!="" && $noofad!="" && $c!="")
	{
	if($c=="AC")
	{
		$r=5;
	}
	else
	{
		$r=2;
	}
	$queryselect="select abs(r1.km-r2.km) as km from stationinroute r1,stationinroute r2 where r1.routeid=r2.routeid and r1.stationname='$f' and r2.stationname='$t'";
	$res=mysqli_query($conn,$queryselect);
	$row=mysqli_fetch_assoc($res);
	$km=$row['km'];
	$p=$km*($r/2)*$noofch+$km*$r*$noofad;
	}
	else
	{
		$p=0;
	}
	
?>
 <input type="text"  class="form-control"  name="price" value="<?php echo $p;?>" readonly>