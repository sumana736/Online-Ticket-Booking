<html>
<title>Payment</title>
<?php
		$conn=mysqli_connect("localhost","root","","railwayreservationsystem");
			if(!$conn)
			{
				echo mysqli_error();
			}
			$bookingnumber=$_GET['bkn'];
			$selectbkn="select * from busbooking where bkn='$bookingnumber'";
			$bknres=mysqli_query($conn,$selectbkn);
			$rcbkn=mysqli_num_rows($bknres);
		
			
?>

<head>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
	<style>	
	
	
	{
            background-color: #FFCCBC;
        } 
        
        .container{
            margin-top:40px;
            margin-bottom:40px;
        }

        img {
            width: 100%;
        }

        .card-title {
            justify-content: space-between;
            margin-top: 25px;
        }

        .register {
            font-size: 10px;
            position: relative;
            bottom: 5px;
        }

        .cvc {
            width: 2.5em;
            position: absolute;
        }

        input {
            border: none;
            padding-left: 4px;
            background-color: #f7f1f1;
            font-size: 15px;
        }

        .card-body {
            background-color: #f7f1f1;
        }

        .footer {
            background-color: #00BCD4;
            color: white;
        }

        .footer:hover {
            cursor: pointer;
            background-color: #0097A7;
        }

        .numbr {
            border-bottom: 1px solid #c1bcbc;
            padding-bottom: 8px;
        }

        .line2 {
            border-bottom: 1px solid #c1bcbc;
            padding-bottom: 8px;
            padding-left: 0px;
        }

        input.focus,
        input:focus {
            outline: 0;
            box-shadow: none !important;
        }

        .numbr.numbr.hover,
        .numbr:hover {
            border-bottom: 1px solid aqua;
        }

        .line2.hover,
        .line2:hover {
            border-bottom: 1px solid aqua;
        }

        .fa-lock {
            margin-right: 10px;
        }

        .order {
            margin-top: 10px;
        }
</style>
</head>
<body>
<div class='container'>
<form role="form" name="frm" method="post">
        <div class="card mx-auto col-md-5 col-8 mt-3 p-0">
            <h1><center>Payment</center></h1>
			    <img class='mx-auto pic'
                src="90432b485bca1223a442f0ddc03e8f2e.png" height="250px"/>
            <div class="card-title d-flex px-4">
                <p class="item text-muted">Indian<label class="register">&reg;</label> Bus </p>
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

                
				  <?php
						
						$queryselect=" select * from buspassenger where bkn=$bookingnumber";
						$res=mysqli_query($conn,$queryselect);
						$rc=mysqli_num_rows($res);
							
					?>
				 Payment Bill=<?php echo $p;?>	
            </div>
            <div class="card-body">
                <p class="text-muted"><h3><center>Your payment details </center></h3></p>
                <div class="numbr mb-3">
                    <i class=" col-1 fas fa-credit-card text-muted p-0"></i>
                    <input class="col-10 p-0" type="text" placeholder="Card Number" name="card" required>
                </div>
                <div class="line2 col-lg-12 col-12 mb-4">
                    <i class="col-1 far fa-calendar-minus text-muted p-0"></i>
                    <input class="cal col-5 p-0" type="text" placeholder="MM/YY" name="my" required>
                    <i class="col-1 fas fa-lock text-muted"></i>
                    <input class="cvc col-5 p-0" type="text" placeholder="CVC" name="cvc" required>
                </div>
            </div>
            <div class="footer text-center p-0">
                <div class="col-lg-12 col-12 p-0">
                    <input type="submit" class="btn btn-primary" onclick="return show();" value="payment" name="pay">
                </div>
            </div>
			</form>
			
        </div>
       <?php
			if(isset($_POST["pay"]))
			{
				$c=$_POST["card"];
				$m=$_POST["my"];
				$v=$_POST["cvc"];
				
					$queryinsert="insert into buspayment values('','$c','$m','$v')";
					if(mysqli_query($conn,$queryinsert))
					{
						echo"<script> alert('payment Complete');window.location.href='busticket.php?bkn=".$bookingnumber."'</script>";

					}
					else
					{
						echo"<script> alert('payment not done');<script>";
					}
			}
		
			?>
    </div>
	
	</body>
</html>

	
	
	
	