<?php
include 'koneksi.php';

if (isset($_GET['id'])) { // mengecek apakah id mobil sudah diterima dari URL
    $id = $_GET['id']; // mengambil id dari URL (get)

    $sql = "SELECT * FROM kendaraan WHERE id = $id";
    $result = $conn->query($sql);
    $mobil = $result->fetch_assoc();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') { // mengecek apakah form telah dikirim (post)
        $judul = $_POST['nama_mobil'];
        $warna = $_POST['warna'];
        $tahun = $_POST['tahun'];

        // query sql update data
        $sql = "UPDATE kendaraan SET
            nama_mobil='$judul',
            warna='$warna',
            tahun='$tahun'
            WHERE id=$id";

        // pengecekan proses update data berhasil atau tidak
        if ($conn->query($sql) === TRUE) {
            header("Location: tampil.php");
            exit;
        } else {
            echo "Error: " . $conn->error;
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <form method="POST">
        <label>Nama Mobil:</label>
        <input type="text" name="nama_mobil" class="form-control" value="<?php echo $mobil['nama_mobil']; ?>"><br>
        
        <label>Warna:</label>
        <input type="text" name="warna" class="form-control" value="<?php echo $mobil['warna']; ?>"><br>

        <label>Tahun:</label>
        <input type="number" name="tahun" class="form-control" value="<?php echo $mobil['tahun']; ?>"><br>

        <input type="submit" class="btn btn-info" value="Simpan Perubahan">
        <a button type="button" class="btn btn-secondary" href="tampil.php">Kembali</button></a>
    </form>
</body>
</html>