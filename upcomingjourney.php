<?php 
include('usertopnav.php');
?>
<?php
include('usersidenav.php');
$uid=$_SESSION['email'];
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
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                 <table id="example1" border="1px" width=" ">
                    <thead>
                      <tr>
                        <th>pnr no</th>
                        <th>User name</th>
                        <th>journey date</th>
						<th>Booking date</th>
						<th>Journey From</th>
						<th>Journey To</th>
						<th>Class</th>
						<th>Seat no with Passenger Name and Status</th>
						<th>Booking Cancel</th>
                      </tr>
                    </thead>
                   <tbody>
						<?php
						$c=1;
						date_default_timezone_set("Asia/kolkata");
						$d=date('Y-m-d H:i:s');
						$queryselect="select distinct(pnrno) from booking where journeydate>'$d' and userid='$uid'";
						$res=mysqli_query($conn,$queryselect);
						while($row=mysqli_fetch_assoc($res))
						{
							
							$pnr=$row['pnrno'];
							
							$sn="";
								$queryselect1="select * from booking where pnrno='$pnr'";
								$res1=mysqli_query($conn,$queryselect1);
								while($row1=mysqli_fetch_assoc($res1))
								{
									$pid=$row1['passengerid'];
								$queryselect2="select * from passenger where passengerid='$pid'";
								$res2=mysqli_query($conn,$queryselect2);
								$row2=mysqli_fetch_assoc($res2);
								$n=$row2['name'];
								$c=$row1['class'];
								$status=$row1['status'];
								$bg=$row1['boggiesname'];
								if($sn=="")
								{
									
								$sn=$n."-".$bg."-".$row1['seatno']."-".$status;
								}
								else
								{
									$sn=$sn." , ".$n."-".$bg."-".$row1['seatno']."-".$status;
								}
								
							
							$jd=$row1['journeydate'];
							$bd=$row1['bookingdate'];
							$f=$row1['froms'];
							$t=$row1['tos'];
							$c=$row1['class'];
							
							}
							
							
							
								
								
								?>
								<tr>
								<td><?php echo $pnr;?></td>
								<td><?php echo $n;?></td>
								<td><?php echo $jd;?></td>
								<td><?php echo $bd;?></td>
								<td><?php echo $f;?></td>
								<td><?php echo $t;?></td>
								<td><?php echo $c;?></td>
								<td><?php echo $sn;?></td>
								<td><a href="cancelbookingfortrain.php?pnr=<?php echo $pnr;?>" target='_blank' onclick="return confirm('do you want to continue?');">Cancel Booking</a></td>
								</tr>
								<?php
								$c++;
							
						}
						?>
					</tbody>
                    <tfoot>
                       <tr>
                        <th>pnr no</th>
                        <th>User name</th>
                        <th>journey date</th>
						<th>Booking date</th>
						<th>Journey From</th>
						<th>Journey To</th>
						<th>Class</th>
					
						<th>Seat no with Passenger Name and Status</th>
						<th>Booking Cancel</th>
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
	
   
  </body>
</html>