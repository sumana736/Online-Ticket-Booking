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
function show()
{
	pas=frm.pas.value;
	repas=frm.repas.value;
	if(repas!=pas)
	{
	alert("password not matched");
	frm.pas.focus();
	return false;
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
                      <label for="exampleInputname">Food category</label>
                      <input type="text" class="form-control" id="exampleInputname" placeholder="Enter Name" name="food" required>
                    </div>
					
					
                    
					
                      
					

                  <div class="box-footer">
                    <center><input type="submit" class="btn btn-primary" onclick="return show();" value="Add"  name="btn"></center>
                  </div>
                </form>
				<?php
	 
 
		if(isset($_POST["btn"]))
		{
			$b=$_POST['food'];
			$queryinsert="insert into foodcategory values('','$b')";
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
                        <th>Category name</th>
						 <th>Edit</th>
						<th>Delete</th>
	                   
                      </tr>
                    </thead>
                    <tbody>
		
					
<?php
						$c=1;
						$queryselect="select * from foodcategory";
						$res=mysqli_query($conn,$queryselect);
						while($row=mysqli_fetch_assoc($res))
						{
							$a=$row['categoryid'];
							$x=$row['categoryname'];
						
							?>
						
						<tr>
						<td><?php echo $c;?></td>
						<td><?php echo $x;?></td>
						<td><a href="foodcategoryedit.php?s=<?php echo $a;?>"> <img src="image/plusimage.png" width="30px" height="30px"> </a></td>
						<td><a href="foodcategorydelete.php?s=<?php echo $a;?>"> <img src="image/deleteimage.png" width="30px" height="30px"> </a></td>
						</tr>
						<?php
						
						$c++;	
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

   