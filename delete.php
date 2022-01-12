<?php

include('koneksi.php');


if (isset($_GET['Nim'])) {

	$Nim = $_GET['Nim'];


	$cek = mysqli_query($conn, "SELECT * FROM mahasiswa WHERE Nim='$Nim'") or die(mysqli_error($koneksi));


	if (mysqli_num_rows($cek) > 0) {

		$del = mysqli_query($conn, "DELETE FROM mahasiswa WHERE Nim='$Nim'") or die(mysqli_error($koneksi));
		if ($del) {
			echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=tampil_mhs";</script>';
		} else {
			echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=tampil_mhs";</script>';
		}
	} else {
		echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_mhs";</script>';
	}
} else {
	echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_mhs";</script>';
}
