<?php 
 	session_start();
 	include 'db.php'; 	
 	if ($_SESSION['status_login'] != true) {
 		echo '<script>window.location="login.php"</script>';
  	}
  	$kategori = mysqli_query($conn, "SELECT * FROM tb_category WHERE categori_id ='".$_GET['id']."' ");
  	$k = mysqli_fetch_object($kategori);

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
		<h3>Edit kategori</h3>
		<div class="box">
			<form action="" method="POST">
				<input type="text" name="User" placeholder="Nama Pembeli" class="input-contol" value="<?php echo $k->nama_pembeli ?>" required>
				<input type="email" name="Email" placeholder="Email" class="input-contol" value="<?php echo $k->email ?>" required>
				<input type="text" name="Nama" placeholder="Nama Kategori" class="input-contol" value="<?php echo $k->categori_name ?>" required>
				<input type="number" name="Harga" placeholder="Harga Barang" class="input-contol" value="<?php echo $k->harga_barang ?>" required>
				<input type="number" name="Jumlah" placeholder="jumlah Barang" class="input-contol" value="<?php echo $k->jumlah_barang ?>" required>
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

					$update = mysqli_query($conn, "UPDATE tb_category SET nama_pembeli = '".$user."' WHERE categori_id = '".$k->categori_id."' ");
                    $update = mysqli_query($conn, "UPDATE tb_category SET email = '".$email."' WHERE categori_id = '".$k->categori_id."' ");
                    $update = mysqli_query($conn, "UPDATE tb_category SET categori_name = '".$nama."' WHERE categori_id = '".$k->categori_id."' ");
					$update = mysqli_query($conn, "UPDATE tb_category SET harga_barang = '".$harga."' WHERE categori_id = '".$k->categori_id."' ");
                    $update = mysqli_query($conn, "UPDATE tb_category SET jumlah_barang = '".$jumlah."' WHERE categori_id = '".$k->categori_id."' ");
                    $update = mysqli_query($conn, "UPDATE tb_category SET total_harga = '".$h."' WHERE categori_id = '".$k->categori_id."' ");


					if ($update) {
						echo '<script>alert("Data Telah Diperbarui")</script>';
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