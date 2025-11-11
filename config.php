<?php
$databaseHost = 'localhost';
$databaseName = 'etalasealat';
$databaseUsername = 'root';
$databasePassword = '';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

// Tambahkan baris ini agar koneksi menggunakan UTF-8
mysqli_set_charset($mysqli, "utf8");
?>
