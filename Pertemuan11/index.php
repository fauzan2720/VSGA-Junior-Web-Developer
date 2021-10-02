<?php

require 'functions.php';

$data = query("SELECT * FROM printer");

?>


<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 11</title>
</head>

<body>
    <h1>DATA PRINTER</h1>
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>No</th>
            <th>Nama Merek</th>
            <th>Warna</th>
            <th>Jumlah</th>
            <th>Aksi</th>
        </tr>

        <?php foreach($data as $row) : ?>
        <tr>
            <td><?= $row["no"]; ?></td>
            <td><?= $row["nama_merek"]; ?></td>
            <td><?= $row["warna"]; ?></td>
            <td><?= $row["jumlah"]; ?></td>
            <td>
                <a href="ubah.php?no=<?= $row["no"]; ?>">Ubah</a> | <a href="hapus.php?no=<?= $row["no"]; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <br>
    <a href="tambah.php">Tambah Data</a>
</body>
</html>