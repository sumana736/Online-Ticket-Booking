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
	$t=$_GET['t'];
	$f=$_GET['f'];
	$d=$_GET['d'];
	$c=$_GET['c'];
?>



      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
		  <?php
		
	?>
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
                  <h3 class="box-title">Search For Bus</h3>
                </div><!-- /.box-header -->
       
               
	
				
              </div><!-- /.box -->
			</div><!-- /.box-body -->
			</div><!-- /.box -->
			<div class="box">
                
                <div class="box-body">
				<!-- outer loop -->
				<?php 
				$sqlroute="select busrouteid from bustoroute where stopagename='$t' and busrouteid in(SELECT busrouteid FROM bustoroute where stopagename='$f')";
		$resbusroute=mysqli_query($conn,$sqlroute);
	while($rowbusroute=mysqli_fetch_assoc($resbusroute))
	{
		$busrouteid= $rowbusroute['busrouteid'];
		$querybus="select * from addbus where routeid='$busrouteid' and bustype='$c'";
		$resbus=mysqli_query($conn,$querybus);
		while($rowbus=mysqli_fetch_assoc($resbus))
		{
			$bid=$rowbus['busid'];
			$querytimef="select * from bustime where busid='$bid' and stopagename='$f'";
			$restimef=mysqli_query($conn,$querytimef);
			$rowtimef=mysqli_fetch_assoc($restimef);
			$st=$rowtimef['time'];
			$querytime="select * from bustime where busid='$bid' and stopagename='$t'";
			$restime=mysqli_query($conn,$querytime);
			$rowtime=mysqli_fetch_assoc($restime);
								
			$et=$rowtime['time'];

		?>
               <div class="row">
			   <div class="col-md-12">
			   <div class="row">
					
					
					<div class="col-md-12 bg-danger">
						Bus Name : <?php echo $rowbus['busname'];?>
					</div>
				  </div>
					<div class="row">
						<div class="col-md-4 bg-primary">
							<br> <?php echo $f;?> <br>
							<?php
							
								echo $st;	
			
							?>
						</div>
						<div class="col-md-4 bg-primary">
							duration:  <?php $s=(strtotime($et)-strtotime($st));
										$h=$s/3600;
										$rem=$s%3600;
										$m=$rem/60;
										if((int)$m<=9)
										{
										
										echo (int)$h." : 0".(int)$m;
										}
										else
										{
												echo (int)$h." : ".(int)$m;
										}


						?><br><br>week
						</div>
						<div class="col-md-4 bg-primary">
							<br><?php echo $t;?> <br>
							<?php
							
							echo $et;
							?>
						</div>
				   </div>
					<div class="row">
					
					<br>
					<!-- innerloop -->
					<?php 
					$datein=$d;
					for($i=1;$i<=7;$i++)
					{
					
					?>
					
					<div class="col-md-1 bg-success seat">
						<?php 
						$sqlseat="select * from addbus where busid='$bid'";
						$resseat=mysqli_query($conn,$sqlseat);
						$rowseat=mysqli_fetch_assoc($resseat);
						
						$seat=$rowseat['seat'];
						$bkn=time();
						?>
						<center> <?php 
						$seatcount="select * from busbooking where busid='$bid' and journeydate='$datein'";
						$rescount=mysqli_query($conn,$seatcount);
						$rowcount=mysqli_num_rows($rescount);
						if($seat<=$rowcount)
						{
							echo $datein."<br>class:".$c."<br><div class='text-danger'>waiting:".($seat-$rowcount)."</div>";
						?>
						
						<a href="addbuspassenger.php?d=<?php echo $datein;?>&t=<?php echo $t;?>&f=<?php echo $f;?>&c=<?php echo $c;?>&bid=<?php echo $bid;?>&bkn=<?php echo $bkn;?>" class="btn btn-success">BOOK</a>
						<?php 
						}
						else
						{
						
						echo $datein."<br>class:".$c."<br>Available- ".($seat-$rowcount);
						
						?>
						<br>
						
						<a href="addbuspassenger.php?d=<?php echo $datein;?>&t=<?php echo $t;?>&f=<?php echo $f;?>&c=<?php echo $c;?>&bid=<?php echo $bid;?>&bkn=<?php echo $bkn;?>" class="btn btn-success">BOOK</a>
						<?php 
						}
						?>
						</center>
					</div>
					<?php
					$datein=date('Y-m-d',strtotime($datein.'+1 day'));
					}
					?>
                 <!-- innerloop -->
				  
				  </div>
				  
				  </div>
				  </div><br>
				    <!-- outer loop -->
					<?php 
		}
					
		}
		?>
                </div><!-- /.box-body -->
              </div>

            </div><!--/.col (left) -->
            <!-- right column -->
            

        </section><!-- /.content -->
 
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.0
        </div>
        <strong>Copyright &copy; 2014-2015 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights reserved.
      </footer>
  

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
    <script src=plugins/fastclick/fastclick.min.js'></script>
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