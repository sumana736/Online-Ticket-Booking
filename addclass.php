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
</head>
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
						<label for="exampleInputEmail1"> Add Class </label>
						<select class="form-control" name="class">
							<option>select class</option>
							<option> AC </option>
							<option>NON AC</option>
							
						</select>
					
					</div><!-- /.box-body -->
					</div>
                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="Add" name="submit">
                  </div>
				 
                </form>
			<?php
			if(isset($_POST["submit"]))
			{
				$z=$_POST["class"];
					$queryinsert="insert into class values('','$z')";
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
                        <th>Class</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						$c=1;
						$queryselect="select * from class";
						$res=mysqli_query($conn,$queryselect);
						while($row=mysqli_fetch_assoc($res))
						{
							$x=$row['classid'];
							
							$z=$row['class'];
							?>
						<tr>
						<td><?php echo $c;?></td>
			
						<td><?php echo $z;?></td>
						<td><a href="classdelete.php?s=<?php echo $x;?>"> <img src="image/deleteimage.png" width="30px" height="30px"> </a></td>
						</tr>
						<?php
						$c++;
						}
						?>
					</tbody>
                    <tfoot>
                        <tr>
                        <th>Sl.No</th>
                        <th>Class</th>
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
	