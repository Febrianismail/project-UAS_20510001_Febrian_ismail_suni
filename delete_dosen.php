<?php

include('koneksi.php');


if (isset($_GET['id_dosen'])) {

    $id_dosen = $_GET['id_dosen'];


    $cek = mysqli_query($conn, "SELECT * FROM dosen WHERE id_dosen='$id_dosen'") or die(mysqli_error($koneksi));


    if (mysqli_num_rows($cek) > 0) {

        $del = mysqli_query($conn, "DELETE FROM dosen WHERE id_dosen='$id_dosen'") or die(mysqli_error($koneksi));
        if ($del) {
            echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=tampil_dsn";</script>';
        } else {
            echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=tampil_dsn";</script>';
        }
    } else {
        echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_dsn";</script>';
    }
} else {
    echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_dsn";</script>';
}
