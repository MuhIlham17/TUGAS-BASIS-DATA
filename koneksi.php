<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "uts_312310208";

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die ("koneksi gagal :" . $conn->connect_error);
}
// echo "Koneksi berhasil";
?>