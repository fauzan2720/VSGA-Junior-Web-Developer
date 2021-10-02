<!DOCTYPE html>
<html>
<head>
	<title>Pertemuan 12</title>
</head>

<body>
    <div>
        <h1>DTS Junior Web Developer</h1>
        <p>Halaman Menampilkan Data Anggota</p>
    </div>
    <div>
        <ul>
            <li><a href="index.php">Tampil Data</a></li>
            <li><a href="tambah_data.php">Input Data</a></li>
        </ul>
    </div>
    <div>
        <table border="1" cellspacing="0" cellpadding="5">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Id Anggota</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    include 'koneksi.php';
                    $no = 1;
                    $data = mysqli_query($db, "SELECT * FROM tbanggota");
                    while($d = mysqli_fetch_array($data)) {
                ?>
                <tr>
                    <td><?php echo $no++; ?></td>
                    <td><?php echo $d["idanggota"]; ?></td>
                    <td><?php echo $d["nama"]; ?></td>
                    <td><?php echo $d["jeniskelamin"]; ?></td>
                    <td><?php echo $d["alamat"]; ?></td>
                    <td><?php echo $d["status"]; ?></td>
                    <td>
                        <a href="edit.php?idanggota=<?php echo $d["idanggota"]; ?>">EDIT</a> | 
                        <a href="hapus.php?idanggota=<?php echo $d["idanggota"]; ?>" onclick="return confirm('Apakah anda yakin?');">HAPUS</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>