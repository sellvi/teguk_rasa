<?php
include("koneksi.php");
session_start();

$email = $_POST["email"];
$password = $_POST["password"];

$query = mysqli_query($koneksi,"select * from dbuser where email = '$email'");

$jumlah_data = mysqli_num_rows($query);

if($jumlah_data > 0){
    $data = mysqli_fetch_array($query);
    
    $_SESSION['id'] = $data['id'];
    $_SESSION['username'] = $data['username'];
    $_SESSION['role'] = $data['role'];

    header("Location: index.php");
      
}else{

    echo "username tidak terdaftar";

    // header("Location : login.php?error=username atau password salah");
}
?>