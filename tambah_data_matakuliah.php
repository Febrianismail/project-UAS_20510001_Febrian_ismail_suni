<?php
include('koneksi.php'); ?>

<center>
    <font size="6">Tambah Data Matakuliah</font>
</center>
<hr>
<?php
if (isset($_POST['submit'])) {
    $matakuliah            = $_POST['matakuliah'];
    $dosen           = $_POST['dosen'];
    $hari    = $_POST['hari'];
    $jam    = $_POST['jam'];


    $querySql =  ("SELECT * FROM matakuliah WHERE id_matakuliah='$id_matakuliah'") or die(mysqli_error($koneksi));
    $cek = mysqli_query($conn, $querySql);

    if (mysqli_num_rows($cek) == 0) {

        $queryInsert =  ("INSERT INTO `matakuliah` (`matakuliah`, `dosen`, `hari`, `jam`) VALUES ('$matakuliah', '$dosen', '$hari', '$jam')") or die(mysqli_error($koneksi));
        $sql = mysqli_query($conn, $queryInsert);

        if ($sql) {
            echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_mtk";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Gagal, Dosen sudah terdaftar.</div>';
    }
}
?>

<form action="index.php?page=tambah_mtk" method="post">

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Matakuliah</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="matakuliah" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Dosen Pengajar</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="dosen" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Hari</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="hari" class="form-control" required>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-25 col-sm-25 label-align">Jam</label>
            <div class="col-md-10 col-sm-10">
                <input type="text" name="jam" class="form-control" required>
            </div>
        </div>



        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
            </div>
</form>
</div>