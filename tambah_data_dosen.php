<?php
include('koneksi.php'); ?>

<center>
    <font size="6">Tambah Data Dosen</font>
</center>
<hr>
<?php
if (isset($_POST['submit'])) {
    $ktp_dosen            = $_POST['ktp_dosen'];
    $nama_dosen           = $_POST['nama_dosen'];
    $alamat_dosen        = $_POST['alamat_dosen'];
    $email_dosen    = $_POST['email_dosen'];
    $notlp_dosen    = $_POST['notlp_dosen'];
    $bidang_dosen    = $_POST['bidang_dosen'];

    $querySql =  ("SELECT * FROM dosen WHERE id_dosen='$id_dosen'") or die(mysqli_error($koneksi));
    $cek = mysqli_query($conn, $querySql);

    if (mysqli_num_rows($cek) == 0) {

        $queryInsert =  ("INSERT INTO `dosen` (`ktp_dosen`, `nama_dosen`, `alamat_dosen`, `email_dosen`, `notlp_dosen`, `bidang_dosen`) VALUES ('$ktp_dosen', '$nama_dosen', '$alamat_dosen', '$email_dosen', '$notlp_dosen', '$bidang_dosen')") or die(mysqli_error($koneksi));
        $sql = mysqli_query($conn, $queryInsert);

        if ($sql) {
            echo '<script>alert("Berhasil menambahkan data."); document.location="index.php?page=tampil_dsn";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses tambah data.</div>';
        }
    } else {
        echo '<div class="alert alert-warning">Gagal, Dosen sudah terdaftar.</div>';
    }
}
?>

<form action="index.php?page=tambah_dsn" method="post">

    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">No KTP</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="ktp_dosen" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="nama_dosen" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="alamat_dosen" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="email_dosen" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">No Telepon</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="notlp_dosen" class="form-control" required>
        </div>
    </div>
    <div class="item form-group">
        <label class="col-form-label col-md-3 col-sm-3 label-align">Bidang Dosen</label>
        <div class="col-md-6 col-sm-6">
            <input type="text" name="bidang_dosen" class="form-control" required>
        </div>
    </div>


    <div class="item form-group">
        <div class="col-md-6 col-sm-6 offset-md-3">
            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
        </div>
</form>
</div>