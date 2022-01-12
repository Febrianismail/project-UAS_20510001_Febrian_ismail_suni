<?php

include('koneksi.php');
?>


<div class="container" style="margin-top:20px">
    <center>
        <font size="6">Data Matakuliah</font>
    </center>
    <hr>
    <a href="index.php?page=tambah_dsn"><button class="btn btn-dark right">Tambah Data</button></a>
    <div class="table-responsive">
        <table class="table table-striped jambo_table bulk_action">
            <thead>
                <tr>
                    <th>NO.</th>
                    <th>Matakuliah</th>
                    <th>Dosen Pengajar</th>
                    <th>Hari</th>
                    <th>Jam</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php

                $sql = mysqli_query($conn, "SELECT * FROM matakuliah ORDER BY id_matakuliah DESC") or die(mysqli_error($conn));

                if (mysqli_num_rows($sql) > 0) {

                    $no = 1;

                    while ($data = mysqli_fetch_assoc($sql)) {

                        echo '
						<tr>
							<td>' . $no . '</td>
                            <td>' . $data['matakuliah'] . '</td>
							<td>' . $data['dosen'] . '</td>
							<td>' . $data['hari'] . '</td>
							<td>' . $data['jam'] . '</td>
                            
							<td>
								<a href="index.php?page=edit_mtk&id_matakuliah=' . $data['id_matakuliah'] . '" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete_mtk.php?id_matakuliah=' . $data['id_matakuliah'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
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