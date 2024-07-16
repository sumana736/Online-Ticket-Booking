<?php 
include('usertopnav.php');
?>
<?php
include('usersidenav.php');
$email=$_SESSION['email'];
?>
<?php
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
$pnr=$_GET['pnr'];
?>
<script>
function getfoodsubcategory(str) {
	if (str.length == 0) {
    document.getElementById("subfood").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("subfood").innerHTML = this.responseText;
		
      }
    };
    xmlhttp.open("GET", "getfood.php?q="+ str, true);
    xmlhttp.send();
  }
}
function getfoodname(str1,str2) {
	if (str1.length == 0) {
    document.getElementById("foodname").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("foodname").innerHTML = this.responseText;
		
      }
    };
    xmlhttp.open("GET", "getfooddetails.php?q1="+ str1+"&"+"&q2="+str2, true);
    xmlhttp.send();
  }
}
function getprice(str3,str4,str5) {
	
	if (str3.length == 0) {
    document.getElementById("price").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("price").innerHTML = this.responseText;
		
      }
    };
    xmlhttp.open("GET", "getpricedetails.php?q3="+ str3+"&q4="+str4+"&q5="+str5, true);
    xmlhttp.send();
  }
}
function gettotalprice(str6,str7,str8) {

	if (str6.length == 0) {
    document.getElementById("price1").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("price1").innerHTML = this.responseText;
		
      }
    };
    xmlhttp.open("GET", "gettotalprice.php?q6="+ str6+"&q7="+str7+"&q8="+str8, true);
    xmlhttp.send();
  }
}
</script>
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
					<label for="exampleInputName1" > Food  Category</label>
                      <select class="form-control" id="food"   name="category" required onclick="getfoodsubcategory(this.value);">
					  
								<option value="">Select  Category</option>
								<?php
							$queryselect1="select * from foodcategory";
							
								$res1=mysqli_query($conn,$queryselect1);
								while($row1=mysqli_fetch_assoc($res1))
								{
									$a=$row1['categoryname'];
							?>
							<option value="<?php echo $a;?>"><?php echo $a;?></option>
							<?php
								}
							?>
							
							
						</select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Food Sub category</label>
                     <select class="form-control" id="subfood" name="subcategory" required onclick="getfoodname(this.value);">
					  
								<option value="">Select Sub Category</option>
								
							
							
						</select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Food Name</label>
                     <select class="form-control" id="foodname" name="foodname" required onchange="getprice(document.getElementById('food').value,document.getElementById('subfood').value,this.value);">
					  
								<option value="">Select Food Name</option>
						
							
						</select>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Price</label>
					  <div id="price">
                     <input type="text" class="form-control" id="prc" name="price" required readonly>
					  </div>
								
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputName1"> No of Adult</label>
					  <div id="ad1">
                      <input type="text" class="form-control" id="ad" placeholder="enter the number of adult" name="noofadult" required onkeyup="gettotalprice(document.getElementById('prc').value,this.value,document.getElementById('ch').value);">
					  </div>
					</div>
					<div class="form-group">
                      <label for="exampleInputName1"> No of Child </label>
					  <div id="ch1">
                      <input type="text" class="form-control" id="ch" placeholder="enter the number of child" name="noofchild" required onkeyup="gettotalprice(document.getElementById('prc').value,document.getElementById('ad').value,this.value);">
					  </div>
					</div>
					
					<div class="form-group">
                      <label for="exampleInputEmail1">Total Price</label>
					  <div id="price1">
                     <input type="text" class="form-control" id="price2" name="price2" required disabled>
					  </div>
                    </div>
					
					<div class="form-group">
                      <label for="exampleInputName1">Select Time</label>
                      <select class="form-control" name="time" required>
					  <option>Select</option>
					  <option>Breakfast</option>
					  <option>Lunch</option>
					  <option>Evening Snacks</option>
					  <option>Dinner</option>
					  </select>
                    </div>
					
          
                  </div><!-- /.box-body -->

                  <div class="box-footer" align="center">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="Add" name="add">
                  </div>
                </form>
			<?php

				if(isset($_POST["add"]))
			{
				$a=$_POST["category"];
				$b=$_POST["subcategory"];
				$c=$_POST["foodname"];
				$d=$_POST["noofadult"];
				$e=$_POST["noofchild"];
				$f=$_POST["time"];
			
		
					$queryinsert1="insert into selectfood values('','$pnr','$a','$b','$c','$d','$e','$f')";
					if(mysqli_query($conn,$queryinsert1))
					{
						echo" food add successfully ";
						

					}
					else
					{
						echo" failed ";
					}
			}
			?>
     
              </div><!-- /.box -->
			  </div>
			  </div>
		<div class="box">
                <div class="box-header">
                  <h3 class="box-title">Add Food</h3>
                </div><!-- /.box-header -->
			   <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>SL.No</th>
						<th>PNR</th>
                        <th>Category</th>
                        <th>Sub Category</th>
						<th>Food Name</th>
						<th>No of Adult</th>
						<th>No of child</th>
						<th>Time</th>
						</tr>
                    </thead>
                    <tbody>
		<?php
		

							$queryselect="select * from selectfood where pnr=$pnr";
							$res=mysqli_query($conn,$queryselect);
							$c1=1;
							while($row=mysqli_fetch_assoc($res))
							{	
						
                                $pnr=$row['pnr'];				
								$cat=$row['category'];
								$subcat=$row['subcategory'];
								$fn=$row['foodname'];
								$nad=$row['noofadult'];
								$nch=$row['noofchild'];
								$t=$row['time'];
	
							
								
								
					?>
					<tr>
						<td><?php echo $c1;?></td>
						<td><?php echo $pnr;?></td>
						<td><?php echo $cat;?></td>
						<td><?php echo $subcat;?></td>
						<td><?php echo $fn;?></td>
						<td><?php echo $nad;?></td>
						<td><?php echo $nch;?></td>
						<td><?php echo $t;?></td>
						</tr>
						
							<?php
							$c1++;
							
						}
						

						?>
						
                     
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>SL.No</th>
						<th>PNR</th>
                        <th>Category</th>
                        <th>Sub Category</th>
						<th>Food Name</th>
						<th>No of Adult</th>
						<th>No of child</th>
						<th>Time</th>
						</tr>
                    </tfoot>
					
                  </table>
				
                </div><!-- /.box-body -->
				<div class="box-footer" align="center">
                <form method="POST"><input type="submit" class="btn btn-primary" onclick="return show();" value="Placed Order" name="placedorder"></form>
		<?php	

				if(isset($_POST["placedorder"]))
			{
				$fdbknno=time();
			
				 $querygetb="select * from selectfood where pnr='$pnr'";
				$resb=mysqli_query($conn,$querygetb);
				while($rowb=mysqli_fetch_assoc($resb))
				{
				$oid=$rowb['orderid'];
				$pnr=$rowb['pnr'];
				$cg=$rowb['category'];
				$subcg=$rowb['subcategory'];
				$fdn=$rowb['foodname'];
				$nofad=$rowb['noofadult'];
				$nofch=$rowb['noofchild'];
				$tm=$rowb['time'];
				
				
				$querydelete="delete from selectfood where orderid='$oid'";
				mysqli_query($conn,$querydelete);
				$queryinsert="insert into confirmfoodbooking values('','$fdbknno','$email','$pnr','$cg','$subcg','$fdn','$nofad','$nofch','$tm')";
					if(mysqli_query($conn,$queryinsert))
						{
							
							echo"<script> alert('order placed');</script>";
							
						}
				}
			}
		?>
		
		<div class="box-body">
                
				
                </div><!-- /.box-body -->
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
	
   
  </body>
</html>