<?php
include '../config/config.php';
$data = $conn->query("SELECT * FROM produk WHERE id_produk='$_GET[id]'");
$showdata = $data->fetch_assoc();
?>

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
                Tambah Data Stok Produk
              </h1></bg>
              <br>
              <form method="post" enctype="multipart/form-data">
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Nama Produk</label>
                      <div class="col-sm-6">
                        <input type="text" readonly=""class="form-control is-valid" placeholder="Nama Produk" value="<?php echo $showdata['nama_produk']; ?>">
                </div>
                </div>
                
                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Stok Produk</label>
                      <div class="col-sm-1">
                      <input type="number" max="100" name="stock" class="form-control is-valid" placeholder="Stock" value="<?php echo $showdata['stok']; ?>">
                  </div>
                  </div>

                <button class="btn btn-primary" name="simpan"><i class="fas fa-upload"></i> Upload Stok</button> &nbsp; <a href="index.php?halaman=output_data" class="btn btn-default"><i class="fas fa-arrow-left"></i> Kembali</a>
                </form>
          </div>
          </div>
        </div>
      </section>
      <?php 
      if (isset($_POST["simpan"]))
      {
        $stock_barang = $_POST['stock'];
        $conn->query("UPDATE produk SET stok='$stock_barang' WHERE id_produk='$_GET[id]'");

        echo "<script>location='index.php?halaman=output_data';</script>";
      }
      ?>