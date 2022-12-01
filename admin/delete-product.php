<?php
    include '../koneksi.php';
    $id_product = $_GET['id_product'];
    $sql = "DELETE FROM product WHERE id_product = $id_product";
    $query = mysqli_query($connect,$sql);
    if ($query){
        header("location: input-product.php?message=berhasil-delete");
    }else{
        header("location: input-product.php?message=gagal-delete");
    }
?>