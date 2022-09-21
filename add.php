<?php

include ('code.php');
$obj= new image();

if(isset($_POST['add']))
{
  $obj->favourite($_POST);
}

if(isset($_POST['log']))
 {
    $obj->logout($_POST);
 }

 if(isset($_REQUEST['didd']))
{
    $id=$obj->delete($_REQUEST['didd']);
}

?>

<!DOCTYPE html>
<html>
<head>
	 <title>image display</title>
	 <script src="https://cdn.tailwindcss.com"></script>
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="s1.css">
</head>
<body>
<!-- header div -->
<div class="bar">
   <!--  // header inner div -->
	<div class="bar1">
	<ul>
		<li><a href="login.php">Home</a></li>
		<li><a href="fav.php">Favourites</a></li>
		<button class="button"><a href="login.php?log=1">Logout</a></button>
		<a href="upload.php" class="button2">Upload_image</a>	
	</ul>
	</div>
</div>
 <!--   main div for display images -->
	<div class="main2">
	<!-- // center div -->
	<div class="main3">

     <?php 
      $row=$obj->displayData($_POST); 
      foreach ($row as $row1) 
      { ?>

      	<!-- // inner small div for posts -->

      	<div class="main4">
      	<img src="photos/<?php echo $row1['image']?>"style="width: 200px; height: 200px;"<?php echo $row1['image']?>>
      	<!-- //div for add content -->

      	<div class="main5"><?php echo $row1['title']?></div>
    <form method="post" action="" enctype="multipart/form-data">
        <input type="submit" name="add" class="fav" value="add to favourites"/>
        <!-- <a href="fav.php" name="add" class="fav">add to favourites</a> -->
        <i class="fa-solid fa-eye" style="float: right; margin: 10px 10px;"></i>
    </form>
    <a href="add.php?didd=<?php echo $row1['id']?>"><i class="fa-solid fa-trash"style=" margin: 10px 10px;"></i></a>
   </div>
  <?php } ?>
</div>
      </div>
</body>
</html>