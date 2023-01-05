<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//include library phpmailer
include('assets/phpmailer/Exception.php');
include('assets/phpmailer/PHPMailer.php');
include('assets/phpmailer/SMTP.php');

$id = $_POST['iduser'];
$name = $_POST['name'];
$email = $_POST['mail'];
$stat = $_POST['status'];
$pswd = $_POST['katasandi'];

$mysqli->query("INSERT INTO tbuser VALUES ('$id','$name','$email','$stat','$stat','$pswd')");

if (($mysqli)) {
    $email_pengirim = 'irmay0409@gmail.com';
    $nama_pengirim = 'Kurnia Stationery';
    $email_penerima = $_POST['email'];
    $subjek ='Konfirmasi Pembayaran Selesai';
    $pesan = 'Pesanan anda telah dikonfirmasi, id user anda '.$id.' dengan password anda'.$pswd.'.apabila terjadi kesalahan silahkan hubungi admin yang tertera pada halaman about';

    $email = new PHPMailer;
    $email->isSMTP();

    $email->Host = "smtp.gmail.com";
    $email->Username = $email_pengirim;
    $email->Password = 'yuhpmuzktntobgml';
    $email->Port = 455;
    $email->SMTPAuth = true;
    $email->SMTPSecure = 'ssl';
    $email->SMTPDebug = 2;



    $email->setForm($email_pengirim, $nama_pengirim);
    $email->addAdress($email_penerima);
    $email->iSHTML(true);
    $email->Subjek = $subjek;
    $email->Body = $pesan;

    $send = $email->send();
    

if($send){
    echo "<h1>Email Berhasil Dikirim</h1><br/><a href='index.php'>Kembali ke Form</a>";
}else{
    echo "<h1>Email Gagal Dikirim</h1><br/><a href='index.php'>Kembali ke Form</a>";
}

echo "<script>alertt('Data berhasil ditambahkan, dan email notifikasi terkirim')</script>";
echo "<script type='text/javascript'> document.location = 'index.php?page=show_payment'; </script>";

}


?>