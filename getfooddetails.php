<?php 

$q1=$_GET['q1'];
$q2=$_GET['q2'];

	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();
	}
?>
<select>
<option> select food Name </option>
<?php
$query="select * from food where foodsubcategory='$q1'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
?>
	<option><?php echo $row['foodname'];?></option>
	<?php 	
}
?>
</select>