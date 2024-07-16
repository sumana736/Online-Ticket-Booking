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
<?php
	$s=$_GET['s'];
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();
	}
	$queryselect="select * from route where routeid='$s'"; 
	$res=mysqli_query($conn,$queryselect);
	$row=mysqli_fetch_assoc($res);
	$routename=$row['routename'];
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
                <form role="form" name="frm" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="rn">Route Name</label>
                      <input type="text" class="form-control" id="rn" value="<?php echo $routename;?>"   disabled>
                    </div>
					<div class="form-group">
                      <label for="ss">Select Station</label>
                      <input type="text" class="form-control" list="list1" id="ss"  placeholder="Enter station" name="s" required>
					  <datalist id="list1">
							<option>Select Station</option>
							<?php
							$queryselect="select * from station";
							
								$res=mysqli_query($conn,$queryselect);
								while($row=mysqli_fetch_assoc($res))
								{
									$a=$row['stationname'];
							?>
							<option><?php echo $a;?></option>
							<?php
								}
							?>
						
				</datalist>
                    </div>
					<div class="form-group">
                      <label for="exampleInputemail1">station no</label>
                      <input type="text" class="form-control" id="sn" placeholder="Enter the number of the station"  name="n" title="please enter the name the station number" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputemail1">kilometer</label>
                      <input type="text" class="form-control" id="km" placeholder="Enter the kilometer"  name="k" title="please enter the kilometer" required>
                    </div>
                   </div>
                    

              </div>
				<div class="box-footer">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="add" name="add">
                  </div>
                </form>
<?php
if(isset($_POST["add"]))
	{
		$b=$_POST["s"];
		$c=$_POST["n"];
		$d=$_POST["k"];
        $queryinsert="insert into stationinroute values('','$s','$b','$c','$d')";
				if(mysqli_query($conn,$queryinsert))
				{
					echo("Route updated successfully");
				}
				else
				{
					echo("Route not updated");
				}
			
		}
?>
    
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
                        <th>S.No</th>
                        <th>Route No</th>
						<th>Station No</th>
                        <th>Station Name</th>
						<th>Delete</th>
						</tr>
                    </thead>
                    <tbody>
                      
 <?php 
 $co=1;
	$queryselect="select * from stationinroute";
	$res=mysqli_query($conn,$queryselect);
	while($row=mysqli_fetch_assoc($res))
	{
		$sr=$row['stationrouteid'];
		$ri=$row['routeid'];
		$sn=$row['stationname'];
		$sno=$row['stationno'];

?>
<tr>
	<td><?php echo $co;?></td>
	<td><?php echo $ri;?></td>
	<td><?php echo $sno;?></td>
	<td><?php echo $sn;?></td>

	
	
	<td><a href="addstationtoroutedelete.php?s=<?php echo $sr;?>"><img src="img/delete.png" width="30px" height="30px"></a></td>

</tr>
<?php 
$co++;
	}

?>
                      
                    </tbody>
                    <tfoot>
                       <tr>
                        <th>S.No</th>
                        <th>Route No</th>
						<th>Station No</th>
                        <th>Station Name</th>
						<th>Delete</th>
						</tr>
                    </tfoot>
                  </table>
				 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			</div>
        </section>
    <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
    </footer>
	  <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
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