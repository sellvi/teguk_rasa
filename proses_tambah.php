<?php
include("koneksi.php");

//dapatkan data dari input form
$nama      = $_POST["nama"];
$deskripsi = $_POST["deskripsi"];
$harga     = $_POST["harga"];

$namafoto  = $_FILES["foto"]["name"];
$lokasifoto= $_FILES["foto"]["tmp_name"];


// query:insert,sesuaikan dgn tabel masing masing
$query = mysqli_query($koneksi, "INSERT INTO `dbproduk`(`id`,`nama`,`harga`,`foto`,`deskripsi`)VALUES(null,'$nama','$harga','$namafoto','$deskripsi')");

// kalau query berhasil maka akan kembali ke halam tambah_produk.php
if($query){

    // pindahkan file foto, sesuaikan juga dgn lokasi file masing2 
    move_uploaded_file($lokasifoto,$namafoto);

    header("Location: tambah_produk.php");
}



?>