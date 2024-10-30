<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tampil</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>

  <?php

  include "koneksi.php";
  $sql = "SELECT id, nama_mobil, warna, tahun FROM kendaraan";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    echo "<table border='1' class='table table-striped'>
            <tr>
                <th>ID</th>
                <th>Nama mobil</th>
                <th>Warna</th>
                <th>Tahun</th>
                <th>aksi</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
      echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["nama_mobil"] . "</td>
                <td>" . $row["warna"] . "</td>
                <td>" . $row["tahun"] . "</td>

                <td>
                <a href='edit.php?id=" . $row['id'] . "'
                class='btn btn-warning btn-sm me-1'>
                <i class='bi bi-pencil'></i> Edit
                </a>
                <a class='btn btn-outline-danger'
                href='hapus.php?id=" . $row['id'] . "'
                onclick='return confirm(\"yakin ingin menghapus data ini?\");'>Hapus</a>
                </td>
              </tr>";
    }
    echo "</table>";
  } else {
    echo "Tidak ada data";
  }
  $conn->close();
  ?>

</body>

</html>