<?php

// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "data");

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

    // ambil data dari tiap elemen
    $nama_merek = htmlspecialchars($data["nama_merek"]);
    $warna = htmlspecialchars($data["warna"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    // query insert data
    $query = "INSERT INTO printer VALUES ('', '$nama_merek', '$warna', '$jumlah')";
    mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

    // ambil data dari tiap elemen
    $no = htmlspecialchars($data["no"]);
    $nama_merek = htmlspecialchars($data["nama_merek"]);
    $warna = htmlspecialchars($data["warna"]);
    $jumlah = htmlspecialchars($data["jumlah"]);

    // query update data
    $query = "UPDATE printer SET no = '$no', nama_merek = '$nama_merek', warna = '$warna', jumlah = '$jumlah' WHERE no = $no";
    mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($no) {
	global $conn;
	mysqli_query($conn, "DELETE FROM printer WHERE no = $no");
	return mysqli_affected_rows($conn);
}

?>