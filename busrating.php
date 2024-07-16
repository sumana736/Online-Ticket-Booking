<?php 
include('usertopnav.php');
?>
<?php
include('usersidenav.php');
$email=$_SESSION['email'];
?>
<?php
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
		
 ?>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
		content="width=device-width, 
				initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>The Product Review and Rating</title>
</head>
<body>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
         
	<div class="container">
		<h1>Rate Us</h1>
		<div class="rating">
			<span id="rating">0</span>/5
			
		</div>
		<div class="stars" id="stars">
			<span class="star" data-value="1">★</span>
			<span class="star" data-value="2">★</span>
			<span class="star" data-value="3">★</span>
			<span class="star" data-value="4">★</span>
			<span class="star" data-value="5">★</span>
		</div>
		<p>Share your review:</p>
        <form role="form" name="frm" method="post">
		<div class="box-body">
		<div class="form-group">
         <input type="text" class="form-control" id="rate" name="rate">
         </div>
		 <div class="form-group">
         <textarea id="review" placeholder="Write your review here" name="review"></textarea>
         </div>
		</div>
		<div class="box-footer" align="center">
         <input type="submit" class="btn btn-primary" onclick="return show();" value="Submit" name="submit">
         </div>
        </form>	
		<?php

				if(isset($_POST["submit"]))
			{
				$a=$_POST["rate"];
				$b=$_POST["review"];
		
					$queryinsert="insert into busrating values('','$email','$a','$b')";
					if(mysqli_query($conn,$queryinsert))
					{
						echo'Your Rating has submitted successfully';

					}
					else
					{
						echo'Your Rating has not submitted successfully';
					}
			}
			?>
		
</div>
	<script src="script.js"></script>

		 
          <!-- Main row -->
         <!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- Morris.js charts -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="plugins/morris/morris.min.js" type="text/javascript"></script>
    <!-- Sparkline -->
    <script src="plugins/sparkline/jquery.sparkline.min.js" type="text/javascript"></script>
    <!-- jvectormap -->
    <script src="plugins/jvectormap/jquery-jvectormap-1.2.2.min.js" type="text/javascript"></script>
    <script src="plugins/jvectormap/jquery-jvectormap-world-mill-en.js" type="text/javascript"></script>
    <!-- jQuery Knob Chart -->
    <script src="plugins/knob/jquery.knob.js" type="text/javascript"></script>
    <!-- daterangepicker -->
    <script src="plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
    <!-- datepicker -->
    <script src="plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- Slimscroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>

    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="dist/js/pages/dashboard.js" type="text/javascript"></script>

    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
  </body>
</html>