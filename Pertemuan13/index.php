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
  <title>Data Anggota</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">

  <script src="https://kit.fontawesome.com/b8a4c1841d.js" crossorigin="anonymous"></script>

  <link rel="stylesheet" href="style_sidebar.css">
</head>

<body>
  <!-- awal side bar -->
  <nav class="navbar navbar-expand d-flex flex-column align-item-start bg-primary border" id="sidebar">
    <a href="#" class="navbar-brand text-light">
      <div class="display-6 fw-bold">E-Perpus</div>
    </a>

    <ul class="navbar-nav d-flex flex-column w-100 mt-3" style="margin-left: 20px;">
      <li class="nav-item w-100">
        <a href="index.php" class="nav-link text-light pl-4"><i class="fas fa-users"></i> Data Anggota</a>
      </li>
      <li class="nav-item w-100">
        <a href="pinjam.php" class="nav-link text-light pl-4"><i class="fas fa-book-medical"></i> Pinjam Buku</a>
      </li>
    </ul>
  </nav>
  <!-- akhir sidebar -->

  <section class="my-container">
    <button class="btn bg-primary border" id="menu-btn"><i class="fas fa-bars"></i></button>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header text-primary">
              <h1><i class="fas fa-table"></i> Data Anggota | Junior Web Developer</h1>
            </div>
            <div class="card-body">
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
                  <?php foreach ($data as $row) { ?>
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
              <a href="cetak.php" name="pdf" class="btn btn-danger border mb-2" target="_blank">Ekspor ke PDF</a>
              <a href="pinjam.php" class="btn btn-primary border mb-2">Pinjam Buku</a>
            </div>
          </div>
        </div>
      </div>

      <?php
      if (isset($_POST['pdf'])) {
        header("location:cetak.php");
      }
      ?>
  </section>

  <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.min.js" integrity="sha384-5h4UG+6GOuV9qXh6HqOLwZMY4mnLPraeTrjT5v07o347pj6IkfuoASuGBhfDsp3d" crossorigin="anonymous"></script>

  <script>
    $(document).ready(function() {
      $('#myTable').DataTable();
    });

    var menu_btn = document.querySelector("#menu-btn")
    var sidebar = document.querySelector("#sidebar")
    var container = document.querySelector(".my-container")
    menu_btn.addEventListener("click", () => {
      sidebar.classList.toggle("active-nav")
      container.classList.toggle("active-cont")
    })
  </script>
</body>

</html>