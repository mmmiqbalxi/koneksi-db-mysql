<?php
  include 'koneksi.php';
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $nama_mobil = $_POST['nama_mobil'];
      $warna = $_POST['warna'];
      $tahun = $_POST['tahun'];

      $sql = "INSERT INTO kendaraan (nama_mobil, warna, tahun)
              VALUES ('$nama_mobil', '$warna', '$tahun')";

      if ($conn->query($sql) === TRUE) {
        header("Location: tampil.php");
        exit();
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
  <form action="" method="post">
    <input type="text" name="nama_mobil" id="nama_mobil" placeholder="Nama Mobil" require class="form-control">
    <br>
    <input type="text" name="warna" id="warna" placeholder="Warna" require class="form-control">
    <br>
    <input type="number" name="tahun" id="tahun" placeholder="Tahun" require class="form-control">
    <br>
    <input type="submit" value="Simpan Data" class="btn btn-outline-danger">
  </form>
</body>
</html>