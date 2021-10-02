<?php

include 'koneksi.php';

// menangkap data id yang dikirim dari url
$idanggota = $_GET["idanggota"];

// menghapus data dari db
mysqli_query($db, "DELETE FROM tbanggota WHERE idanggota='$idanggota'");

// mengalihkan halaman kembali ke tampil_data.php
header("location:index.php");

?>