<?php 
include("../../config/config.php");
include("../_partials/navbar.php");
include("../_partials/header.php");
$id_pembelian = $_GET["id"];
$data = $conn->query("SELECT * FROM pembayaran LEFT JOIN pembelian ON pembayaran.id_pembelian=pembelian.id_pembelian WHERE pembelian.id_pembelian='$id_pembelian'");
$show_data = $data->fetch_assoc();

if (empty($show_data))
{
	echo "<script>alert('Anda belum melakukan pembayaran')</script>";
	echo "<script>location='./riwayat.php';</script>";
	end();
}

if($_SESSION["user"]["id_user"]!==$show_data["id_user"])
{
	echo "<script>alert('Bukan data pembayaran anda')</script>";
	echo "<script>location='./riwayat.php';</script>";
	end();
}

?>

<section class="page-section bg-dark" id="show_payment">
	<div class="container">
		<h2 class="text-center text-white">Bukti Pembayaran</h2>
		<hr class="divider">
		<div class="row">
			<div class="col-md-6">
				<table class="table table-secondary rounded">
					<tr>
						<th>Nama</th>
						<td><?php echo $show_data["nama"]?></td>
					</tr>
					<tr>
						<th>Bank</th>
						<td><?php echo $show_data["bank"]?></td>
					</tr>
					<tr>
						<th>Tanggal</th>
						<td><?php echo $show_data["tanggal"]?></td> 
					</tr>
					<tr>
						<th>Nominal</th>
						<td>Rp. <?php echo number_format($show_data["nominal"])?></td>
					</tr>
				</table>
				<a href="./riwayat.php" class="btn btn-primary"><i class="fas fa-arrow-left"> Kembali</i></a>
			</div>
			<div class="col-md-6">
				<img src="../../Payment/<?php echo $show_data["bukti"]?>" alt="" class="img-responsive rounded" height="500" width="500">
			</div>
			
		</div>
	</div>
</section>

<?php include("../_partials/footer.php"); ?>