<?php
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$value    = $_GET['value'];

$query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
$sql = mysqli_query($connect, $query);
$data = mysqli_fetch_array($sql);
$role = $data['role'];

$cek         = mysqli_num_rows($sql);

if ($cek > 0) {
    $_SESSION['username']      = $username;
    $_SESSION['status']        = "login";

    if ($role == 'admin') {
        header("location: admin/homepage-admin.php");
        $_SESSION['role'] = 'admin';
    } else if ($role == 'user') {
        if ($value == 0) {
            header("location: home.php");
        } else if ($value == '1') {
            header("location: order.php");
        } else if ($value == '2') {
            header("location: reservasi.php");
        } else if ($value == '3') {
            header("location: products.php");
        }
    }
} else {
    header("location: login.php?message=gagal&value=$value");
}