     <?php
      include '../config/config.php';
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
                Input Data Produk
              </h1></bg>
              <br>

<?php 
        if (isset($_POST['simpan'])) 
        {
          
          $nama = $_FILES['gambar']['name'];
          $lokasi = $_FILES['gambar']['tmp_name'];
          move_uploaded_file($lokasi, "../pages/pictures/".$nama);

          $nama_2 = $_FILES['gambar_2']['name'];
          $lokasi_2 = $_FILES['gambar_2']['tmp_name'];
          move_uploaded_file($lokasi_2, "../pages/pictures/".$nama_2);

          $nama_3 = $_FILES['gambar_3']['name'];
          $lokasi_3 = $_FILES['gambar_3']['tmp_name'];
          move_uploaded_file($lokasi_3, "../pages/pictures/".$nama_3);
          
          $nama_produk = $_POST['nama_produk'];
          $harga_produk = $_POST['harga'];
          $berat = $_POST['berat'];
          $stok = $_POST['stock'];
          $detail_produk = $_POST['keterangan'];

          if( $nama_produk==''|| $harga_produk=='' || $berat=='' || $stok=='' || $detail_produk=='' || $nama=='' || $nama_2=='' || $nama_3=='')
          {
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>File bertanda * tidak boleh kosong!</div>';
          }
          else
          {
            $conn->query("INSERT INTO produk
           (nama_produk,harga_produk,berat_produk,gambar,gambar_2,gambar_3,detail_produk,stok)
           VALUES('$nama_produk','$harga_produk','$berat','$nama','$nama_2','$nama_3','$detail_produk','$stok')");
          echo "<div class='alert alert-info'>Data tersimpan</div>";
          echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=output_data'>"; }
          
          

        }
?>

              <form method="post" enctype="multipart/form-data">
                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Nama Produk</label>
                      <div class="col-sm-6">
                        <input type="text" name="nama_produk" class="form-control is-valid" placeholder="Nama Produk">
                </div>
                </div>

                <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Harga Produk</label>
                      <div class="col-sm-2">
                      <input type="number" max="1000000" name="harga" class="form-control is-valid" placeholder="Harga Produk">
                  </div>
                  </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Berat Produk</label>
                      <div class="col-sm-1">
                      <input type="number" max="1000" name="berat" class="form-control is-valid" placeholder="Berat = Gr">
                  </div>
                  </div>

                    <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Stok Produk</label>
                      <div class="col-sm-1">
                      <input type="number" max="100" name="stock" class="form-control is-valid" placeholder="Stock">
                  </div>
                  </div>
                  
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Keterangan</label>
                      <div class="col-sm-8">
                       <textarea class="ckeditor" id="ckeditor" name="keterangan"></textarea> 
                      </div>
                </div>

                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Gambar-1</label>
                      <div class="col-sm-2">
                        <input type="file" name="gambar" class="form-control is-valid" placeholder="=Gambar lokasi">
                      </div>
                  </div>

                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Gambar-2</label>
                      <div class="col-sm-2">
                        <input type="file" name="gambar_2" class="form-control is-valid" placeholder="=Gambar lokasi">
                      </div>
                  </div>
                  <div class="form-group row has-success">
                      <label class="col-sm-2 form-control-label">* Gambar-3</label>
                      <div class="col-sm-2">
                        <input type="file" name="gambar_3" class="form-control is-valid" placeholder="=Gambar lokasi">
                      </div>
                  </div>
                <button class="btn btn-primary" name="simpan">Tambah Data</button> &nbsp; <a href="index.php?halaman=output_data" class="btn btn-default">Kembali</a>
                </form>
                </div>
              </div>
          </div>
      </section> 
      
      <script type="text/javascript"src="ckeditor/ckeditor.js"></script>

   