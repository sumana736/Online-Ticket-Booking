<!DOCTYPE html>
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
	<style>
	.login-page
	{
		background-image:url('istockphoto-178489146-612x612.jpg');
		background-repeat:no-repeat;
		background-size:cover;
	}
	</style>

	
  </head>
  <body class="login-page" >
  <p><center><h1><u><font color='blue'>ONLINE TICKET BOOKING</font></u></h1></center></p>
    <div class="login-box">
      <div class="login-logo">
        <a href="index2.html">LOGIN/SIGN UP</a>
      </div><!-- /.login-logo -->
      <div class="login-box-body">
          <div class="row">
            <div class="col-xs-12">    
                  <a class="btn btn-primary btn-block btn-flat" href="adminlogin.php">ADMIN LOGIN</a>                   
            </div><!-- /.col -->
			</div>
			</div>
	   <div class="login-box-body">
			<div class="row">
            <div class="col-xs-12">
              <a class="btn btn-primary btn-block btn-flat" href="userlogin.php">USER LOGIN</a>
            </div><!-- /.col -->
          </div>
      </div><!-- /.login-box-body -->
	  <div class="login-box-body">
	  <div class="row">
		   <div class="col-xs-12">  
		   <a class="btn btn-primary btn-block btn-flat" href="addadmin.php">SIGN UP FOR NEW ADMIN</a>          
		   </div>
	   </div>
	    </div>
	  <div class="login-box-body">
	  <div class="row">
		   <div class="col-xs-12">  
		   <a class="btn btn-primary btn-block btn-flat" href="userregistration.php">SIGN UP FOR NEW USER</a>          
		   </div>
	   </div>
		</div>
		   
		   
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