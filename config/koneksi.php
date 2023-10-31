<?php
$host = "localhost";
$user = "root";
$password = "";
$db = "penggajian";

$koneksi = mysqli_connect($host, $user, $password,$db);

// if(!$koneksi){
//     die("gagal terkoneksi".mysqli_connect_errno()."-".mysqli_connect_error());
//     exit();
// } else{
//     echo"Berhasil";
// }
?>