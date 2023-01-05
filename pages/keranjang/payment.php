<?php 

include("../_partials/navbar.php");
include("../_partials/header.php");

if (!isset($_SESSION['user']) OR empty($_SESSION["user"]))
{
	echo "<script>alert('Silahkan Login')</script>";
	echo "<script>location='index.php?';</script>";
}

$id_pembeli =$_GET["id"];
$data = $conn->query("SELECT * FROM pembelian WHERE id_pembelian='$id_pembeli'");
$show_data = $data->fetch_assoc();

$id_user_beli = $show_data["id_user"];
$id_user_login = $_SESSION["user"]["id_user"];

if ($id_user_login !== $id_user_beli)
{
	echo "<script>alert('Silahkan Kembali');</script>";
	echo "<script>location='./riwayat.php';</script>";
}
?>
<section class="page-section bg-dark" id="payment">
	<div class="container">
		<h1 class="text-white text-center">Konfirmasi Bukti Pembayaran</h1>
		<hr class="divider my-6">
		<div class="justify-content-center">
			<div class="alert alert-info col-md-8">
				Nominal Tagihan Anda : 
				<strong>
					Rp. <?php echo number_format($show_data["total_pembelian"]) ?>
				</strong>
			</div>
		</div>
		<div class="row">
			
			<br><br>
			<!-- Input Data -->
			<form method="post" enctype="multipart/form-data">
			<fieldset disabled>
			<div class="form-group">
					<label for="disabledTextInput" class="text-white form-control-label">No. Rekening Kurnia Stationery</label>
					<input type="text" id="disabledTextInput" name="nama" class="form-control" placeholder="7435005977 an. Muhammad Rizky Siregar">
				</div>
				</fieldset>

				<div class="form-group">
					<label class="text-white form-control-label">Nama Pengirim</label>
					<input type="text" name="nama" class="form-control" placeholder="Nama Pengirim">
				</div>

				<div class="form-group">
					<label class="text-white form-control-label">Bank</label>
					<select name="bank" class="form-control">
						<option value="">Pilih Bank Pengirim</option>
						<option>BANK - BCA</option>
						<option>BANK - BNI</option>
						<option>BANK - MANDIRI</option>
						<option>BANK - BRI</option>
						<option>BANK - BSI</option>
						<option>BANK - BTN</option>
						<option>BANK - DKI</option>
					</select>
				</div>
				<div class="form-group">
					<label class="text-white form-control-label">Bukti Pembayaran</label>
					<input type="file" name="bukti_pembayaran" class="form-control"required>
				</div>
				<button class="btn btn-info" name="send_data"><i class="fas fa-upload"></i>Upload</button>
				<a class="btn btn-secondary" href="./riwayat.php"><i class="fas fa-arrow-left"></i> Kembali</a>
			</form>
		</div>
	</div>
</section>
<?php 
if (isset($_POST["send_data"]))
{
	$bukti = $_FILES["bukti_pembayaran"]["name"];
	$lokasi_bukti = $_FILES["bukti_pembayaran"]["tmp_name"];
	$bukti_penyetor = date("YmdHis").$bukti;
	move_uploaded_file($lokasi_bukti, "../../Payment/$bukti_penyetor");

	
	$nama_penyetor = $_POST["nama"];
	$bank = $_POST["bank"];
	$nominal = $show_data["total_pembelian"];
	$tanggal = date("Y-m-d");

	//Insert Data Payment
	//Still On Progress (Made the table on database)
	$conn->query("INSERT INTO pembayaran(id_pembelian,nama,bank,nominal,tanggal,bukti) VALUES ('$id_pembeli','$nama_penyetor','$bank','$nominal','$tanggal','$bukti_penyetor')");

	$conn->query("UPDATE pembelian SET status_pembelian='Terbayar' WHERE id_pembelian='$id_pembeli'");

	echo "<script>location='./riwayat.php';</script>";
}

include("../_partials/footer.php");
?>