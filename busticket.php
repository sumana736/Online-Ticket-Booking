<?php
	$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
	if(!$conn)
	{
		echo mysqli_error();	
	}
	$bookingnumber=$_GET['bkn'];
	
?>
 <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>    
    <!-- FontAwesome 4.3.0 -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 -->
  
    <!-- jvectormap -->

<body onload="window.print()">
<br>
<br>
	  <p><center><u>Electronic Reservation Slip (ERS)</u>-Normal User</center></p>
	  
	
<?php
$queryselect2="select * from busbooking where bkn='$bookingnumber'";
$res2=mysqli_query($conn,$queryselect2);
while($row2=mysqli_fetch_assoc($res2))
{
	
	$jd=$row2['journeydate'];
	$pid=$row2['passengerid'];
	$froms=$row2['froms'];
	$tos=$row2['tos'];
	$bid=$row2['busid'];
	$bd=$row2['bookingdate'];
	$c=$row2['bustype'];
}
?>

<?php
$queryselect3="select * from addbus where busid='$bid'";
$res3=mysqli_query($conn,$queryselect3);
while($row3=mysqli_fetch_assoc($res3))
{
	$bn=$row3['busno'];
	$bnm=$row3['busname'];

}
?>
<?php
	
	$queryselect="select abs(r1.km-r2.km) as km from bustoroute r1,bustoroute r2 where r1.busrouteid=r2.busrouteid and r1.stopagename='$froms' and r2.stopagename='$tos'";
	$res=mysqli_query($conn,$queryselect);
	$row=mysqli_fetch_assoc($res);
    $querychild="select * from buspassenger where bkn='$bookingnumber' and age<=12";
	$resagecount=mysqli_query($conn,$querychild);
	$noofch=mysqli_num_rows($resagecount);
	$queryadult="select * from buspassenger where bkn='$bookingnumber' and age>12";
	$resagecount1=mysqli_query($conn,$queryadult);
	$noofad=mysqli_num_rows($resagecount1);
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
	
	

$pr=0;

?>



 



<!-- Right side column. Contains the navbar and content of the page -->
      <div class="container">
        <!-- Content Header (Page header) -->
        
        <!-- Main content -->
      
          <div class="row">
		  <br>
		  <br>
		  <table width="1200px" height="50px">
		  <tr><th>Booked from</th><th><font color='red'>Boarding At</font></th><th>To</th></tr>
		  <tr><td><?php echo $froms;?></td><td><?php echo $froms;?></td><td><?php echo $tos;?></td></tr>
		  <tr><td>Start Date*<?php echo $jd;?></td><td>Departure*<?php echo $jd;?></td><td>Arrival*<?php echo $jd;?></td></tr>
		  </table>
		  <hr>
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
			  <table width="1200px" height="50px">
			  <tr><th>PNR</th><th>Bus No/Name</th><th>Class</th></tr>
			  <tr><td><?php echo $bookingnumber;?></td><td><?php echo $bn;?>/<?php echo $bnm;?></td><td><?php echo $c;?></td></tr>
			  <tr><th></th><th>Distance</th><th>Booking Date</th></tr>
			  <tr><td></td><td><?php echo $km;?>km</td><td><?php echo $bd;?></td></tr>
			  </table>
             <hr>
			   
			   
			   <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Sl. No.</th>
                        <th>Passenger Name</th>
                        <th>Age</th>
                        <th>Occupation</th>
                        <th>Phone No</th>
			             
                      </tr>
                    </thead>
                    <tbody>
		
	<?php
	$s=1;
	$queryselect="select * from buspassenger where bkn='$bookingnumber'";
	$res=mysqli_query($conn,$queryselect);
	while($row=mysqli_fetch_assoc($res))
	{
		
		$b=$row['name'];
		$c=$row['age'];
		$d=$row['occupation'];
		$e=$row['phoneno'];
		$g=$row['bkn'];
	?>
<tr>
	<td><?php echo $s;?></td>
	<td><?php echo $b;?></td>
	<td><?php echo $c;?></td>
	<td><?php echo $d;?></td>
	<td><?php echo $e;?></td>

</tr>
<?php
$s++;
	}
?>
					
					
                                     
					</tbody>
					<tfoot>
                      <tr>
                        <th>PassengerId</th>
                        <th>Passenger Name</th>
                        <th>Age</th>
                        <th>Occupation</th>
                        <th>Phone No</th>
			             
                      </tr>
                    </tfoot>
                  </table>
                 <!-- /.box -->
				 <br>
				 <br>
				 <p>Payment Bill</p>
				  <?php
						
						$queryselect=" select * from buspassenger where bkn=$bookingnumber";
						$res=mysqli_query($conn,$queryselect);
						$rc=mysqli_num_rows($res);
							
					?>
				 Total Bill=<?php echo $p;?>			
			
			  </div>
</div>
	
   </div><!-- /.box-body -->
   
  </body>
</html>