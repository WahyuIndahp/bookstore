<?php
	$host = "10.0.0.6";
	$user = "Admin";
	$pass = "151617_Wahyu";
	$db = "penjualan-buku";

	$koneksi = mysqli_connect($host, $user, $pass, $db);

	if(!$koneksi) {
		die("Koneksi gagal : ".mysqli_connect_error());
	}
?>