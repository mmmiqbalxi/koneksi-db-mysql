<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iqbal_xirpl1";

$conn = new mysqli("$servername", "$username", "$password", "$dbname");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
    } else {
      echo "Koneksi Berhasil ke database: " . $dbname;
    }

?>