<?php 
include('topnav.php');
?>
<?php
include('sidenav.php');
?>
<?php
include('dbconnect.php');
?>
<head>
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
       
            <div class="col-md-12">
              
              <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Quick Example</h3>
                </div>
              
                <form role="form" name="frm" method="post"enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
					<label for="exampleInputName1" >Food Category</label>
					<select class="form-control" id="food"   name="category" required onclick="getfoodsubcategory(this.value);">
					  
								<option value="">Select Food Category</option>
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
					<label for="exampleInputName1" >Food Sub Category</label>
                      <select class="form-control" id="subfood"   name="subcategory" required>
					
							<option>Select Food subcategory</option>
						
							
						
	
						</select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Enter Food Name</label>
                      <input type="text" class="form-control" id="exampleInputstationname" placeholder="Enter Food Name" name="foodname" required>
                    </div>
                    <div class="form-group">
					<label for="exampleInputName1" >Food Type</label>
                      <select class="form-control" id="foodtype"   name="foodtype" required>
					  
								<option value="">Select Food Category</option>
							<option>veg</option>
							<option>non veg</option>
						</select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Price</label>
                      <input type="text" class="form-control" id="price" placeholder="Enter Price" name="price" required>
                    </div>
					
                      
					

                  <div class="box-footer">
                    <center><input type="submit" class="btn btn-primary" onclick="return show();" value="Add"  name="btn"></center>
                  </div>
                </form>
				<?php
	 
 
		if(isset($_POST["btn"]))
		{
			$a=$_POST['category'];
			$b=$_POST['subcategory'];
			$c=$_POST['foodname'];
			$d=$_POST['price'];
			$queryinsert="insert into food values('','$a','$b','$c','$d')";
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
			  </div>
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Table With Full Features</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sl.No</th>
                        <th>Category</th>
                        <th>Sub category</th>
                        <th>Food name</th>
						<th>Price</th>
						<th>Edit</th>
						<th>Delete</th>
	                   
                      </tr>
                    </thead>
                    <tbody>
		
					
<?php
						$c1=1;
						$queryselect="select * from food";
						$res=mysqli_query($conn,$queryselect);
						while($row=mysqli_fetch_assoc($res))
						{
							$c=$row['foodid'];
							$a=$row['category'];
						    $b=$row['foodsubcategory'];
							$d=$row['foodname'];
							$e=$row['price'];
							?>
						
						<tr>
						<td><?php echo $c1;?></td>
						<td><?php echo $a;?></td>
						<td><?php echo $b;?></td>
						<td><?php echo $d;?></td>
						<td><?php echo $e;?></td>
						<td><a href="foodedit.php?s=<?php echo $c;?>"> <img src="image/plusimage.png" width="30px" height="30px"> </a></td>
						<td><a href="fooddelete.php?s=<?php echo $c;?>"> <img src="image/deleteimage.png" width="30px" height="30px"> </a></td>
						</tr>
						<?php
						$c1++;	
						}
					?>
                                     
					</tbody>
					<tfoot>
                      <tr>
                        <th>Sl.No</th>
                        <th>Category name</th>
						 <th>Edit</th>
						<th>Delete</th>
	                   
                      </tr>
                    </tfoot>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box --> 
            </div>
		
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

   