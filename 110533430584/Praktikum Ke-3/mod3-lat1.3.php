<html>
<head>
	<title>Identifikasi Metode</title>
</head>
<body>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="get">
		<input type="text" name="nama"><br>
		<input type="submit" value="OK">
	</form>

	<?php 
	if (isset($_REQUEST['nama'])) {
		echo 'Metode yang digunakan adalah '. $_SERVER['REQUEST_METHOD'];
	}
	 ?>

</body>
</html>