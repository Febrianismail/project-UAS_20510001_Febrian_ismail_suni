<?php
include('koneksi.php'); ?>


<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Edit Data</font>
    </center>

    <hr>

    <?php

    if (isset($_GET['id_matakuliah'])) {

        $id_matakuliah = $_GET['id_matakuliah'];


        $select = mysqli_query($conn, "SELECT * FROM matakuliah WHERE id_matakuliah='$id_matakuliah'") or die(mysqli_error($koneksi));

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
        $matakuliah            = $_POST['matakuliah'];
        $dosen           = $_POST['dosen'];
        $hari        = $_POST['hari'];
        $jam    = $_POST['jam'];



        $sql = mysqli_query($conn, "UPDATE matakuliah SET matakuliah='$matakuliah', dosen='$dosen', hari='$hari', jam='$jam' WHERE id_matakuliah='$id_matakuliah'") or die(mysqli_error($koneksi));

        if ($sql) {
            echo '<script>alert("Berhasil menyimpan data."); document.location="index.php?page=tampil_mtk";</script>';
        } else {
            echo '<div class="alert alert-warning">Gagal melakukan proses edit data.</div>';
        }
    }
    ?>

    <form action="index.php?page=edit_mtk&id_matakuliah=<?php echo $id_matakuliah; ?>" method="post">
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
                    <a href="index.php?page=tampil_mtk" class="btn btn-warning">Kembali</a>
                </div>
            </div>
    </form>
</div>