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
				  <div class="col-md-6">
                    <div class="form-group">
                      <div  class="col-md-12">
					 <div class="form-group">
                      <label for="exampleInputName1">Date</label>
                      <input type="Date" class="form-control" id="exampleInputName1" placeholder="enter the name of the station" name="from" required>
					</div>
					</div>
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
				  <div class="col-md-6">
                    <div class="form-group">
                     
				</div>
                    </div>
					<div  class="col-md-6">
					 <div class="form-group">
                      
                     
					  
					</div>
					</div>
				</div><!-- /.box-body -->

                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="Search" name="search">
                  </div>
                </form>
			
     
              </div><!-- /.box -->
			  </div>
			  </div>
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add Train</h3>
                </div><!-- /.box-header -->
			   <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
						<th>Sl.no</th>
                       <th>Train no</th>
                        <th>Train name</th>
                       <th>Journey start</th>
                        <th>Destination</th>
                        <th>No.of Child</th>
						<th>No.of Adult</th>
						<th>pnr no</th>
						<th>Total Amount</th>
						<th>Date</th>
						<th>Mode</th>
					 </tr>
                    </thead>
                    <tbody>
					<?php
			if(isset($_POST["search"]))
			{
				$a=$_POST["from"];
				$b=$_POST["to"];
				
				
					
				
			
							$queryselect="select * from trainaccount where date between '$a' and '$b'";
							$res=mysqli_query($conn,$queryselect);
							while($row=mysqli_fetch_assoc($res))
							{	
                                $aid=$row['accid'];	
                                $tid=$row['trainid'];								
								$frm=$row['from'];
								$to=$row['to'];
								$noad=$row['noofadult'];
								$noch=$row['noofchild'];
								$prc=$row['price'];
								$t=$row['type'];
								$pnr=$row['pnr'];
								$dt=$row['date'];
								$md=$row['mode'];
							$queryselect2="select * from addtrain where trainid='$tid'";
                            $res2=mysqli_query($conn,$queryselect2);
							$row2=mysqli_fetch_assoc($res2);
							{							
							  $x=$row2['tname'];
							  $y=$row2['tno'];
							}
								
								
								
					?>
							<tr>
							<td><?php echo $aid;?></td>
							<td><?php echo $y;?></td>
							<td><?php echo $x;?></td>
							<td><?php echo $frm;?></td>
							<td><?php echo $to;?></td>
							<td><?php echo $noad;?></td>
							<td><?php echo $noch;?></td>
							<td><?php echo $prc;?></td>
							<td><?php echo $pnr;?></td>
							<td><?php echo $dt;?></td>
							<td><?php echo $md;?></td>
							</tr>
							<?php
						}
			}

						?>
					
                    </tbody>
                    <tfoot>
                      <tr>
						<th>Sl.no</th>
                        <th>Train no</th>
                        <th>Train name</th>
                       <th>Journey start</th>
                        <th>Destination</th>
                        <th>No.of Child</th>
						<th>No.of Adult</th>
						<th>pnr no</th>
						<th>Total Amount</th>
						<th>Date</th>
						<th>Mode</th>
                      </tr>
                    </tfoot>
                  </table>
				 
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