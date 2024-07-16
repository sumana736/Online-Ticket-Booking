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
<script>
function getstation(str) {
  if (str.length == 0) {
    document.getElementById("station").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("station1").innerHTML = this.responseText;
		document.getElementById("station2").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "getstation.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
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
                  <h3 class="box-title">Add Train</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" name="frm" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="exampleInputName"> Train Name </label>
                      <input type="text" class="form-control" id="exampleInputName" placeholder="Enter train name" name="name" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputTrainno"> Train no </label>
                      <input type="text" class="form-control" id="exampleInputNumber1" placeholder="Enter train no" name="trno" required>
                    </div>
					<div class="form-group">
                    <label for="exampleInputroute"> route </label>
					<select class="form-control" onchange="getstation(this.value);" name="route">
						<option> select route </option>
					<?php
							$queryselect="select * from route";
							
								$res=mysqli_query($conn,$queryselect);
								while($row=mysqli_fetch_assoc($res))
								{
									$a=$row['routename'];
							?>
							<option value="<?php echo $row['routeid'];?>"><?php echo $a;?></option>
							<?php
								}
							?>
					</select>
					</div>
					<div class="form-group">
                    <label for="exampleInputEmail1"> type </label>
					<select class="form-control" name="type">
						<option>select type</option>
							<option>Express</option>
							<option>Local</option>
							
					</select>
					</div>
					<div class="form-group">
                    <label for="exampleInputEmail1"> Start station </label>
                    <select class="form-control" id="station1" name="station1">
						<option>select station</option>
					</select>
					</div>
					<div class="form-group">
                    <label for="exampleInputEmail1"> End station </label>
                    <select class="form-control" id="station2" name="station2">
						<option>select station</option>
						
					</select>
					</div>
					

                 
                    
                    
                    
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="center">
                  <center><input type="submit" class="btn btn-primary" onclick="return show();" value="Register" name="sub"></center>
                  </div>
                </form>
				<?php
		if(isset($_POST["sub"]))
		{
			$a=$_POST["name"];
			$b=$_POST["trno"];
			$c=$_POST["route"];
			$d=$_POST["type"];
			$e=$_POST["station1"];
			$f=$_POST["station2"];
		
				$queryinsert="insert into addtrain values('','$a','$b','$d','$c','$e','$f')";
				if(mysqli_query($conn,$queryinsert))
				{
					echo"<script> alert('data inserted');</script>";
				}
				else
				{
					echo"data not inserted";
				}
			
		}
			
	?>	
	
				
					
              </div><!-- /.box -->
			  <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add Train</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                       <th>Train Id</th>
                        <th>Train name</th>
                        <th>Train no</th>
                        <th>Type</th>
                        <th>Routeid</th>
						<th>Start Station</th>
						<th>End Station</th>
						<th>Add Time</th>
						<th>Add Day</th>
						<th>Add Boggies</th>
						<th>Delete</th>
                      </tr>
                    </thead>
                    <tbody>
					<?php
							$queryselect="select * from addtrain";
							$res=mysqli_query($conn,$queryselect);
							while($row=mysqli_fetch_assoc($res))
							{	$a=$row['trainid'];
								$b=$row['tname'];
								$c=$row['tno'];
								$d=$row['type'];
								$e=$row['routeid'];
								$f=$row['startstation'];
								$g=$row['endstation'];
								
					?>
							<tr>
							<td><?php echo $a;?></td>
							<td><?php echo $b;?></td>
							<td><?php echo $c;?></td>
							<td><?php echo $d;?></td>
							<td><?php echo $e;?></td>
							<td><?php echo $f;?></td>
							<td><?php echo $g;?></td>
							<td><a href="addtime.php?s=<?php echo $a;?>"><img src= "image\time.png" width="30px" height="30px"></a></td>
							<td><a href="addday.php?s=<?php echo $a;?>"><img src= "image\time.png" width="30px" height="30px"></a></td>
							<td><a href="addboggies.php?s=<?php echo $a;?>"><img src= "image\routelogo.png" width="30px" height="30px"></a></td>
							<td><a href="deletetrain.php?s=<?php echo $a;?>"><img src="image/deleteimage.png" width="30px" height="30px"></a></td>
							</tr>
							<?php
						}

						?>
					
                    </tbody>
                    <tfoot>
                      <tr>
                       <th>Train Id</th>
                        <th>Train name</th>
                        <th>Train no</th>
                        <th>Type</th>
                        <th>Route</th>
						<th>Start Station</th>
						<th>End Station</th>
						<th>Add Time</th>
						<th>Add Day</th>
						<th>Add Boggie</th>
						<th>Delete</th>
                      </tr>
                    </tfoot>
                  </table>
				 
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  </div><!--/.col (left) -->
			  <!-- right column -->
			  
			  
			
			

			
			
           <!--/.col (right) -->
          </div>   <!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
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