<html>
<head>
	<title>Prefilling</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="text" name="nama" value="<?php echo isset($_POST['nama'])?$_POST['nama']: ''; ?>"><br>
		<input type="submit" value="OK">
	</form>

	<?php 
	if (isset($_POST['nama'])) {
		echo 'Hallo '. $_POST['nama'];
	}
	 ?>

</body>
</html>