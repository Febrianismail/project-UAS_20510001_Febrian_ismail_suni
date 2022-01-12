<?php
$conn = mysqli_connect('localhost', 'root', '', 'dataKampus');
if (mysqli_connect_error()) {
	printf("Connect failed: %s\n", mysqli_connect_error());
	exit();
}
if (!$conn) {
	die("<script>alert('Gagal tersambung dengan database.')</script>");
}
