<html>
<head>
	<title>Studi Kasus: Preselecting pada Seleksi</title>
</head>
<body>
	<h2>Sistem Informasi Nomor HP mahasiswa PTI off.C</h2>
	<strong>Nama Mahasiswa:</strong><br>
	<em>Silakan pilih nama mahasiswa untuk menampilkan nomor hp</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<select name="mahasiswa">
			<option value="pio" 
			<?php if (isset($_POST['mahasiswa']) && $_POST['mahasiswa']=='pio') {
				echo "selected";
			} ?>
			>Pio Arfianova</option>
			<option value="farouq" <?php if (isset($_POST['mahasiswa'])&&$_POST['mahasiswa']=='farouq') {
				echo "selected";
			} ?>>Muhammad Farouq A.</option>
			<option value="rizky" 
			<?php if (isset($_POST['mahasiswa'])&&$_POST['mahasiswa']=='rizky') {
				echo "selected";
			} ?>
			>Rizky Syabana</option>
			<option value="rachmat" 
			<?php if (isset($_POST['mahasiswa'])&&$_POST['mahasiswa']=='rachmat') {
				echo "selected";
			} ?>
			>Rachmat Santoso</option>
			<option value="bagas" 
			<?php if (isset($_POST['mahasiswa'])&&$_POST['mahasiswa']=='bagas') {
				echo "selected";
			} ?>
			>Aditya Bagas F.</option>
		</select>
		<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['mahasiswa'])) {
		switch ($_POST['mahasiswa']) {
			case 'pio':
				echo "<div id='nilai'>Nomor HP Pio Arfianova:085736693232</div>";
				break;

			case 'farouq':
				echo "<div id='nilai'>Nomor HP M. Farouq A.:08573xxxxxxx </div>";
				break;

			case 'syabana':
				echo "<div id='nilai'>Nomor HP Rizky Syabana:085xxxxxxxxx</div>";
				break;

			case 'rachmat':
				echo "<div id='nilai'>Nomor HP Rachmat Santoso:085xxxxxxxxx</div>";
				break;

			case 'bagas':
				echo "<div id='nilai'>Nomor HP Adityas Bagas F.:085xxxxxxxxx</div>";
				break;	
			default:
				# code...
				break;
		}
	}
	 ?>

</body>
</html>