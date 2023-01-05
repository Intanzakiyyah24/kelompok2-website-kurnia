  <?php
  include("../../config/config.php");
    include("../_partials/navbar.php");
    include("../_partials/header.php");

  if (!isset($_SESSION['user']) OR empty($_SESSION["user"]))
  {
      echo "<script>alert('silahkan login');</script>";
      echo "<script>location = '../dasbor/index.php';</script>";
  }
  ?>
  <section class="page-section bg-dark" id="riwayat">
    <div class="container">
      <h3 class="text-white">Riwayat Belanja : <?php echo $_SESSION["user"]["nama_user"]?></h3>
      <br>
      <div class="row">
        <div class="table-responsive  ">
        <table class="table table-bordered table-secondary">
        <thead class="table-info">
          <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Status</th>
            <th>Total</th>
            <th>Keterangan</th>
          </tr>
        </thead>
        <tbody>
         <?php
         $nomor=1;
      //mendapatkan id_pelanggan yang login dari session
         $id_user = $_SESSION["user"]['id_user'];

         $ambil = $conn->query("SELECT * FROM pembelian WHERE id_user='$id_user'");
         while($data = $ambil->fetch_assoc()){
          ?>
          
          <tr>
            <td><?php echo $nomor; ?></td>
            <td><?php echo $data["tanggal_pembelian"]?></td>
            <td>
              <?php echo $data["status_pembelian"]?>
              <br>
              <?php if (!empty($data['resi_pengiriman']) && $data['status_pembelian']=="Barang Dikirim"):?>
                Resi: <?php echo $data['resi_pengiriman'];?>
              <?php endif ?>
            </td>
            <td>Rp. <?php echo number_format($data["total_pembelian"])?></td>
            <td>
              <a href="./invoice.php?id=<?php echo $data["id_pembelian"] ?>" class="btn btn-info">Invoice</a>
              <?php
              
              if ($data['status_pembelian'] =="pending") 
              {
                echo "<a href='./payment.php?id=$data[id_pembelian]' class='btn btn-success'>Konfirmasi Pembayaran
              </a>";
              }
              elseif ($data['status_pembelian'] =="Barang Dikirim") 
              {
                echo "<a href='./status.php?id=$data[id_pembelian]' class='btn btn-danger' onclick='return confirm('Konfirmasi Barang Diterima?')'>Konfirmasi Barang Diterima</a>";
              }
              else
              {
                echo "<a href='./show_payment.php?id=$data[id_pembelian]' class='btn btn-warning'>Bukti Pembayaran</a>";
              }
               ?>
            </td>
              </tr>
              <?php $nomor++;?>
            <?php } ?>
          </tbody>
        </table>
      </div>
      </div>
      </div>
    </section>

    <?php 
      include("../_partials/footer.php");
    ?>