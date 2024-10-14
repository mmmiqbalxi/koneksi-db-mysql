<?php

include "koneksi.php"; // sambungkan dengan file koneksi
$sql = "SELECT id, nama_mobil, warna FROM kendaraan";  // cari table beserta kolomnya
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>ID</th>
                <th>Nama mobil</th>
                <th>Warna</th>
            </tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"]. "</td>
                <td>" . $row["nama_mobil"]. "</td>
                <td>" . $row["warna"]. "</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "Tidak ada data";
}
$conn->close();
?>