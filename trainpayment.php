<html>
<title>Payment</title>
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
                <p class="item text-muted">Indian<label class="register">&reg;</label> Railway</p>
<?php
$queryselect2="select * from booking where pnrno='$pnr'";
$res2=mysqli_query($conn,$queryselect2);
while($row2=mysqli_fetch_assoc($res2))
{
	
	$jd=$row2['journeydate'];
	$pnr=$row2['pnrno'];
	$froms=$row2['froms'];
	$tos=$row2['tos'];
	$tid=$row2['trainid'];
	$bd=$row2['bookingdate'];
	$bn=$row2['boggiesname'];
	$c=$row2['class'];
}
?>
				<?php
	
	$queryselect="select abs(r1.km-r2.km) as km from stationinroute r1,stationinroute r2 where r1.routeid=r2.routeid and r1.stationname='$froms' and r2.stationname='$tos'";
	$res=mysqli_query($conn,$queryselect);
	$row=mysqli_fetch_assoc($res);

	$km=$row['km'];
	
	
	

$pr=0;

?>

				  <?php
						
						$queryselect=" select * from passenger where pnr=$pnr";
						$res=mysqli_query($conn,$queryselect);
						$rc=mysqli_num_rows($res);
							
					?>
				 Total Bill=<?php echo $km*2*$rc;?>		
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
				
					$queryinsert="insert into trainpayment values('','$c','$m','$v')";
					if(mysqli_query($conn,$queryinsert))
					{
						echo"<script> alert('payment Complete');window.location.href='ticket.php?pnr=".$pnr."'</script>";

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

	
	
	
	