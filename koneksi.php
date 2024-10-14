<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "namadb"; // ubah nama db

$conn = new mysqli("$servername", "$username", "$password", "$dbname");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
    } else {
      echo "Koneksi Berhasil ke database: " . $dbname;
    }

?>