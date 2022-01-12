<?php
include('koneksi.php'); ?>


<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Edit Data</font>
    </center>

    <hr>

    <?php

    if (isset($_GET['id_dosen'])) {

        $id_dosen = $_GET['id_dosen'];


        $select = mysqli_query($conn, "SELECT * FROM dosen WHERE id_dosen='$id_dosen'") or die(mysqli_error($koneksi));

        if (mysqli_num_rows($select) == 0) {
            echo '<div class="alert alert-warning">ID tidak ada dalam database.</div>';
            exit();
        } else {

            $data = mysqli_fetch_assoc($select);
        }
    }
    ?>

    <?php

    if (isset($_POST['submit'])) {
        $ktp_dosen            = $_POST['ktp_dosen'];
        $nama_dosen           = $_POST['nama_dosen'];
        $alamat_dosen        = $_POST['alamat_dosen'];
        $email_dosen    = $_POST['email_dosen'];
        $notlp_dosen    = $_POST['notlp_dosen'];
        $bidang_dosen    = $_POST['bidang_dosen'];


        $sql = mysqli_query($conn, "UPDATE dosen SET ktp_dosen='$ktp_dosen', nama_dosen='$nama_dosen', alamat_dosen='$alamat_dosen', email_dosen='$email_dosen',notlp_dosen='$notlp_dosen',bidang_dosen='$bidang_dosen' WHERE id_dosen='$id_dosen'") or die(mysqli_error($koneksi));

        if ($sql) {
            echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_dsn";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
    }
    ?>

    <form action="index.php?page=edit_dsn&id_dosen=<?php echo $id_dosen; ?>" method="post">
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">No KTP</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="ktp_dosen" class="form-control" size="4" value="<?php echo $data['ktp_dosen']; ?>" readonly required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Nama Lengkap</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="nama_dosen" class="form-control" value="<?php echo $data['nama_dosen']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Alamat</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="alamat_dosen" class="form-control" value="<?php echo $data['alamat_dosen']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="email_dosen" class="form-control" value="<?php echo $data['email_dosen']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">No Telepon</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="notlp_dosen" class="form-control" value="<?php echo $data['notlp_dosen']; ?>" required>
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align">Bidang Dosen</label>
            <div class="col-md-6 col-sm-6">
                <input type="text" name="bidang_dosen" class="form-control" value="<?php echo $data['bidang_dosen']; ?>" required>
            </div>
        </div>

        <div class="item form-group">
            <div class="col-md-6 col-sm-6 offset-md-3">
                <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                <a href="index.php?page=tampil_dsn" class="btn btn-warning">Kembali</a>
            </div>
        </div>
    </form>
</div>