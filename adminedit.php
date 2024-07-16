<?php 
include('topnav.php');
?>
<?php
include('sidenav.php');
?>
<body>
 <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            General Form Elements
            <small>Preview</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Forms</a></li>
            <li class="active">General Elements</li>
          </ol>
        </section>
		<!-- Main content -->
        <section class="content">
          <div class="row">
       
            <div class="col-md-12">
              
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Quick Example</h3>
                </div>
<?php
	$aid=$_GET['e'];
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
	$queryselect="select * from admin where aid='$aid'";
	$res=mysqli_query($conn,$queryselect);
	while($row=mysqli_fetch_assoc($res))
	{
		$a=$row['name'];
		$b=$row['email'];
		$c=$row['phoneno'];
		$d=$row['address'];
		$e=$row['password'];
		$image=$row['image'];
	}
	?>
	

	<form method="post">
		<div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputname">Admin Name</label>
                      <input type="text" class="form-control" id="exampleInputname" placeholder="Enter Name" name="n" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="e" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputphno">Phone Number</label>
                      <input type="text" class="form-control" id="exampleInputphno" placeholder="Enter Phone Number" pattern="[0-9]{10}" name="p"  title="only 10 DIGIT" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAdd">Address</label>
                      <input type="text" class="form-control" id="exampleInputAdd" placeholder="Enter Address"  name="add" required>
                    </div>
		<input type="submit" value="Edit" name="edit">
	</form>
	<?php
		if(isset($_POST["add"]))
		{
			$a=$_POST["n"];
			$b=$_POST["e"];
			$c=$_POST["p"];
			$d=$_POST["add"];
			$queryinsert="update admin set name='$a',email='$b' ,phoneno='$c',address='$d' where aid='$aid'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"data updated";
			}
			else
			{
				echo"data not updated";
			}
		}
	?>	
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="http://code.jquery.com/ui/1.11.2/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
	   <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>
	</body>
	</html>