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

<script>
function gettrainprice(str,str1,str2,str3,str4) {
	if (str.length == 0) {
    document.getElementById("price").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("price").innerHTML = this.responseText;
		
      }
    };
    xmlhttp.open("GET", "gettrainprice.php?f="+ str+"&t="+ str1+"&noofch="+ str2+"&noofad="+ str3+"&q4="+str4, true);
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
                  <h3 class="box-title"> User Page </h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" name="frm" method="post">
                  <div class="box-body">
				<div class="col-md-6">
                <div class="form-group">
                      <label for="exampleInputName1"> From </label>
                       <input type="text" class="form-control" list="list1" id="ss"  placeholder="Enter station" name="from" required onkeyup="gettrainprice(document.getElementById('ss').value,document.getElementById('ss1').value,document.getElementById('ch').value,document.getElementById('ad').value,document.getElementById('ty').value);">
				<datalist id="list1">
							<option> Select station </option>
							<?php
							$queryselect="select * from stationinroute";
							
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
                </div>
				<div class="col-md-6">
                <div class="form-group">
                      <label for="exampleInputName1"> To </label>
                       <input type="text" class="form-control" list="list1" id="ss1"  placeholder="Enter station" name="to" required onkeyup="gettainprice(document.getElementById('ss').value,document.getElementById('ss1').value,document.getElementById('ch').value,document.getElementById('ad').value,document.getElementById('ty').value);">
					  <datalist id="list1">
							<option> Select Station </option>
							<?php
							$queryselect="select * from stationinroute";
							
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
				</div>
					
				</div><!-- /.box-body -->
				
				<div  class="col-md-6">
					<div class="form-group">
                      <label for="exampleInputName1"> No of Child </label>
                      <input type="text" class="form-control" id="ch" placeholder="enter the number of child" name="noofchild" required onkeyup="gettrainprice(document.getElementById('ss').value,document.getElementById('ss1').value,document.getElementById('ch').value,document.getElementById('ad').value,document.getElementById('ty').value);">
					  
					</div>
				</div>
					<div  class="col-md-6">
					 <div class="form-group">
                        <label for="exampleInputName1"> No of Adult </label>
                        <input type="text" class="form-control" id="ad" placeholder="enter the number of adult" name="noofadult" required onkeyup="gettrainprice(document.getElementById('ss').value,document.getElementById('ss1').value,document.getElementById('ch').value,document.getElementById('ad').value,document.getElementById('ty').value);">
						
					 </div>
					</div>
					
					<div  class="col-md-6">
						<div class="form-group">
							<label for="exampleInputName1" > Type </label>
							
							<select class="form-control" name="type" id="ty" onchange="gettrainprice(document.getElementById('ss').value,document.getElementById('ss1').value,document.getElementById('ch').value,document.getElementById('ad').value,document.getElementById('ty').value);">
								<option value="">select type</option>
								<option value="AC"> AC </option>
								<option value="NON AC">NON AC</option>
							</select>
							
						</div>
					</div>
					
					<div  class="col-md-6">
					<div class="form-group">
                      <label for="exampleInputName1" > Mode </label>
					  
							<select class="form-control" name="mode">
								<option>select mode</option>
								<option> Online </option>
								<option> cash </option>
							</select>
					  
					</div>
					</div>
					
					<div  class="col-md-12">
				     <div class="form-group">
                       <label for="exampleInputName1" > price </label>
					   <div id="price">
                       <input type="text" class="form-control"    placeholder="Enter price" name="price" readonly>
					   </div>
					 </div>
					</div>
					
				

                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="Submit" name="submit">
                  </div>
				  </div><!-- /.box-body -->
                </form>
			<?php
			if(isset($_POST['submit']))
					 {
					
						$f=$_POST["from"];
						$t=$_POST["to"];
						$noofch=$_POST["noofchild"];
						$noofad=$_POST["noofadult"];
						$p=$_POST["price"];
						$c=$_POST["type"];
						$pnr=time();
						$m=$_POST["mode"];
						
						date_default_timezone_set("Asia/kolkata");
						$dt=date('Y-m-d H:i:s');
						$e=$_SESSION['email'];
						
				$queryinsert1="insert into trainaccount values('','$f','$t','$noofch','$noofad','$p','$c','$pnr','$dt','$m')";
				
				if(mysqli_query($conn,$queryinsert1))
				{
					echo"<script> alert('Booking Successful');</script>";
				}
				else
				{
					echo"<script> alert('Booking unsuccessful');</script>";
				}
					
				
					
				
			}	
			?>
     
              </div><!-- /.box -->
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