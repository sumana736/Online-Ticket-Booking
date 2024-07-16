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
                      <label for="exampleInputName1">City Name</label>
                      <input type="text" class="form-control" id="exampleInputcityname" placeholder="Enter City Name" name="cname" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Station Name</label>
                      <input type="text" class="form-control" id="exampleInputstationname" placeholder="Enter Station Name" name="sname"required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputNumber1">Station Code</label>
                      <input type="text" class="form-control" id="exampleInputstationcode" placeholder="Enter Station Code" name="scode" required>
                    </div>
          
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="Add" name="add">
                  </div>
                </form>
			<?php

				if(isset($_POST["add"]))
			{
				$a=$_POST["cname"];
				$b=$_POST["sname"];
				$c=$_POST["scode"];
		
					$queryinsert="insert into station values('','$a','$b','$c')";
					if(mysqli_query($conn,$queryinsert))
					{
						echo'Admin has registered successfully';

					}
					else
					{
						echo'Admin has not registered successfully';
					}
			}
			?>
     
              </div><!-- /.box -->
			  </div>
			  </div>
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sl.No</th>
                        <th>City Name</th>
                        <th>Station Name</th>
                        <th>Station Code</th>
						<th>Edit</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						$queryselect="select * from station";
						$res=mysqli_query($conn,$queryselect);
						while($row=mysqli_fetch_assoc($res))
						{
							$a=$row['stationid'];
							$b=$row['city'];
							$c=$row['stationname'];
							$d=$row['stationcode'];
							?>
						<tr>
						<td><?php echo $a;?></td>
						<td><?php echo $b;?></td>
						<td><?php echo $c;?></td>
						<td><?php echo $d;?></td>
						
						<td><a href="stationedit.php?e=<?php echo $a;?>"> <img src="img/edit.png" width="50px" height="30px"> </a></td>
						<td><a href="stationdelete.php?e=<?php echo $a;?>"> <img src="img/delete.png" width="30px" height="30px"> </a></td>
						</tr>
						<?php
						}
						?>
					</tbody>
                    <tfoot>
                        <tr>
						<th>Sl.No</th>
                        <th>City Name</th>
                        <th>Station Name</th>
                        <th>Station Code</th>
						<th>Edit</th>
						<th>Delete</th>
                      </tr>
                    </tfoot>
                  </table>
				  <?php echo "welcome".$_SESSION['email'];?>
                </div><!-- /.box-body -->
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