<?php

// koneksi ke database
function koneksi() {
    return mysqli_connect("localhost", "root", "", "data");
}

function query($query) {
	$conn = koneksi();

	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	$conn = koneksi();

    // ambil data dari tiap elemen
    $idanggota = htmlspecialchars($data["idanggota"]);
    $nama = htmlspecialchars($data["nama"]);
    $jeniskelamin = htmlspecialchars($data["jeniskelamin"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $status = htmlspecialchars($data["status"]);

    // query insert data
    $query = "INSERT INTO tbanggota VALUES ('$idanggota', '$nama', '$jeniskelamin', '$alamat', '$status')";
    mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	$conn = koneksi();

    // ambil data dari tiap elemen
    $idanggota = htmlspecialchars($data["idanggota"]);
    $nama = htmlspecialchars($data["nama"]);
    $jeniskelamin = htmlspecialchars($data["jeniskelamin"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $status = htmlspecialchars($data["status"]);

    // query upadate data
    $query = "UPDATE tbanggota SET idanggota = '$idanggota', nama = '$nama', jeniskelamin = '$jeniskelamin', alamat = '$alamat', status = '$status' WHERE idanggota = $idanggota";
    mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($idanggota) {
	$conn = koneksi();
    
	mysqli_query($conn, "DELETE FROM tbanggota WHERE idanggota = $idanggota");
	return mysqli_affected_rows($conn);
}

?>