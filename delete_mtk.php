<?php

include('koneksi.php');


if (isset($_GET['id_matakuliah'])) {

    $id_matakuliah = $_GET['id_matakuliah'];


    $cek = mysqli_query($conn, "SELECT * FROM matakuliah WHERE id_matakuliah='$id_matakuliah'") or die(mysqli_error($koneksi));


    if (mysqli_num_rows($cek) > 0) {

        $del = mysqli_query($conn, "DELETE FROM matakuliah WHERE id_matakuliah='$id_matakuliah'") or die(mysqli_error($koneksi));
        if ($del) {
            echo '<script>alert("Berhasil menghapus data."); document.location="index.php?page=tampil_mtk";</script>';
        } else {
            echo '<script>alert("Gagal menghapus data."); document.location="index.php?page=tampil_mtk";</script>';
        }
    } else {
        echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_mtk";</script>';
    }
} else {
    echo '<script>alert("ID tidak ditemukan di database."); document.location="index.php?page=tampil_mtk";</script>';
}
