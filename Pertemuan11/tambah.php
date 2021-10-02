<?php

require 'functions.php';

if (isset($_POST["submit"])) {
    // cek data berhasil
    if (tambah($_POST) > 0) {
        echo "
            <script>    
                alert('Data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>    
                alert('Data gagal ditambahkan!');
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Barang</title>
</head>
<body>
    <h1>Tambah Data Barang</h1>

    <form action="" method="post">
        <ul>
            <li>
                <label for="merk">Nama Merek</label>
                <input type="text" name="nama_merek" id="merk" required autofocus>
            </li>
            <li>
                <label>Warna</label>
                <select name="warna" required>
                    <option value="Hitam">Hitam</option>
                    <option value="Biru">Biru</option>
                </select>
            </li>
            <li>
                <label for="jumlah">Jumlah</label>
                <input type="number" name="jumlah" id="jumlah" required>
            </li>
            <li>
                <button type="submit" name="submit">Tambah Data</button>
            </li>
        </ul>
    </form>
</body>
</html>