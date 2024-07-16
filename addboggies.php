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
		$s=$_GET["s"];
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
                      <label for="exampleInputName1">Boggies Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Boggies Name" name="bname" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Number Of Seats</label>
                      <input type="text" class="form-control" id="exampleInputName2" placeholder="No of seats" name="nos" required>
                    </div>
					<div class="form-group">
                      <label for="ss">Class</label>
                      
					  <select class="form-control" name="cname">
							<option>Select Class</option>
							<?php
							$queryselect="select * from class";
							
								$res=mysqli_query($conn,$queryselect);
								while($row=mysqli_fetch_assoc($res))
								{
									$a=$row['class'];
							?>
							<option><?php echo $a;?></option>
							<?php
								}
							?>
						
					</select>
                    </div>
				</div><!-- /.box-body -->

                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="Add" name="submit">
                  </div>
                </form>
			<?php
			if(isset($_POST["submit"]))
			{
				$x=$_POST["bname"];
				$y=$_POST["nos"];
				$z=$_POST["cname"];
				$queryinsert="insert into boggies values('','$x','$y','$s','$z')";
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
						<th>Slno.</th>
                        <th>Boggiesname</th>
						<th>No.of seats</th>
                        <th>Trainid</th>
						<th>Class</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						$c=1;
						$queryselect="select * from boggies";
						$res=mysqli_query($conn,$queryselect);
						while($row=mysqli_fetch_assoc($res))
						{
							$b=$row['boggiesid'];
							$x=$row['boggiesname'];
							$y=$row['noofseat'];
							$s=$row['trainid'];
							$t=$row['class'];
							?>
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $x;?></td>
						<td><?php echo $y;?></td>
						<td><?php echo $s;?></td>
						<td><?php echo $t;?></td>
						<td><a href="boggiesdelete.php?s=<?php echo $b;?>"> <img src="image/deleteimage.png" width="30px" height="30px"> </a></td>
						</tr>
						<?php
						$c++;
						}
						?>
					</tbody>
                    <tfoot>
                        <tr>
						<th>Slno.</th>
                        <th>Boggiesname</th>
						<th>No.of seats</th>
                        <th>Trainid</th>
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
	