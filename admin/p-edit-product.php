<?php
    include '../koneksi.php';

    $id_product = $_POST['id_product'];
    $nama_product = $_POST['nama_product'];
    $harga_product = $_POST['harga_product'];
    $jenis_product = $_POST['jenis_product'];
    $jumlah_tersedia = $_POST['jumlah_tersedia'];
    
    $target_dir = "gambar-product/";
        $target_file = $target_dir . basename($_FILES["gambar_product"]['name']);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        if(move_uploaded_file($_FILES['gambar_product']['tmp_name'],$target_file)){
            echo "The file ". basename( $_FILES["gambar_product"]["name"]). " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
            }
        
        $image = basename( $_FILES["gambar_product"]["name"],".jpg");
            
        $sql = "UPDATE product SET nama_product='$nama_product', harga='$harga_product', id_jenis='$jenis_product', jumlah_tersedia='$jumlah_tersedia', gambar='$image' WHERE product.id_product='$id_product' ";
        $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        
        if($query){
            header("location: input-product.php");
        }