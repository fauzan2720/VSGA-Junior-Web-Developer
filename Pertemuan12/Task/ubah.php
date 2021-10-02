<?php

require 'koneksi.php';

$idanggota = $_GET["idanggota"];

// query data berdasarkan idanggota pada database
$data = query("SELECT * FROM tbanggota WHERE idanggota = $idanggota")[0];

if (isset($_POST["submit"])) {
    // cek data berhasil
    if (ubah($_POST) > 0) {
        echo "
            <script>    
                alert('Data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>    
                alert('Data gagal diubah!');
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
    <title>Ubah Data Anggota</title>

    <!-- Memanggil bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/b8a4c1841d.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-primary">
                        <div class="row">
                            <div class="col-md-1" style="padding-left: 35px">
                                <i class="fas fa-user-edit fa-3x"></i>
                            </div>
                            <div class="col">
                                <h1>Ubah Data Anggota</h1>
                            </div>
                        </div>
                    </div>

                    <form class="container" action="" method="post">
                        <div class="mt-3" style="width: 100%;">
                            <label for="idanggota">ID Anggota</label>
                            <input class="form-control bg-light" type="text" name="idanggota" id="idanggota" required readonly value="<?= $data["idanggota"] ?>" placeholder="ID Anggota">
                        </div>
                        <div class="mt-2" style="width: 100%;">
                            <label for="nama">Nama Lengkap</label>
                            <input class="form-control" type="text" name="nama" id="nama" required autofocus placeholder="Nama Lengkap" value="<?= $data["nama"] ?>">
                        </div>
                        <div class="mt-2" style="width: 100%;">
                            <label>Jenis Kelamin</legend>
                            <div>
                                <input class="form-check-input" type="radio" name="jeniskelamin" id="Laki-laki" Value="Laki-laki">
                                <label class="form-check-label" for="Laki-laki">Laki-laki</label>

                                <input class="form-check-input" type="radio" name="jeniskelamin" id="Perempuan" Value="Perempuan">
                                <label class="form-check-label" for="Perempuan">Perempuan</label>
                            </div>
                        </div>
                        <div class="mt-2" style="width: 100%;">
                            <label for="alamat">Alamat</label>
                            <input class="form-control" type="text" name="alamat" id="alamat" required placeholder="Alamat" value="<?= $data["alamat"] ?>">
                        </div>
                        <div class="mt-2" style="width: 100%;">
                            <label>Status</label>
                            <select class="form-select" name="status" required value="<?= $data["status"] ?>">
                                <option value="Meminjam">Meminjam</option>
                                <option value="Tidak Meminjam">Tidak Meminjam</option>
                            </select>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mt-3 mb-4" style="width: 100%">Ubah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>