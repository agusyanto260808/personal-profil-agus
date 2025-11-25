<?php

$hostname ="localhost";
$username ="root";
$password ="";
$database ="personal-profile2";

// membuat koneksi ke database
$connect = mysqli_connect($hostname, $username, $password, $database);

// memeriksa apakah koneksi berhasil
if (!$connect){
    die("Koneksi gagal:". mysqli_connect_error());
}
?>