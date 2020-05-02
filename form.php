<!DOCTYPE html>
<html>
<head>
    <title>Form Tambah Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<style>
		.erro {color: red};
	</style>
</head>
<body>
<div class="container">
	<br>
	<h2>Tambah Data Pegawai</h2>
	<br>
	
	<?php
		include ("add.php");
	?>

	<div class="col-md-6">
		<form method="post" action="form.php" autocomplete="off">
        <div class="form-group">
				<label for="nip">NIP</label>
				<input class="form-control" type="text" name="nip" id="nip">
			</div>
			<div class="form-group">
				<label for="nama">Nama</label>
				<input class="form-control" type="text" name="nama" id="nama">
			</div>
            <div class="form-group">
				<label for="jk">Jenis Kelamin</label>
				<input class="form-control" type="text" name="jk" id="jk">
			</div>
			<div class="form-group">
				<label for="alamat">Alamat</label>
				<input class="form-control" type="text" name="alamat" id="alamat">
			</div>
			<div class="form-group">
				<label for="no_hp">Nomer Telepon</label>
				<input class="form-control" type="text" name="no_hp" id="no_hp">
			</div>
			<div class="form-group">   
				<label for="email">Email</label>
				<input class="form-control" type="text" name="email" id="email">
			</div>
			<div class="form-group">   
				<label for="pangkat">Pangkat</label>
				<input class="form-control" type="text" name="pangkat" id="pangkat">
			</div>
			<div class="form-group">   
				<label for="golongan">Golongan</label>
				<input class="form-control" type="text" name="golongan" id="golongan">
			</div>
            <div class="form-group">
				<label for="no_req">No Rekening</label>
				<input class="form-control" type="text" name="no_req" id="no_req">
			</div>
            <div class="form-group">
				<label for="bank">Bank</label>
				<input class="form-control" type="text" name="bank" id="bank">
			</div>
            <div class="form-group">
				<label for="gaji">Gaji</label>
				<input class="form-control" type="text" name="gaji" id="gaji">
			</div>
			<button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
			<a href="index.php">Kembali</a>
		</form>
	</div>
</div>
</body>
</html>   