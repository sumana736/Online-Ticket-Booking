<?php session_start();
$_SESSION['email']="";
?>
<?php
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
?>
<html>
  <head>
  <script>
function getdistrict(str) {
  if (str.length == 0) {
    document.getElementById("district").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("district").innerHTML = this.responseText;
		
      }
    };
    xmlhttp.open("GET", "getdistrict.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
    <meta charset="UTF-8">
    <title>AdminLTE 2 | Log in</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
	
	<style>
	.wt
	{
		width:1000px;
	}
	</style>
  </head>
  <body class="login-page">
    <div class="login-box wt">
      <div class="login-logo ">
        <a href="index2.html"><b>User</b>REGISTRATION</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form method="post">
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="exampleInputName"> Email</label>
						<input type="email" class="form-control" id="exampleInputName" placeholder="Enter user name" name="name" required>
				</div>
			</div>
			<div class="col-md-4"> 
				<div class="form-group">
					<label for="exampleInputName"> Password </label>
						<input type="text" class="form-control" id="exampleInputName" placeholder="Enter Password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}' title="enter one uppercase,one lower case,one digit atleast 8 to 15 charecter" name="pas" required>
				</div>
			</div>
			<div class="col-md-4">
				<label for="exampleInputName"> Confirm Password </label>
					<input type="text" class="form-control" id="exampleInputName" placeholder="Confirm Password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}' title="enter one uppercase,one lower case,one digit atleast 8 to 15 charecter" name="repas" required>
			</div>
		</div>
		
		
		 <div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="exampleInputName"> First Name</label>
						<input type="text" class="form-control" id="exampleInputName" placeholder="Enter First name" name="fname" required>
				</div>
			</div>
			<div class="col-md-4"> 
				<div class="form-group">
					<label for="exampleInputName"> Second Name</label>
						<input type="text" class="form-control" id="exampleInputName" placeholder="Enter second name" name="sname">
				</div>
			</div>
			<div class="col-md-4">
				<label for="exampleInputName"> Last Name </label>
					<input type="text" class="form-control" id="exampleInputName" placeholder="Enter last name"  name="lname" required>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
				<div class="col-md-4">
					<label for="exampleInputName">Address</label>
						<input type="text" class="form-control" id="exampleInputName" placeholder="Enter address" name="add" required>
				</div>
				<div class="col-md-4">
					<label for="exampleInputName">city</label>
						<input type="text" class="form-control" id="exampleInputName" placeholder="Enter the city" name="city" required>
				</div>
		
				<div class="col-md-4">
					<label for="exampleInputName">Pin Code</label>
						<input type="text" class="form-control" id="exampleInputName" placeholder="Enter Pin Code" name="pin" required>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="form-group">
			<div class="col-md-4">
					<label for="exampleInputName">Country</label>
						
						<select class="form-control"  id="exampleInputName" name="country">
							<option>Select country</option>
							<option>India</option>
							<option>Bangladesh</option>
							<option>others</option>
						</select>
				</div>
				
				<div class="col-md-4">
					<label for="exampleInputName">State</label>
						
						 <select class="form-control" name="state" onchange="getdistrict(this.value);">
						<option> select state</option>
						<?php
							$queryselect="select * from state";
							
								$res=mysqli_query($conn,$queryselect);
								while($row=mysqli_fetch_assoc($res))
								{
									$a=$row['statename'];
							?>
							<option value="<?php echo $a;?>"><?php echo $a;?></option>
							<?php
								}
							?>
					  </select>
				</div>
				<div class="col-md-4">
					
						<div class="form-group">
                    <label for="exampleInputroute"> District</label>
					<select class="form-control" id="district" name="district">
						<option> select District </option>
					<?php
							$queryselect="select * from district";
							
								$res=mysqli_query($conn,$queryselect);
								while($row=mysqli_fetch_assoc($res))
								{
									$b=$row['districtname'];
							?>
							<option value="<?php echo $b;?>"><?php echo $b;?></option>
							<?php
								}
							?>
					</select>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group">
			<div class="col-md-4">
				<label for="exampleInputName">Phone Number </label>
					<input type="text" class="form-control" id="exampleInputName" placeholder="Enter mobile number" pattern="[0-9]{10}" title="only ten digit" name="phno" required>
			</div>
				<div class="col-md-4">
					<label for="exampleInputName">Occupation</label>
						
						<select class="form-control"  id="exampleInputName" name="occupation" >
							<option>Select Occupation</option>
							<option>Student</option>
							<option>Staff</option>
							<option>Housewife</option>
						</select>
				</div>
				<div class="col-md-4">
					<label for="exampleInputName">DOB</label>
						<input type="date" class="form-control" id="exampleInputName" placeholder="Enter date" name="date" required>
				</div>
			
		

         </div>
		 </div>
		 <div class="row">
			<div class="form-group">
			<div class="col-md-4">
             <label for="exampleInputName">Gender</label><br>
             <input type="radio" class="form-control" id="exampleInputName" name="gen">Male<input type="radio" class="form-control" id="exampleInputName" name="gen">Female<input type="radio" class="form-control" id="exampleInputName" name="gen">Transgender
         </div>

				<div class="col-md-4">
					<label for="exampleInputName">select a nationality</label>
						
						<select class="form-control"  id="exampleInputName" name="nationality" >
							<option>Select nationality</option>
							<option>hindu</option>
							<option>Muslim</option>
							<option>Krishtan</option>
							<option>others</option>
						</select>
				</div>
		 <div class="form-group">
             <label for="exampleInputName">Marital Status</label><br>
             <input type="radio" class="form-control" id="exampleInputName" name="ms">Married<input type="radio" class="form-control" id="exampleInputName" name="ms">Unmarried
         </div><br>
		
		 
		
	
          <div class="row">
            <div class="col-xs-4">    
                                     
            </div><!-- /.col -->
            <div class="col-xs-4">
              <input type="submit" class="btn btn-primary btn-block btn-flat" name="login" value="submit"> 
			  </div>
		 </form>
		<?php
			
			if(isset($_POST["login"]))
		{
			$a=$_POST["name"];
			$b=$_POST["pas"];
			$c=$_POST["repas"];
			$d=$_POST["fname"];
			$e=$_POST["sname"];
			$f=$_POST["lname"];
			$g=$_POST["add"];
			$h=$_POST["phno"];
			$i=$_POST["pin"];
			$j=$_POST["country"];
			$k=$_POST["city"];
			$q=$_POST["state"];
			$r=$_POST["district"];
			$l=$_POST["occupation"];
			$m=$_POST["date"];
			$n=$_POST["gen"];
			$o=$_POST["nationality"];
			$p=$_POST["ms"];
		     $selectexist="select * from user where email='$a'"; 
		        $resexist=mysqli_query($conn,$selectexist); 
		         $rc=mysqli_num_rows($resexist); 
		         if($rc==0)
				 {
				$queryinsert="insert into user values('','$a','$b','$d','$c','$e','$f','$g','$h','$i','$j','$k','$q','$r','$l','$m','$n','$o','$p')";
				if(mysqli_query($conn,$queryinsert))
				{
					echo"<script> alert('data inserted');window.location.href='userlogin.php'</script>";
				}
				else
				{
					echo"data not inserted";
				}
			
		        }
			else
			{
				echo"<script>alert('email_id and phone number already exist');</script>";
			}
		}
         
			
	?>
	
	
            </div><!-- /.col -->
          </div>

		
        

      
        
      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>