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
                      <select class="form-control" id="food"   name="category" required>
					  
								<option value="">Select Food Category</option>
								<?php
							$queryselect1="select * from foodcategory";
							
								$res1=mysqli_query($conn,$queryselect1);
								while($row1=mysqli_fetch_assoc($res1))
								{
									$a=$row1['categoryname'];
							?>
							<option><?php echo $a;?></option>
							<?php
								}
							?>
							
							
						</select>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Food Sub category</label>
                      <input type="text" class="form-control" id="exampleInputstationname" placeholder="Enter Food Sub Category Name" name="subcategory"required>
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
				
		
					$queryinsert="insert into foodsubcategory values('','$a','$b')";
					if(mysqli_query($conn,$queryinsert))
					{
						echo'food add successfully';

					}
					else
					{
						echo'failed !';
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
                        <th>Category</th>
                        <th>Sub Category</th>
						<th>Edit</th>
						<th>Delete</th>
						</tr>
                    </thead>
                    <tbody>
					<?php
			if(isset($_POST["add"]))
			{
				
				$a=$_POST["category"];
				$b=$_POST["subcategory"];
				
			$queryinsert="insert into foodsubcategory values('','$a','$b')";
				if(mysqli_query($conn,$queryinsert))
				{
					echo"<script> alert('data has successfully inserted');</script>";
				}
				else
				{
					echo"<script> alert('data has not successfully inserted');</script>";
				}
			
		}
		
			
	
				
					
				
			
							$queryselect="select * from foodsubcategory ";
							$res=mysqli_query($conn,$queryselect);
							$c1=1;
							while($row=mysqli_fetch_assoc($res))
							{	
                                				
								$b=$row['category'];
								$c=$row['subcategory'];
								$subcatid=$row['subcategoryid'];
	
							
								
								
					?>
					<tr>
						<td><?php echo $c1;?></td>
						
						<td><?php echo $b;?></td>
						<td><?php echo $c;?></td>
						<td><a href="subcategoryedit.php?s=<?php echo $subcatid; ?>"> <img src="image/plusimage.png" width="30px" height="30px"> </a></td>
						<td><a href="subcategorydelete.php?s=<?php echo $subcatid; ?>"> <img src="image/deleteimage.png" width="30px" height="30px"> </a></td>

</tr>
							<?php
							$c1++;
						}
						

						?>
					
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>SL.No</th>
                        <th>Category</th>
                        <th>Sub Category</th>
						<th>Edit</th>
						<th>Delete</th>
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
