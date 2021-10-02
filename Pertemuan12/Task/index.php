<?php

require 'koneksi.php';

$data = query("SELECT * FROM tbanggota");

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pertemuan 12</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

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
                        <i class="fas fa-table fa-3x"></i>
                    </div>
                    <div class="col">
                        <h1>Data Anggota | Junior Web Developer</h1>
                    </div>
                </div>
            </div>
            <div class="card-body">
              <a href="tambah.php" class="btn btn-primary border mb-2" style="width: 100%;">TAMBAH DATA</a>
              <table class="table table-bordered border table-light table-striped" id="myTable">
                <thead class="table-primary text-center">
                  <tr>
                    <th>ID Anggota</th>
                    <th>Nama Lengkap</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($data as $row) { ?>
                    <tr>
                        <td><?= $row["idanggota"]; ?></td>
                        <td><?= $row["nama"]; ?></td>
                        <td><?= $row["jeniskelamin"]; ?></td>
                        <td><?= $row["alamat"]; ?></td>
                        <td><?= $row["status"]; ?></td>
                        <td>
                            <a class="btn btn-primary" href="ubah.php?idanggota=<?= $row["idanggota"]; ?>">Ubah</a>
                            <a class="btn btn-danger" href="hapus.php?idanggota=<?= $row["idanggota"]; ?>" onclick="return confirm('Apakah anda yakin?');">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>