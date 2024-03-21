<?php

$conn = mysqli_connect("localhost", "root", "", "rumah_sakit");

function query($query) {
    global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}
	return $rows;
}

function tambah($data) {
	global $conn;

	$nama = htmlspecialchars($data["nama"]);
	$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
	$alamat = htmlspecialchars($data["alamat"]);

	$query = "INSERT INTO tbl_pasien
	(id_pasien, nama_pasien, jenis_kelamin_pasien, tgl_lahir_pasien, alamat_pasien)
	VALUES
	('','$nama','$jenis_kelamin','$tgl_lahir','$alamat')";

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM tbl_pasien WHERE id_pasien = $id");
	return mysqli_affected_rows($conn);
}

function ubah($id) {
	global $conn;
	$nama = htmlspecialchars($data["nama"]);
	$jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
	$tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
	$alamat = htmlspecialchars($data["alamat"]);

	$query = "UPDATE tbl_pasien
	(id_pasien, nama_pasien, jenis_kelamin_pasien, tgl_lahir_pasien, alamat_pasien)
	SET
	('','$nama','$jenis_kelamin','$tgl_lahir','$alamat') WHERE id_pasien = $id" ;

	mysqli_query($conn, $query);

	return mysqli_affected_rows($conn);

}

function hitung_umur($tanggal_lahir){
	$birthDate = new DateTime($tanggal_lahir);
	$today = new DateTime("today");
	if ($birthDate > $today) { 
	    exit("0 tahun 0 bulan 0 hari");
	}
	$y = $today->diff($birthDate)->y;
	return $y." tahun ";
}



?>