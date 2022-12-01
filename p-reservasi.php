<?php
include 'koneksi.php';
$id_user = $_POST['id_user'];
$tgl_reservasi = $_POST['tgl_reservasi'];
$jam = $_POST['jam'];
$jumlah_org = $_POST['jumlah_org'];

$sql = "INSERT INTO reservasi VALUES ('$id_reservasi','$tgl_reservasi','$jam','$jumlah_org','$id_user')";
$query = mysqli_query($connect, $sql);

if ($query) {
    header("location:reservasi.php#section1");
} else {
    header("location:reservasi.php?message=gagal");
}