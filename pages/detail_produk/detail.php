<?php
include("../_partials/navbar.php");
include("../_partials/header.php"); ?>

<?php

$id_produk = $_GET["id"];
$data = $conn->query("SELECT * FROM produk WHERE id_produk='$id_produk'");
$show_data = $data->fetch_assoc();
?>

<section class="page-section bg-dark" id="detail">
	<div class="container">
		<div class="col-md-12">
			<div class="row justify-content-center">
				<h1 class="text-white">Detail Produk : <?php echo $show_data["nama_produk"]; ?></h1>
			</div>
		</div>
		<br>
		<div class="row">

			<!-- Kolom Gambar -->
			<div class="col-md-6">
				<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
  <div class="mySlides ">
    <img src="../pictures/<?php echo $show_data["gambar"]; ?>" height="540" width="350" class="img-fluid rounded">
  </div>

  <div class="mySlides ">
    <img src="../pictures/<?php echo $show_data["gambar_2"]; ?>" height="540" width="350" class="img-fluid rounded">
  </div>

   <div class="mySlides ">
    <img src="../pictures/<?php echo $show_data["gambar_3"]; ?>" height="540" width="350" class="img-fluid rounded">
   </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
</div>
</div>

			<!-- Kolom Data -->
			<div class="col-md-6 text-white">
				<h3><?php echo $show_data["nama_produk"]; ?></h3>

				<h5>Rp. <?php echo number_format($show_data["harga_produk"]) ?></h5>
				<p>Berat Produk : <?php echo ($show_data["berat_produk"]*0.001) ?> Kg</p>
				<h5>Stock :<?php echo $show_data["stok"];?></h5>

				<form method="post">
					<div class="form-group">
						<div class="input-group">
							<div class="col-md-4">
							<input type="number" min="1" max="<?php echo $show_data['stok']; ?>" max="<?php echo $show_data['stok']; ?>" name="jumlah" value="1" class="form-control">
						</div>
							<div class="input-group-btn">
								<button class="btn btn-info" name="beli">Masukkan Keranjang</button>
							</div>
						</div><br>
						<span class="text-black">Pengiriman Menggunakan Ekspedisi JNE</span>
						<hr class="divider my-8">
					</div>
				</form>

				<h2>Deskripsi Produk :</h2>
				<div class="text-justify">
					<?php echo $show_data["detail_produk"]; ?>
				</div>
				<hr class="divider my-8">
			</div>
		</div>
	</div>
</section>

<?php

if (isset($_POST["beli"]))
{
	$jumlah = $_POST["jumlah"];

	$_SESSION["keranjang"][$id_produk] = $jumlah;

	echo "<script>alert('Produk telah masuk kedalam keranjang');</script>";
	echo "<script>location='../keranjang/cart.php'</script>";
}

?>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

<?php 
	include("../_partials/footer.php");
?>