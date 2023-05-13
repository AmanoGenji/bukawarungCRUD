<?php 
 	session_start();
 	include 'db.php'; 	
 	if ($_SESSION['status_login'] != true) {
 		echo '<script>window.location="login.php"</script>';
  	}
 ?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="with=device-width, initial-scale=1">
	<title> Warung Jual Beli</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>

<!-- Header -->

<header>
	<div class="container">
		<h1><a href="dasboard.php">Warung Jual Beli</a></h1>
		<ul>
			<li><a href="dasboard.php">Dashboard</a></li>
			<li><a href="profil.php">profil</a></li>
			<li><a href="data-kategori.php">Data Kategori</a></li>
			<li><a href="data-Produk.php">Data Produk</a></li>
			<li><a href="keluar.php">Keluar</a></li>
		</ul>
	</div>
</header>

<!-- Content -->

<div class="section">
	<div class="container">
		<h3>Tambah kategori</h3>
		<div class="box">
			<form action="" method="POST">
				<input type="text" name="User" placeholder="Nama Pembeli" class="input-contol" required>
				<input type="email" name="Email" placeholder="Email" class="input-contol" required>
				<input type="text" name="Nama" placeholder="Nama Kategori" class="input-contol" required>
				<input type="number" name="Harga" placeholder="Harga Barang" class="input-contol" required>
				<input type="number" name="Jumlah" placeholder="jumlah Barang" class="input-contol" required>
				<input type="submit" name="submit" value="submit" class="btn">
			</form>
			<?php 
				if (isset($_POST['submit'])) {
					$user = ucwords($_POST['User']);
					$email = ucwords($_POST['Email']);
					$nama = ucwords($_POST['Nama']);
					$harga = ucwords($_POST['Harga']);
					$jumlah = ucwords($_POST['Jumlah']);					
					$h = ucwords($_POST['Jumlah']) * ucwords($_POST['Harga']);

                    $insert = mysqli_query($conn, "INSERT INTO tb_category VALUES(null,'".$user."','".$email."','".$nama."','".$harga."','".$jumlah."','".$h."')");

					if ($insert) {
						echo '<script>alert("Data Telah Ditambahkan")</script>';
						echo '<script>window.location="data-kategori.php")</script>';
					}else{
						echo "gagal",mysqli_error($conn);
					}
				}


			 ?>
		</div>
	</div>
</div>

<!-- Footer -->
	<div class="container">
		<small>Copyright 2023 - Warung 2023</small>
	</div>
</body>
</html>