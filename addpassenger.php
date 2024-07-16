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
	$pnr=$_GET['pnr'];
	$selectpnr="select * from booking where pnrno='$pnr'";
	$pnrres=mysqli_query($conn,$selectpnr);
	$rcpnr=mysqli_num_rows($pnrres);
	if($rcpnr>0)
	{
		echo"<script> alert('Your Booking have already Complete');window.location.href='trainbooking.php'</script>";
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
                  <h3 class="box-title">Add Passenger</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" name="frm" method="post">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputName1">Name</label>
                      <input type="text" class="form-control" id="exampleInputcityname" placeholder="Enter Name" name="name" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Age</label>
                      <input type="text" class="form-control" id="exampleInputstationname" placeholder="Enter age" name="age"required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputNumber1">Occupation</label>
                      <input type="text" class="form-control" id="exampleInputstationcode" placeholder="Enter occupation" name="occupation" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputNumber1">Phoneno</label>
                      <input type="text" class="form-control" id="exampleInputstationcode" placeholder="Enter phoneno" name="phoneno" pattern='[0-9]{10}' title='only 10 DIGIT' required>
                    </div>
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="Add" name="add">
                  </div>
                </form>
			<?php

				if(isset($_POST["add"]))
			{
				$a=$_POST["name"];
				$b=$_POST["age"];
				$c=$_POST["occupation"];
				$d=$_POST["phoneno"];
				
					$queryinsert="insert into passenger values('','$a','$b','$c','$d','$pnr')";
					if(mysqli_query($conn,$queryinsert))
					{
						echo "<script>alert('data inserted');</script>";
					}
				else
					{
						echo"data not inserted";
					}
			}
			?>
     
              </div><!-- /.box -->
			  </div>
			  </div>
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add Passenger</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>PassengerId</th>
                        <th>Name</th>
                        <th>Age</th>
                        <th>Occupation</th>
						<th>Phoneno</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
						<?php
						$c=1;
						$queryselect="select * from passenger where pnr='$pnr'";
						$res=mysqli_query($conn,$queryselect);
						while($row=mysqli_fetch_assoc($res))
						{
							$a=$row['passengerid'];
							$b=$row['name'];
							$c=$row['age'];
							$d=$row['occupation'];
							$e=$row['phoneno'];
							?>
						<tr>
						<td><?php echo $a;?></td>
						<td><?php echo $b;?></td>
						<td><?php echo $c;?></td>
						<td><?php echo $d;?></td>
						<td><?php echo $e;?></td>
						
						<td><a href="passengerdelete.php?s=<?php echo $a;?>"><img src="image/delete.png" width="30px" height="30px"> </a></td>
						</tr>
						<?php
						$c++;
						}
						?>
					</tbody>
                    <tfoot>
                        <tr>
						<th>PassengerId</th>
						<th>Name</th>
                        <th>Age</th>
                        <th>Occupation</th>
						<th>Phoneno</th>
						<th>Delete</th>
                      </tr>
                    </tfoot>
					
                  </table>
				  <div class="box-footer" align="center">
                     <form method="POST" ><input type="submit" class="btn btn-primary" onclick="return show();" value="Booked" name="Booked"></form>
					 <?php
					 if(isset($_POST['Booked']))
					 {
						$pnr=$_GET['pnr'];
						$jd=$_GET['d'];
						$t=$_GET['t'];
						$f=$_GET['f'];
						$c=$_GET['c'];
						$tid=$_GET['tid'];
						date_default_timezone_set("Asia/kolkata");
						$bd=date('Y-m-d H:i:s');
						$uid=$_SESSION['email'];
						
						$querypss="select * from passenger where pnr='$pnr'";
						$res=mysqli_query($conn,$querypss);
							$f1=0;
						while($row=mysqli_fetch_assoc($res))
						{
							$pid=$row['passengerid'];
							$querygetb="select * from boggies where trainid='$tid' and class='$c'";
							$resb=mysqli_query($conn,$querygetb);
							while($rowb=mysqli_fetch_assoc($resb))
							{
								$bn=$rowb['boggiesname'];
								$sn=$rowb['noofseat'];
								$queryseatcount="select * from booking where trainid='$tid' and journeydate='$jd' and boggiesname='$bn'";
								$resseatcount=mysqli_query($conn,$queryseatcount);
								$rseatcount=mysqli_num_rows($resseatcount);
								
							}
							$bg=$bn;
							$queryseat="select * from booking where trainid='$tid' and journeydate='$jd' and boggiesname='$bg' order by seatno desc";
							$resseatcount=mysqli_query($conn,$queryseatcount);
							$rowseatc=mysqli_num_rows($resseatcount);
							if($rowseatc==0)
							{
								$sn=1;
							}
							else
							{
							$rowseat=mysqli_fetch_assoc($resseatcount);
							$sn=$rowseatc+1;
							}
							
							$queryseatcount="select * from booking where trainid='$tid' and class='$c' and journeydate='$jd'";
							$resseatcount=mysqli_query($conn,$queryseatcount);
							$rowcount=mysqli_num_rows($resseatcount);
							echo"<script> alert('$rowcount');</script>";
							$sqlseat="select sum(noofseat) as nos from boggies where trainid='$tid' and class='$c'";
							$resseat=mysqli_query($conn,$sqlseat);
							$rowseat=mysqli_fetch_assoc($resseat);
						
							$seat=$rowseat['nos'];
						
							echo"<script> alert('$seat');</script>";
							if($rowcount<$seat)
							{
								$queryinsert="insert into booking values('','$pnr','$tid','$uid','$pid','$bg','$sn','$c','$t','$f','$bd','$jd','confirm')"; 
								if(mysqli_query($conn,$queryinsert))
								{
									echo"<script> alert('data inserted');</script>";
									$f1=1;
								}
								else
								{
									$f1=0;
								}
							}
							
							else
								{
									$queryinsert="insert into booking values('','$pnr','$tid','$uid','$pid','$bg','','$c','$t','$f','$bd','$jd','waiting')"; 
								if(mysqli_query($conn,$queryinsert))
								{
									echo"<script> alert('data inserted');</script>";
									$f1=1;
								}
								else
								{
									$f1=0;
								}
								}
								
							
						}
						if(	$f1==1)
						{
						
						$pnr=$_GET['pnr'];
						$t=$_GET['t'];
						$f=$_GET['f'];
						$c=$_GET['c'];
						$querychild="select * from passenger where pnr='$pnr' and age<=12";
						$resagecount=mysqli_query($conn,$querychild);
						$noofch=mysqli_num_rows($resagecount);
						$queryadult="select * from passenger where pnr='$pnr' and age>12";
						$resagecount1=mysqli_query($conn,$queryadult);
						$noofad=mysqli_num_rows($resagecount1);
						$queryselect="select abs(r1.km-r2.km) as km from stationinroute r1,stationinroute r2 where r1.routeid=r2.routeid and r1.stationname='$f' and r2.stationname='$t'";
	                    $res=mysqli_query($conn,$queryselect);
	                    $row=mysqli_fetch_assoc($res);
						$km=$row['km'];
						if($c=="AC")
						{
							$r=5;
						}
						else
						{
							$r=2;
						}
						
						$p=$km*($r/2)*$noofch+$km*$r*$noofad;
						date_default_timezone_set("Asia/kolkata");
						$dt=date('Y-m-d H:i:s');
						$queryinsert1="insert into trainaccount values('','$tid','$f','$t','$noofad','$noofch','$p','$c','$pnr','$dt','online')";
						if(mysqli_query($conn,$queryinsert1))
						{
							echo"<script> alert('Booking Complete');window.location.href='trainpayment.php?pnr=".$pnr."'</script>";
						}
						else
						{
						echo"<script> alert('data not inserted');<script>";
						}
						
						}
						
					 }
						?>
                  </div>
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