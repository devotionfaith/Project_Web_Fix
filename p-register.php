<?php
include 'koneksi.php';

$nama = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$no_telp = $_POST['tel'];
$value = $_GET['value'];
$sql    = "INSERT INTO user VALUES(NULL, '$nama', '$username', '$password', '$no_telp', 'user')";

$query    = mysqli_query($connect, $sql) or die(mysqli_error($connect));

if ($query) {
    header("location:login.php?message=Registrasi Berhasil&value=$value");
} else {
    header("location:register.php?message=Registrasi Gagal");
}