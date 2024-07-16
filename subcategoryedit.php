<?php
include('topnav.php');
?>
<?php
include('sidenav.php');
?>
<?php
    $conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}

     $s=$_GET['s'];
	 $select="select * from foodsubcategory where subcategoryid='$s'";
	 $res=mysqli_query($conn,$select);
	 $row=mysqli_fetch_assoc($res);
	 
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
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Admin Page</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
             <form role="form" name="frm" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputName1">Food Category</label>
                      <input type="text" class="form-control" id="exampleInputcityname" name="fname" readonly required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Food Sub Category</label>
                      <input type="text" class="form-control" id="exampleInputcityname" placeholder="Enter food Name" name="sname" value=<?php echo $row['category'];?> required>
                    </div>
					
          
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="edit" name="edit">
                  </div>
                </form>
			<?php
		if(isset($_POST["edit"]))
		{
			$a=$_POST["sname"];
			
			$queryinsert="update foodsubcategory set subcategory='$a' where subcategoryid='$s'";
			if(mysqli_query($conn,$queryinsert))
			{
				echo"<script>alert('Data updated');window.location.href='foodsubcategory.php'</script>";
			}
			else
			{
				echo"<script>alert('Data not updated');window.location.href='foodsubcategory.php'</script>";
			}
		}
	?>	
     
              </div><!-- /.box -->
			  </div>
			  </div>

			  <!-- /.box -->
			  
			  
			  </div><!-- /.col -->
			  
			  
  
        </section><!-- /.content -->

      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
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