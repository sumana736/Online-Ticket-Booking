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
                      <label for="exampleInputname">Admin Name</label>
                      <input type="text" class="form-control" id="exampleInputname" placeholder="Enter Name" name="n" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" name="e" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputphno">Phone Number</label>
                      <input type="text" class="form-control" id="exampleInputphno" placeholder="Enter Phone Number" pattern="[0-9]{10}" name="p"  title="only 10 DIGIT" required>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputAdd">Address</label>
                      <input type="text" class="form-control" id="exampleInputAdd" placeholder="Enter Address"  name="add" required>
                    </div>
					<div class="form-group">
                      <label for="exampleInputpassword">Password</label>
                    </div>
                      <input type="password" class="form-control" id="exampleInputPassword" placeholder="Enter Password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}' name="pas" title=" enter the password properly contain upper case charecter lowercase charecter, digit,symbol" required> 
					<div class="form-group">
                      <label for="exampleInputPassword1">re-Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" pattern='(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}' name="repas" title="enter the password properly contain upper case charecter lowercase charecter, digit,symbol" required> 
					<div class="form-group">
                    </div>
                    <div class="form-group">
                      
                      <input type="file" name="image1" required>
                     
                    </div>
                    
                  </div>

                  <div class="box-footer">
                    <center><input type="submit" class="btn btn-primary" onclick="return show();" value="Register"  name="btn"></center>
                  </div>
                </form>
				<?php
	 function getExtension($str) {
         $i = strrpos($str,".");
         if (!$i) { return ""; }
         $l = strlen($str) - $i;
         $ext = substr($str,$i+1,$l);
         return $ext;
 }
		if(isset($_POST["btn"]))
		{
			$a=$_POST["n"];
			$b=$_POST["e"];
			$c=$_POST["p"];
			$d=$_POST["add"];
			$e=$_POST["pas"];
			$image=$_FILES['image1'];
 	
			if ($image) 
			{
 	
				$filename = stripslashes($_FILES['image1']['name']);
				$extension = getExtension($filename);
				$extension = strtolower($extension);
 	
				if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") && ($extension != "gif") && ($extension != "bmp")) 
				{
		
					echo '<h1>Unknown extension!</h1>';
					$errors=1;
				}
				else
				{

				$image_name=time().'.'.$extension;

				$newname="adminupload/".$image_name;

				$copied = copy($_FILES['image1']['tmp_name'], $newname);
				if (!$copied) 
				{
					echo '<h1>Copy unsuccessfull!</h1>';
				$errors=1;
			}}}
				
				
				$queryinsert="insert into admin values('','$a','$b','$c','$d','$e','$image_name')";
				if(mysqli_query($conn,$queryinsert))
				{
					echo"<script> alert('data inserted');</alert>";
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
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone.No</th>
                        <th>Address</th>
						
						<th>Image</th>
						 <th>Edit</th>
						<th>Delete</th>
	                   
                      </tr>
                    </thead>
                    <tbody>
		
					<?php
	$queryselect="select * from admin";
	$res=mysqli_query($conn,$queryselect);
	while($row=mysqli_fetch_assoc($res))
	{
		$a=$row['aid'];
		$b=$row['name'];
		$c=$row['email'];
		$d=$row['phoneno'];
		$e=$row['address'];
		
		$g=$row['image'];
		?>
<tr>
	<td><?php echo $a;?></td>
	<td><?php echo $b;?></td>
	<td><?php echo $c;?></td>
	<td><?php echo $d;?></td>
	<td><?php echo $e;?></td>
	
	<td><img src="adminupload/<?php echo $g;?>" width="100px" height="100px"></td>
	<td><a href="adminedit.php?e=<?php echo $a;?>"><img src="img/edit.png" width="30px" height="30px"></a></td>
	<td><a href="deleteadmin.php?e=<?php echo $a;?>"><img src="
	width="30px" height="30px"></a></td>
</tr>
<?php
	}
?>
					
					
                                     
					</tbody>
					<tfoot>
                      <tr>
                        <th>Sl.No</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone.No</th>
                        <th>Address</th>
					
						<th>Image</th>
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

   