<?php 
include('usertopnav.php');
?>
<?php
include('usersidenav.php');
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
                  <h3 class="box-title">User Page</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" name="frm" method="post">
                  <div class="box-body">
				<div  class="col-md-6">
					 <div class="form-group">
                      <label for="exampleInputName1">Date</label>
                      <input type="Date" class="form-control" id="exampleInputName1" placeholder="enter the name of the station" name="from" required>
					</div>
					</div>
					<div  class="col-md-6">
					 <div class="form-group">
                      <label for="exampleInputName1">Date</label>
                      <input type="Date" class="form-control" id="exampleInputName1" placeholder="enter the name of the station" name="to" required>
					</div>
					</div>
				</div><!-- /.box-body -->
				 <div class="box-body">
			
				
				</div><!-- /.box-body -->

                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="Search" name="submit">
                  </div>
                </form>
			
     
              </div>
			  <!-- /.box -->
			  </div>
			  </div>
			  
			  
			  
			   <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add Bus</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
					   <th>Slno</th>
                        <th>Bus no</th>
                        <th>Bus name</th>
                        <th>Journey start</th>
                        <th>Destination</th>
                        <th>No of child</th>
						<th>No of adult</th>
						<th>Bkn no</th>
						<th>Total amount</th>
						<th>Date</th>
						<th>Mode</th>

                      </tr>
                    </thead>
                    <tbody>
					
					<?php
			if(isset($_POST["submit"]))
			{
				$a=$_POST["from"];
				$b=$_POST["to"];
				
				
							$queryselect="select * from busaccount where date between '$a' and '$b'";
							$res=mysqli_query($conn,$queryselect);
							while($row=mysqli_fetch_assoc($res))
							{	
								$z=$row["slno"];
								$a=$row['busaccno'];
								$c=$row['from'];
								$d=$row['to'];
								$e=$row['noofchild'];
								$f=$row['noofadult'];
								$g=$row['bookingno'];
								$h=$row['price'];
								$i=$row['date'];
								$j=$row['mode'];
								
								
									

								$queryselect1="select * from addbus where busno='$a'";
								$res1=mysqli_query($conn,$queryselect1);
								$row1=mysqli_fetch_assoc($res1);
								{
									$b=$row1['busno'];
									$bn=$row1['busname'];
								}
								
								
								
								
								
								
					?>
							<tr>
							<td><?php echo $z;?></td>
							<td><?php echo $a;?></td>
							<td><?php echo $bn;?></td>
							<td><?php echo $c;?></td>
							<td><?php echo $d;?></td>
							<td><?php echo $e;?></td>
							<td><?php echo $f;?></td>
							<td><?php echo $g;?></td>
							<td><?php echo $h;?></td>
							<td><?php echo $i;?></td>
							<td><?php echo $j;?></td>
							</tr>
							<?php
						}
			}

						?>
					
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Slno</th>
                        <th>Bus no</th>
                        <th>Bus name</th>
                        <th>Journey start</th>
                        <th>Destination</th>
                        <th>No of child</th>
						<th>No of adult</th>
						<th>Bkn no</th>
						<th>Total amount</th>
						<th>Date</th>
						<th>Mode</th>
						
                      </tr>
                    </tfoot>
                  </table>
				 
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