<?php

   include ('code.php');
   $obj = new image();

    if(isset($_POST['login']))
    {  
     
     $user = $obj->Login($_POST);  
      if ($user) 
      {  
         echo "<script>
         alert('Login Successful');
         window.location.href='add.php';
         </script>";
         // $_SESSION['username'];
         // $_SESSION['id'];
      } 
      else 
       {  
            // Registration Failed  
            echo "<script>alert('Emailid / Password Not Match')</script>";  
       } 
     }
   

?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	 <script src="https://cdn.tailwindcss.com"></script>
	 <link rel="stylesheet" type="text/css" href="style.css">
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
		<h1>Login Your Account</h1>
		<form method="post" action="">
		<p>Email</p>
		<input type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="email">
        <p>Password</p>
		<input type="Password" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-mdfocus:placeholder-gray-500focus:bg-white focus:border-gray-600 focus:outline-none" name="password">
		<p>Forget Password?</p>
		<button class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block  hover:text-white hover:bg-black" name="login"> Login</button>       
	</div>
  </div>
</form>



</body>
<html>
