<?php

include('koneksi.php');
?>


<div class="container" style="margin-top:20px">
	<center>
		<font size="6">Data Mahasiswa</font>
	</center>
	<hr>
	<a href="index.php?page=tambah_mhs"><button class="btn btn-dark right">Tambah Data</button></a>
	<div class="table-responsive">
		<table class="table table-striped jambo_table bulk_action">
			<thead>
				<tr>
					<th>NO.</th>
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Jenis Kelamin</th>
					<th>Program Studi</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				<?php

				$sql = mysqli_query($conn, "SELECT * FROM mahasiswa ORDER BY Nim DESC") or die(mysqli_error($conn));

				if (mysqli_num_rows($sql) > 0) {

					$no = 1;

					while ($data = mysqli_fetch_assoc($sql)) {

						echo '
						<tr>
							<td>' . $no . '</td>
							<td>' . $data['Nim'] . '</td>
							<td>' . $data['Nama_Mhs'] . '</td>
							<td>' . $data['Jenis_Kelamin'] . '</td>
							<td>' . $data['Program_Studi'] . '</td>
							<td>
								<a href="index.php?page=edit_mhs&Nim=' . $data['Nim'] . '" class="btn btn-secondary btn-sm">Edit</a>
								<a href="delete.php?Nim=' . $data['Nim'] . '" class="btn btn-danger btn-sm" onclick="return confirm(\'Yakin ingin menghapus data ini?\')">Delete</a>
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