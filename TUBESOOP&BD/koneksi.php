<?php

$host       =   "localhost";
$user       =   "root";
$password   =   "";
$database   =   "oopbasdata";

$koneksi = mysqli_connect($host, $user, $password, $database);

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
?>