<?php
include 'koneksi.php';

$id_user = $_POST['id_user'];
$nama_product = $_POST['nama_product'];
$quantity = $_POST['quantity'];
$alamat = $_POST['alamat'];
$jenis_pembayaran = $_POST['jenis_pembayaran'];
$price = $_POST['price'];
$full_price = $quantity * $price;

$sql = "INSERT INTO order_list VALUES ('$id_order', '$id_user', '$nama_product', '$quantity','$full_price', '$alamat','$jenis_pembayaran' )";
$query = mysqli_query($connect, $sql);
$sql2 = "SELECT * FROM product WHERE nama_product = '$nama_product'";
$query2 = mysqli_query($connect, $sql2);
$ambil = mysqli_fetch_array($query2);
$update = $ambil['jumlah_tersedia'] - $quantity;
if ($update >= 0) {
    $sql_up = "UPDATE product SET jumlah_tersedia= '$update' WHERE nama_product = '$nama_product'";
    $query3 = mysqli_query($connect, $sql_up);

    if ($query) {
        header("location:lihatorder.php");
    } else {
        header("location:products.php?message=gagal");
    }
} else {
    header("location:products.php?message=Produk_Tidak_Cukup");
}