<?php 
	required_once('dompdf/dompdf_config.inc.php');
	use Dompdf\Dompdf;
 	include 'db.php'; 	

  	$kategori = mysqli_query($conn, "SELECT * FROM tb_category WHERE categori_id ='".$_GET['id']."' ");
  	$k = mysqli_fetch_object($kategori);

	$user = ucwords($_POST['User']);
	$email = ucwords($_POST['Email']);
	$nama = ucwords($_POST['Nama']);
	$harga = ucwords($_POST['Harga']);
	$jumlah = ucwords($_POST['Jumlah']);					
	$h = ucwords($_POST['Jumlah']) * ucwords($_POST['Harga']);
	$html = 
		'<html><body>'.
		'<center>Data Transaksi</center><br>'.
		'Nama   : '.$user.'<br>'.
		'Email  : '.$email.'<br>'.
		'Barang : '.$nama.'<br>'.
		'Harga  : '.$harga.'<br>'.
		'Jumlah : '.$jumlah.'<br>'.
		'Total  : '.$h.'<br>'.
		'</body></html>';

	$dompdf = new dompdf();
	$dompdf->load_html($html);
	$dompdf->render();
	$dompdf->stream('Data.php', array("attachment"=>0));
 ?>