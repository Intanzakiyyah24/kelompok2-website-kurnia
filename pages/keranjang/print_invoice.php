<?php 
session_start();
include '../../config/config.php';
$data = $conn->query("SELECT * FROM pembelian JOIN user ON pembelian.id_user=user.id_user WHERE pembelian.id_pembelian='$_GET[id]'");
$showdata = $data->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>

  <!-- Plugin CSS -->
  <link href="../../vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <!-- Theme CSS - Includes Bootstrap -->
  <link href="../../css/creative.css" rel="stylesheet">

  <link href="../../css/slide.css" rel="stylesheet">
</head>
<body>
<section class="page-section">
	<div class="container">
		<div class="row">
	<div class="col-md-4">
		<h3>Pembelian</h3>
		
		<strong>No. Pembelian: <?php echo $showdata['id_pembelian']?></strong><br>
		Tanggal: <?php echo $showdata['tanggal_pembelian'];?><br>
		Total: Rp. <?php echo number_format($showdata['total_pembelian']);?>
		<br>
	</div>

	<div class="col-md-4">
		<h3>Pelanggan</h3>
		
		<strong><?php echo $showdata['nama_user'];?></strong><br>
		<p>
			<?php echo $showdata['hp_user']; ?><br>
			<?php echo $showdata['email_user']; ?>
		</p>
		<br>
	</div>

	<div class="col-md-4">
		<h3>Pengiriman</h3>
		
		<strong><?php echo $showdata["nama_kota"]; ?></strong><br>
		Ongkos Kirim: Rp. <?php echo number_format($showdata['tarif']);?><br>
		Alamat: <?php echo $showdata['alamat_pengiriman']; ?>
		<br>
		
	</div>
	<div class="alert alert-bnk">
			<strong>
			Silahkan Melakukan Pembayaran ke<br>	
			Bank BCA - 7435005977 a.n. Muhammad Rizky Siregar
				</strong>
			</div>

	<table class="table table-bordered">
		<thead class="">
			<tr>
				<th>No</th>
				<th>Tanggal</th>
				<th>Nama Produk</th>
				<th>Harga</th>
				<th>Berat</th>
				<th>Jumlah</th>
				<th>Total Berat</th>
				<th>Total Harga</th>

			</tr>
		</thead>

		<tbody>
			<?php
			$nomor=1;
			$data = $conn->query("SELECT * FROM nota WHERE id_pembelian='$_GET[id]'");
			?>
			<?php while ($show_data_nota=$data->fetch_assoc()){?>
			<tr>
				<td><?php echo $nomor;?></td>
				<td><?php echo $show_data_nota["tanggal"]; ?></td>
				<td><?php echo $show_data_nota["nama_barang"]; ?></td>
				<td><?php echo number_format($show_data_nota["harga"]);?></td>
				<td><?php echo $show_data_nota["berat"]*0.001; ?> Kg</td>
				<td><?php echo $show_data_nota["jumlah"]; ?></td>
				<td><?php echo $show_data_nota["total_berat"]*0.001; ?> Kg</td>
				<td><?php echo number_format($show_data_nota["total"]);?></td>
			</tr>
			<?php $nomor++; ?>
			<?php } ?>
		</tbody>
		<tfoot class="">
			<tr>
				<th colspan="7">Total Belanja</th>
				<th>Total: Rp. <?php echo number_format($showdata['total_pembelian']);?></th>
			</tr>
		</tfoot>
	<script>
    window.print();
    </script>
	</table>
		</div>
	</div>
</section>
</body>
</html>