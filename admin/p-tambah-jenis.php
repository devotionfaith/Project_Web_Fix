<?php
    include '../koneksi.php';

    $nama_jenis = $_POST['nama-jenis'];

    $sql = "INSERT INTO jenis_product VALUES('$id_jenis', '$nama_jenis')";
    $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));

    if($query){
        header("location: input-product.php");
    }
?>