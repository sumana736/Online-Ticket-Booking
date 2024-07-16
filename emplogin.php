<?php session_start();
$_session['email']="";
?>
<html>
<title></title>
<head>
</head>
<body>
<?php
	$conn=mysqli_connect("localhost","root","","phppclass");
	if(!$conn)
	{
		echo mysqli_error();	
	}
?>
	<form method="post">
		E-mail <input type="text" name="email"><br><br>
		Password <input type="text" name="password"><br><br>
		<input type="submit" value="login" name="login">
	</form>
	<?php
		if(isset($_POST["login"]))
		{
			$a=$_POST["email"];
			$b=$_POST["password"];
			$selectlogin="select * from emp where email='$a' and password='$b'";
			$reslogin=mysqli_query($conn,$selectlogin);
			$rc=mysqli_num_rows($reslogin);
			if($rc==1)
			{
				$_SESSION['email']=$a;
				echo"<script>alert('login successfull');window.location.href='empdetails.php'</script>";
			}
			else
			{
				echo"<script>alert('login successfull');</script>";
			}
		}
	?>	
</body>
</html>