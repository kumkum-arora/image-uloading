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
	<link rel="stylesheet" type="text/css" href="st1.css">
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
				<p>Privacy</p>
				<select name="privacy" class="text-md block px-3 py-2 rounded-lg w-full bg-white border-2 border-gray-300 placeholder-gray-600 shadow-mdfocus:placeholder-gray-500focus:bg-white focus:border-gray-600 focus:outline-none" aria-label="Default select example">
					<option value="" selected>Select</option>
					<option value="public">Public</option>
					<option value="private">Private</option>
				</select>
				<input type="submit" class="bg-gray-800 hover:bg-black" name="save" value="Register">
			</form>
		</div>
	</div>
</body>

</html>