<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="<?php echo $ServerRoot;?>/css/frontPage.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
	<script type="text/javascript" src="<?php echo $ServerRoot;?>/javascript/javascript.js"></script>
</head>
<body>
	<div class="container">
		<center>
			<h1 class="logo">
				<span class="sale">Sale</span><span class="project">Project</span>
			</h1>
		</center>
		<h2>Please Login</h2>
		<hr>
		<form id="myFormLogin" action="postLogin.php" method="post" name="loginForm">
			<b>Email or Username</b>
			<span id="requiredLoginEmail" class="tooltip">Required</span><br>
			<input class="formValidation" type="text" name="email" oninput="inputValid('email', 'requiredLoginEmail')">
			<br>
			
			<b>Password</b>
			<span id="requiredLoginPassword" class="tooltip pass">Required</span><br>
			<input class="formValidation" type="password" name="password" oninput="inputValid('password', 'requiredLoginPassword')">
			<br>
			<br>
			<input type="submit" value="LOGIN" onclick="validationLoginButton(event)">
		</form>
		<br><br>
		<p><b>Don't have an account yet? Register <a class="btnHere" href="<?php echo $ServerRoot;?>/getRegister.php">here</a></b></p>
	</div>
	

</body>
</html>