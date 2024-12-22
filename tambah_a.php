<?php
require 'config.php';
$enumKategori = enum('kategori');
$enumLokasi = enum('lokasi');
$enumUrgensi = enum('tingkat');
$enumPenyelesaian = enum('penyelesaian');

$tambah = $mysqli -> query("INSERT INTO antrian (deskripsi) VALUES ('deskripsi')");
?>

<!DOCTYPE html>
<head>
    <title>Resiko Baru</title>
</head>
<body>
    <h1>Tambah Resiko Baru</h1>
    <form action = "" method = "POST">
        <div class = "input-container">
            <label for="kategori">Kategori</label>
            <select name="kategori" id="kategori">
                <?php foreach($enumKategori as $kategori): ?>
                    <option value="<?= $kategori ?>"><?= $kategori ?></option>
                <?php endforeach; ?>
            </select>

            <label for="lokasi">Lokasi</label>
            <select name="lokasi" id="lokasi">
                <?php foreach($enumLokasi as $lokasi): ?>
                    <option value="<?= $lokasi ?>"><?= $lokasi ?></option>
                <?php endforeach; ?>
            </select>

            <label for="tingkat">Urgensi</label>
            <select name="tingkat" id="tingkat">
                <?php foreach($enumUrgensi as $urgensi): ?>
                    <option value="<?= $urgensi ?>"><?= $urgensi ?></option>
                <?php endforeach; ?>
            </select>

            <label for="deskripsi">Deskripsi</label>
            <textarea name="deskripsi" id="deskripsi" required></textarea>
        </div>
    </form>

    
    <a href="admin.php">Kembali</a>
</body>
</html>