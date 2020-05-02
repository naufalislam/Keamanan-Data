<!DOCTYPE html>
<html>
<head>
    <title>Data Pegawai</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>
<body>

<div class="container">
	<br>
	<h2>Data Pegawai</h2>
	<br>
	<!-- <button type="submit" name="simpan" class="btn btn-primary">Simpan</button> -->
	<a href="form.php" class="btn btn-primary" >Tambah Data</a>
    <br><br>
    <h2>Enkripsi</h2>
	<table class="table tab-striped">
		<thead>
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
            <th>No Telfon</th>
			<th>Email</th>
			<th>Pangkat</th>
            <th>golongan</th>
            <th>No Rekening</th>
            <th>Bank</th>
            <th>Gaji</th>
		</tr>
		</thead>
		<tbody>
		<?php 
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from data");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
                <td><?php echo $d['nip']; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jk']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
				<td><?php echo $d['no_hp']; ?></td>
				<td><?php echo $d['email']; ?></td>
				<td><?php echo $d['pangkat']; ?></td>
                <td><?php echo $d['golongan']; ?></td>
                <td><?php echo $d['no_req']; ?></td>
                <td><?php echo $d['bank']; ?></td>
                <td><?php echo $d['gaji']; ?></td>
			</tr>
			<?php 
		}
		?>
		</tbody>
    </table>

    <br><br>
    <h2>Dekripsi</h2>
	<table class="table tab-striped">
		<thead>
		<tr>
			<th>NIP</th>
			<th>Nama</th>
			<th>Jenis Kelamin</th>
			<th>Alamat</th>
            <th>No Telfon</th>
			<th>Email</th>
			<th>Pangkat</th>
            <th>golongan</th>
            <th>No Rekening</th>
            <th>Bank</th>
            <th>Gaji</th>
		</tr>
		</thead>
		<tbody>
		<?php 
        include 'koneksi.php';
        include "encrypt.php";
        $no = 1;
		$data = mysqli_query($koneksi,"select * from data");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
                <td><?php echo $d['nip']; ?></td>
                <td><?php
                error_reporting("E_ALL ^ E_NOTICE");
                terjemahkan($d['nama']);
                ?></td> 
                <td><?php
                error_reporting("E_ALL ^ E_NOTICE");
                terjemahkan($d['jk']);
                ?></td> 
                <td><?php
                error_reporting("E_ALL ^ E_NOTICE");
                terjemahkan($d['alamat']);
                ?></td> 
				<td><?php echo $d['no_hp']; ?></td>
				<td><?php
                error_reporting("E_ALL ^ E_NOTICE");
                terjemahkan($d['email']);
                ?></td> 
				<td><?php echo $d['pangkat']; ?></td>
                <td><?php echo $d['golongan']; ?></td>
                <td><?php echo $d['no_req']; ?></td>
                <td><?php
                error_reporting("E_ALL ^ E_NOTICE");
                terjemahkan($d['bank']);
                ?></td> 
                <td><?php echo $d['gaji']; ?></td>
			</tr>
			<?php 
		}
		?>
		</tbody>
    </table>
</div>
</body>
</html>
