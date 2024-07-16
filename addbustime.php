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
	$bid=$_GET['s'];
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
                      <label for="exampleInputName1">Stopage Name</label>
                      <input type="text" class="form-control" id="exampleInputName1" placeholder="Station Name" name="sn" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputName1">Time</label>
                      <input type="time" class="form-control" id="exampleInputName1" placeholder="Select Current Time" name="t" required>
                    </div>
				</div><!-- /.box-body -->

                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="Add" name="sub">
                  </div>
                </form>
				
			<?php
			if(isset($_POST["sub"]))
		{
			$a=$_POST["sn"];
			$b=$_POST["t"];
				$selectexist="select * from bustime where stopagename='$a' and busid='$bid'"; 
		$resexist=mysqli_query($conn,$selectexist); 
		$rc=mysqli_num_rows($resexist); 
		if($rc==0)
			{
				$queryinsert="insert into bustime values('','$bid','$a','$b')";
				if(mysqli_query($conn,$queryinsert))
				{
					echo"<script> alert('Time inserted');</script>";
				}
				else
				{
					echo"Time not inserted";
				}
			
			}
			else
			{
			}
		}
	?>	


              </div><!-- /.box -->
			   <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add Time</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					    <th>Stopage Name</th>
                        <th>Time</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
					$c=1;
						$queryselect="select * from bustime where busid='$bid'";
							$res=mysqli_query($conn,$queryselect);
							while($row=mysqli_fetch_assoc($res))
							{	$a=$row['stopagename'];
								$b=$row['time'];
								$c=$row['timeid'];
								
					?>
							<tr>

							<td><?php echo $a;?></td>
							<td><?php echo $b;?></td>
							<td><a href="deletebustime.php?s=<?php echo $c;?>"><img src="img/delete.png" width="30px" height="30px"></a></td>
							</tr>
							<?php
						}

						?>
					
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>Stopage Name</th>
                        <th>Time</th>
						<th>Delete</th>
                      </tr>
                    </tfoot>
                  </table>
				 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  </div>
			  </div>
			  
			  <!-- /.box -->
			  
		
			  
			  
  
        </section><!-- /.content -->
		</div>
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