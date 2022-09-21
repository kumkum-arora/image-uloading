<?php
include ('code.php');
$obj= new image();

?>
<!DOCTYPE html>
<html>
<head>
	<title>image display</title>
	 <script src="https://cdn.tailwindcss.com"></script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
	 <style>
	 	ul{
    display: flex;
    margin-right: 10%;
    }
     ul li{
      color: #212F3D;
      font-weight: bold;
      font-size: 20px;
      padding: 50px 50px;
    }
    .bar1
    {
    	width: 1424px;
    	height: 50px;
    	margin: auto;
    	
    }
    .main2{
    width: 100%;  
    }
    .main3{
    	width: 1424px;
        display: flex;
        flex-wrap: wrap;
        margin: auto;
        flex-direction: row;
        align-items: center;
    }
    .main4{
    	width: 200px;
    	height: 310px;
    	background-color: #eee;
    	margin: 50px 50px 30px 30px;
    }
    .main5{
    	width: 180px;
    	height:40px;
    	margin: 10px 10px;
    	font-weight: bold;
    	text-align: center;
    }
    .fav{
    	border: 1px solid black;
    	margin-left: 10px;
    	padding: 5px;
    	font-size: 14px;
    }
    .fav:hover{
    	background-color: darkgrey;
    }
	 </style>
</head>
<body>
<!-- header div -->
<div class="bar">
   <!--  // header inner div -->
	<div class="bar1">
	<ul>
		<li><a href="add.php">Go Back</a></li>	
	</ul>
	</div>
</div>
 <!--   main div for display images -->
	<div class="main2">
	<!-- // center div -->
	<div class="main3">
     

      </div>
      </div>
</body>
</html>