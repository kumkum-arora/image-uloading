<!-- upload image page -->
<?php
include('code.php');
$obj = new image();

if (!empty($_POST['save'])) {
	//echo "string";
	$obj->upload($_POST, $_FILES);
}

?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>add image</title>
	<script src="https://cdn.tailwindcss.com"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
	<div class="main">
		<div class="main1">

			<h1>Upload Your Post</h1>
			<form method="post" action="" enctype="multipart/form-data">
				<input type="hidden" name="id" value="<?php echo $row2['id']; ?>">

				<p>Upload Image</p>
				<input type="file" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 focus:placeholder-gray-500 focus:bg-white focus:border-gray-600 focus:outline-none" name="image">

				<p>Add Title</p>
				<input type="text" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-mdfocus:placeholder-gray-500focus:bg-white focus:border-gray-600 focus:outline-none" name="title" class="title">
				<input type="submit" class="mt-3 text-lg font-semibold bg-gray-800 w-full text-white rounded-lg px-6 py-3 block  hover:text-white hover:bg-black" name="save" value="Register">
			</form>
		</div>
	</div>
</body>

</html>