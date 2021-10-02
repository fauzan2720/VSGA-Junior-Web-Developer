<?php

require 'koneksi.php';

$idanggota = $_GET["idanggota"];

if(hapus($idanggota) > 0) {
    echo "
        <script>    
            alert('Data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>    
            alert('Data gagal dihapus!');
            document.location.href = 'index.php';
        </script>
    ";
}

?>