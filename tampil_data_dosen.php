<?php

include('koneksi.php');
?>


<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Data Dosen</font>
    </center>
    <hr>
    <a href="index.php?page=tambah_dsn"><button class="btn btn-dark right">Tambah Data</button></a>
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>KTP</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No Telepon</th>
                    <th>Bidang Dosen</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = mysqli_query($conn, "SELECT * FROM dosen ORDER BY id_dosen DESC") or die(mysqli_error($conn));

                if (mysqli_num_rows($sql) > 0) {

                    $no = 1;

                    while ($data = mysqli_fetch_assoc($sql)) {

                        echo '
						<tr>
							<td>' . $no . '</td>
                            <td>' . $data['ktp_dosen'] . '</td>
							<td>' . $data['nama_dosen'] . '</td>
							<td>' . $data['alamat_dosen'] . '</td>
							<td>' . $data['email_dosen'] . '</td>
                            <td>' . $data['notlp_dosen'] . '</td>
                            <td>' . $data['bidang_dosen'] . '</td>
							<td>
								<a href="index.php?page=edit_dsn&id_dosen=' . $data['id_dosen'] . '" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete_dosen.php?id_dosen=' . $data['id_dosen'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
							</td>
						</tr>
						';
                        $no++;
                    }
                } else {
                    echo '
					<tr>
						<td colspan="6">Tidak ada data.</td>
					</tr>
					';
                }
                ?>
            <tbody>
        </table>
    </div>
</div>