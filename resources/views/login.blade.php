<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
		<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!--===============================================================================================-->
		<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
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
		<link rel="stylesheet" type="text/css" href="assets/css/util.css">
		<link rel="stylesheet" type="text/css" href="assets/css/main.css">
	<!--===============================================================================================-->
	</head>
	<body>
		
		<div class="limiter">
			<div class="container-login100" style="background-image: url('images/bg-01.jpg');">
				<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
					<form class="login100-form validate-form" action="{{ route('login.auth') }}" method="post">
						@csrf
						<span class="login100-form-title p-b-49">
							Login
						</span>
						<div class="wrap-input100 validate-input m-b-23">
							<span class="label-input100">Email</span>
							<input class="input100" type="email" name="email" id="email" placeholder="Type your email">
							<span class="focus-input100" data-symbol=""><i class="fa-solid fa-user" style="bottom:-42px; position:relative;"></i></span>
						</div>
	
						<div class="wrap-input100 validate-input">
							<span class="label-input100">Password</span>
							<input class="input100" type="password" name="password" id="password" placeholder="Type your password">
							<span class="focus-input100" data-symbol=""><i class="fa-solid fa-lock" style="position: relative; top:40px;"></i></span>
						</div>
						
						<div class="text-right p-t-8 p-b-31">
							<a href="/">
								Back
							</a>
						</div>
						
						<div class="container-login100-form-btn">
							<div class="wrap-login100-form-btn">
								<div class="login100-form-bgbtn"></div>
								<button class="login100-form-btn" type="submit">Login</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		

</body>
</html>
	