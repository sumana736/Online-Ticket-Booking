<?php 

$q3=$_GET['q3'];
$q4=$_GET['q4'];
$q5=$_GET['q5'];

	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();
	}
?>

<?php
$query="select * from food where category='$q3' and foodsubcategory='$q4' and foodname='$q5'";
$res=mysqli_query($conn,$query);
$row=mysqli_fetch_assoc($res);
?>
	 <input type="text" class="form-control" id="prc" name="price" required disabled value="<?php echo $row['price'];?>">
	<?php 	 

?>