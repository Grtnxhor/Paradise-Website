<?php include("functions/init.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Paradise | Portal</title>
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
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/love.css">
<!--===============================================================================================-->

</head>
<body>
	
	<!--  -->
	<div class="simpleslide100">
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg02.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/bg01.jpg');"></div>
		<div class="simpleslide100-item bg-img1" style="background-image: url('images/nus.jpg');"></div>
		
	</div>

	<div class="size1 overlay1">
		<!--  -->
		<div class="w-full flex-w flex-sb-m p-l-65 p-r-80 p-t-22 p-b-125 p-lr-15-sm respon8">
			<div class="wrappic1 m-r-30 m-t-10 m-b-10">
				<a href="#"><img src="images/icons/logo.png" alt="LOGO"></a>
			</div>

<div class="flex-w m-t-10 m-b-10 respon6">
				<p style="color: white;">
					Portal Hotline: 07016169889
				</p>
			</div>
			
		</div>

		<!--  -->
		<div class="flex-c flex-row-rev  p-l-58 p-r-56 respon2 ">
			<!--  -->
			<div class=" wsize2 respon1">
				<h3 class="l1-txt2 p-b-30 respon6 respon7">
					 LOGIN
				</h3>

				<p class="m2-txt1 respon6">
					Enter Valid Login Details Below;
				</p>
<br/>
<div class="row">
		<div class="col-lg-10 col-lg-offset-30 ">

	<?php display_message(); ?>

	<?php validate_user_login(); ?>
								
		</div>
	</div>
				<form class="contact100-form p-t-5 w-full " method="post">
					<div class="wrap-input100  m-lr-auto-lg ">
						<input class="s2-txt1 placeholder0 input100 trans-04" type="text" name="admission" placeholder="Admission No.">
</div>&nbsp;&nbsp;&nbsp;&nbsp;
						<div class="wrap-input100  m-lr-auto-lg">
						<input class="s2-txt1 placeholder0 input100 trans-04" type="password" name="password" placeholder="Password">

						<button class="flex-c-m ab-t-r size4 s1-txt1 hov1 trans-04">
							<i class="fa fa-paper-plane fs-15 cl0"> Login</i>
						</button>
<br/>
<div class=" m-lr-auto-lg flex-c">
         	<a href="#" style="color: white;"><u>Forgot Password?</u></a>
                              
                            </div>	

                       					
					</div>	
					 <br/><br/><br/>
<div style="color: white; display: inline" class=" m-lr-auto-lg flex-l">
         	<p>Paradise Model School © <?php echo date("Y");?>.  Proudly Developed By: <a href="#" style="color: white;"> Abolade Greatness.</a> 
                              
                            </div>	    	
				</form>		
			</div>


			
	</div>



	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script src="js/love.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/moment.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone.min.js"></script>
	<script src="vendor/countdowntime/moment-timezone-with-data.min.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	
<!--===============================================================================================-->
	
<!--===============================================================================================-->
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>