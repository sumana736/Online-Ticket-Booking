<?php 

$q=$_GET['q'];

	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();
	}
?>
<select>
<option> select food sub category </option>
<?php
$query="select * from foodsubcategory where category='$q'";
$res=mysqli_query($conn,$query);
while($row=mysqli_fetch_assoc($res))
{
?>
	<option><?php echo $row['subcategory'];?></option>
	<?php 
	
	
}
?>

</select>