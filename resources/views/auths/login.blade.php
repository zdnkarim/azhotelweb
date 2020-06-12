<!doctype html>
<html lang="en" class="fullscreen-bg">

<head>
	<title>Login | Klorofil - Free Bootstrap Dashboard Template</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

	<!-- WRAPPER -->
	<div id="wrapper">
		<div class="vertical-align-wrap">
			<div class="vertical-align-middle">
				<div class="auth-box ">
					<div class="left">
						<div class="content">
							<div class="header">
							
							</div>
                            <form class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin" action="/postlogin" method="POST">
							<h2 class="w3-center">Login to your account</h2>
								{{csrf_field()}}
								<div class="form-group">
									<div class="w3-row w3-section">
									<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
									<div class="w3-rest">
									<label for="signin-email" class="control-label sr-only">Email</label>
									<input name="email" type="email" class="w3-input w3-border" id="signin-email" placeholder="Email">
								</div>
								<div class="form-group">
									<div class="w3-row w3-section">
									<div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-pencil"></i></div>
									<div class="w3-rest">
									<label for="signin-password" class="control-label sr-only">Password</label>
									<input name="password" type="password" class="w3-input w3-border" id="signin-password" placeholder="Password">
								</div>
								<div class="form-group clearfix">
									<label class="fancy-checkbox element-left">
										<input type="checkbox">
										<span>Remember me</span>
									</label>
								</div>
								<button type="submit" class="w3-button w3-block w3-section w3-blue w3-ripple w3-padding">LOGIN</button>
								
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- END WRAPPER -->
</body>
<div class="w3-container">
<button class="w3-button w3-large w3-yellow"><a href="/home" color="white">Home</a></button>

</html>