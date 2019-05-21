<!DOCTYPE html>
<html>
<head>
	<title>Tugas Pemrograman Web</title>
</head>
<body bgcolor="f7fe00"><center>
	<?php
	
	$nama="";
	$NIM="";
	$namaErr = "";
	$NIMErr = "";
	$NIM_valid = true;
	$NIM_valid_msg = "";
	$NIM_max = true;
	if(isset($_POST['submit'])){
		$nama = trim($_POST['nama']);
		$NIM = trim($_POST['NIM']);
		
		
		if(empty($nama)){
			$namaErr = "Nama Tidak boleh Kosong";
		}
		if(empty($NIM)){
			$NIMErr = "NIM Tidak Boleh Kosong";
		}
		if(strlen($_POST['NIM']) !=10){
			$NIM_max = false;
 			$NIMErr="Input NIM harus meiliki 10 angka";
		}
		
		if(!preg_match("/^[0-9]*$/",$NIM)){
			$NIM_valid = false;
			$NIM_valid_msg = "Hanya Boleh Angka, dan tidak boleh menggunakan spasi";
		}
	}
	
?>
 
<h1>Welcome In WEB</h1>
<h2>Masukkan data anda Untuk Masuk</h2>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	Nama : <input type="text" name="nama" value="<?php echo $nama; ?>">
		<?php echo $namaErr; ?><br>
	NIM : <input type="text" name="NIM" value="<?php echo $NIM; ?>">
		<?php echo $NIMErr.$NIM_valid_msg; ?>
		<br>
	<input type="submit" name="submit" value="Register">
</form>

<?php

		if( !empty($nama) and !empty($NIM) and $NIM_valid and $NIM_max){
			echo "<br>Data Yang Anda Msukan Benar.<br>";
			echo"<h2>Selamat Datang</h2>";echo$nama . "<br>" . $NIM;
		}
?>
</center>
</body>
</html>