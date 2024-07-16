<?php session_start();
$_session['email']="";
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
  </head>
  <body class="login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="index2.html"><b>Admin</b>LOGIN</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
        <p class="login-box-msg">Sign in to start your session</p>
        <form  method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="email" placeholder="Email" required  value="<?php 
			if(isset($_COOKIE['aeid']))
			{
				echo $_COOKIE['aeid'];
			}
			?>">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required value="<?php 
			if(isset($_COOKIE['apid']))
			{
				echo $_COOKIE['apid'];
			}
			?>">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox" name="rem"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Log in</button>
            </div><!-- /.col -->
          </div>
        </form>
<?php
		if(isset($_POST["login"]))
		{
			$a=$_POST["email"];
			$b=$_POST["password"];
			$selectlogin="select * from admin where email='$a' and password='$b'";
			$reslogin=mysqli_query($conn,$selectlogin);
			$rc=mysqli_num_rows($reslogin);
			if($rc==1)
			{
				if(isset($_POST['rem']))
				{
					setcookie('aeid',$a,time()+(86400 * 30),"/");
					setcookie('apid',$b,time()+(86400 * 30),"/");
				}
				$_SESSION['email']=$a;
				echo"<script>alert('login successfull');window.location.href='admindashboard.php'</script>";
			}
			else
			{
				echo"<script>alert('login unsuccessfull');</script>";
			}
		}
	?>	

        

        <a href="#">I forgot my password</a><br>
        

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