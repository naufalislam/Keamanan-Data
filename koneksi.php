<?php 
$koneksi = mysqli_connect("localhost","root","","db_pegawai");

if (mysqli_connect_errno()){
	echo "Gagal membuat koneksi : " . mysqli_connect_error();
}

?>