<html>
<head>
	<title>Studi Kasus 2: Prefilling pada Checkbox</title>
</head>
<body>
	<h1>Tim Favorit Juara EPL 2013</h1>
	<div id='info'>English Premier League 2013</div>
	<h3>Klub EPL 2013</h3>
	<em>Pilih tim favorit EPL 2013:</em>
	<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
		<input type="checkbox" name="klub[]" value="Chelsea" 
		<?php if (isset($_POST['klub'])) {

			foreach ($_POST['klub'] as $key => $value) {
				if ($value=='Chelsea') {
					echo "checked";
				}
		}
			
		} ?>
		>Chelsea F.C.<br>
		<input type="checkbox" name="klub[]" value="Loserpool" 
		<?php if (isset($_POST['klub'])) {

			foreach ($_POST['klub'] as $key => $value) {
				if ($value=='Loserpool') {
					echo "checked";
				}
		}
			
		} ?>
		>Loserpool<br>
		<input type="checkbox" name="klub[]" value="Swansea City"
		<?php if (isset($_POST['klub'])) {

			foreach ($_POST['klub'] as $key => $value) {
				if ($value=='Swansea City') {
					echo "checked";
				}
		}
			
		} ?>
		>Swansea City<br>
		<input type="checkbox" name="klub[]" value="Man.United"
		<?php if (isset($_POST['klub'])) {

			foreach ($_POST['klub'] as $key => $value) {
				if ($value=='Man.United') {
					echo "checked";
				}
		}
			
		} ?>
		>Man.United<br>
		<input type="submit" value="OK">
	</form>
	<?php 
	if (isset($_POST['klub'])) {
		echo "<div id='pilihan'>Anda memilih kandidat juara EPL 20113 berikut:</div><br/>";
		echo "<ul>";
		foreach ($_POST['klub'] as $key => $value) {
			echo "
			<li>".$value."</li>
			";
		}

		echo "</ul>";
	}
	 ?>

</body>
</html>