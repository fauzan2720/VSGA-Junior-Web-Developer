<?php

require 'koneksi.php';

$data = query("SELECT * FROM tbanggota");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>ID Anggota</th>
                <th>Nama Lengkap</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data as $row) { ?>
                <tr>
                    <td><?= $row["idanggota"]; ?></td>
                    <td><?= $row["nama"]; ?></td>
                    <td><?= $row["jeniskelamin"]; ?></td>
                    <td><?= $row["alamat"]; ?></td>
                    <td><?= $row["status"]; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>