<?php include '../config/config.php'; ?>

<section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">
              <form method="POST" enctype="multipart/form-data">
        </div>
      </section>


       <section class="statistics">
        <div class="container-fluid">
          <div class="row d-flex">
            <div class="col-lg-12">

              <h1><bg>
                Tambah Data Tarif Pengiriman
              </h1></bg>
              <br>
              <form method="post" enctype="multipart/form-data">
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Kota </label>
                      <div class="col-sm-6">
                        <input type="text" class="form-control is-valid" placeholder="Contoh: Tangerang" name="kota">
                </div>
                </div>
                
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">Tarif Pengiriman</label>
                      <div class="col-sm-2">
                      <input type="number" name="tarif_pengiriman" class="form-control is-valid" placeholder="Contoh: 15000">
                  </div>
                  </div>

                <button class="btn btn-primary" name="simpan"><i class="fas fa-upload"></i> Tambah Tarif Pengiriman</button> &nbsp; <a href="index.php?halaman=output_data" class="btn btn-default"><i class="fas fa-arrow-left"></i> Kembali</a>
                </form>
          </div>
          </div>
        </div>
      </section>
<?php
if (isset($_POST['simpan']))
{
	$kota = $_POST['kota'];
	$tarif = $_POST['tarif_pengiriman'];
	$conn->query("INSERT INTO tarif (kota,tarif_pengiriman) VALUES ('$kota','$tarif')");
	echo "<script>location='index.php?halaman=output_data';</script>";

} 
?>      