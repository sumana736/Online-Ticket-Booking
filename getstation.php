<?php 

$q=$_GET['q'];

	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();
	}
?>
<select>
<option> select station </option>
<?php
$query="select * from stationinroute where routeid='$q'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
?>
	<option><?php echo $row['stationname'];?></option>
	<?php 
	
	
}
?>

</select>