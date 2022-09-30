<?php

include('code.php');
$obj = new image();

if (!empty($_POST['log'])) {
  $user = $obj->logout($_POST);
}

if (isset($_REQUEST['didd'])) {
  $id = $obj->delete($_REQUEST['didd']);
}

?>

<!DOCTYPE html>
<html>

<head>
  <title>Profile page</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
  <link rel="stylesheet" type="text/css" href="st1.css">
</head>

<body>
  <!-- header div -->
  <p class="text">Welcome to my profile</p>
  <div class="bar">
    <!--  // header inner div -->
    <div class="bar1">
      <p class="name">Hi <?php print_r($_SESSION['name']); ?>'s here
        <a href="add.php" class="back">Go Back</a>
      </p>
    </div>
  </div>
  <!--   main div for display images -->
  <div class="main2">
    <!-- // center div -->
    <div class="main3">
      <?php
      $uid = $_SESSION['uid'];
      $row = $obj->privatepost($uid);
      if (isset($row)) {
        foreach ($row as $row1) { ?>
          <!-- // inner small div for posts -->
          <div class="main4">
            <img src="photos/<?php echo $row1['image'] ?>" style="width: 200px; height: 200px;" <?php echo $row1['image'] ?>>
            <!-- //div for add content -->

            <div class="main5"><?php echo $row1['title'] ?></div>
            <form method="post" action="" enctype="multipart/form-data">
              <input type="submit" name="add" class="bg-gray-800 text-white rounded-lg px-6 hover:text-white hover:bg-black, fav" value="add to favourites" />
            </form>
            <a href="add.php?didd=<?php echo $row1['id'] ?>"><i class="fa-solid fa-trash" style=" margin: 10px 10px;"></i></a>
          </div>
      <?php }
      } ?>
    </div>
  </div>
</body>

</html>