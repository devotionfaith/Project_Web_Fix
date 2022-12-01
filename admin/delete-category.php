<?php
include '../koneksi.php';
$id_jenis = $_GET['id_jenis'];
$sql = "DELETE FROM jenis_product WHERE id_jenis = $id_jenis";
$query = mysqli_query($connect, $sql);
if ($query) {
    header("location: input-product.php?message=berhasil-delete");
} else {
    header("location: input-product.php?message=gagal-delete");
}