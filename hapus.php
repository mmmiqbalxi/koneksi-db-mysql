<?php
include 'koneksi.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM kendaraan WHERE id = $id";
    if ($conn->query(query: $sql) === TRUE) {
        header(header: "Location: tampil.php");
        exit;
    } else {
        echo "Gagal menghapus: ".$conn->error;
    }
}
?>