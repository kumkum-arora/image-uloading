<?php
include('code.php');
$obj = new image();

if (isset($_POST['register'])) {
	$obj->insertdata($_POST);
}
?>
<!DOCTYPE html>
<html>

<head>
	<title>Register</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" type="text/css" href="st1.css">
</head>

<body>
	<div class="bar">
		<ul>
			<li><a href="login.php">Login</a></li>
			<li><a href="create.php">Register</a></li>
		</ul>
	</div>
	<div class="main">
		<div class="main1">

			<h1>Register Your Account</h1>
			<form method="post" action="">
				<p>Enter Your Fullname</p>
				<input type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="name">
				<p>Email</p>
				<input type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-mdfocus:placeholder-gray-500focus:bg-white focus:border-gray-600 focus:outline-none" name="email">
				<p>Username</p>
				<input type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="uname">
				<p>Password</p>
				<input type="Password" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="password">
				<p>Already Have an account<a href="login.php"><u> Click here</u></a> for login.</p>
				<button class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block  hover:text-white hover:bg-black" name="register" value="Register">Register</button>
			</form>

		</div>
	</div>
</body>
<html>