<?php

// koneksi db
include 'koneksi.php';

// menangkap data yang dikirim dari form
$idanggota = $_POST['idanggota'];
$nama = $_POST['nama'];
$jeniskelamin = $_POST['jeniskelamin'];
$alamat = $_POST['alamat'];
$status = $_POST['status'];

// update data ke database
mysqli_query($db, "UPDATE tbanggota SET idanggota='$idanggota', nama='$nama', jeniskelamin='$jeniskelamin', alamat='$alamat', status='$status' WHERE idanggota='idanggota'");

// mengalihkan halaman kembali ke tampil_data.php
header("location:index.php");

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data</title>
</head>
<body>
    <div>
        <h1>DTS Junior Web Developer</h1>
        <p>Halaman Mengubah Data Anggota</p>
    </div>
    <div>
        <ul>
            <li><a href="index.php">Tampil Data</a></li>
            <li><a href="tambah_data.php">Input Data</a></li>
        </ul>
    </div>
    <div>
        <?php 
            include 'koneksi.php';
            $idanggota = $_GET["idanggota"];
            $data = mysqli_query($db, "SELECT * FROM tbanggota WHERE idanggota='$idanggota'");
            while($d = mysqli_fetch_array($data)) {
        ?>
        <form action="" method="post">
            <ul>
                <li>
                    <label for="idanggota">ID Anggota</label>
                    <input type="text" name="idanggota" id="idanggota" placeholder="ID Anggota" required autofocus>
                </li>
                <li>
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" name="nama" id="nama" placeholder="Nama Lengkap" required>
                </li>
                <li>
                    <legend>Jenis Kelamin</legend>
                    <div>
                        <input type="radio" name="jeniskelamin" id="gridRadios1" Value="Pria" checked>
                        <label for="gridRadios1">Pria</label>
                    </div>
                    <div>
                        <input type="radio" name="jeniskelamin" id="gridRadios2" Value="Wanita">
                        <label for="gridRadios2">Wanita</label>
                    </div>
                </li>
                <li>
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" placeholder="Alamat Rumah" required>
                </li>
                <li>
                    <label for="status">Status</label>
                    <input type="text" name="status" id="status" placeholder="Status" required>
                </li>
                <li>
                    <button type="submit" name="kirim">Kirim</button>
                </li>
            </ul>
        </form>
    </div>
</body>
</html>