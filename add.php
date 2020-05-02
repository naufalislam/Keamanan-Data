<?php 
// koneksi database
include 'koneksi.php';
include 'encrypt.php';

if(isset($_POST['simpan'])){
    // menangkap data yang di kirim dari form
    
    $nip_text = $_POST['nip'];
    $nama_text = $_POST['nama'];
    $jk_text = $_POST['jk'];
    $alamat_text = $_POST['alamat'];
    $no_hp_text = $_POST['no_hp'];
    $email_text = $_POST['email'];
    $pangkat_text = $_POST['pangkat'];
    $golongan_text = $_POST['golongan'];
    $no_req_text = $_POST['no_req'];
    $bank_text = $_POST['bank'];
    $gaji_text = $_POST['gaji'];

    $nip = $_POST['nip'];
    $nama = buatkode($nama_text);
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $email = $_POST['email'];
    $pangkat = $_POST['pangkat'];
    $golongan = $_POST['golongan'];
    $no_req = $_POST['no_req'];
    $bank = $_POST['bank'];
    $gaji = $_POST['gaji'];


    


    if(empty($nip)){
        echo "<p style='color:red'>Nip tidak boleh kosong!</p>";
    }elseif(empty($nama)){
        echo "<p style='color:red'>Name tidak boleh kosong!</p>";
    }
    else if(empty($jk)){
        echo "<p style='color:red'>Jenis Kelamin tidak boleh kosong!</p>";
    }
    else if(empty($alamat)){
        echo "<p style='color:red'>Alamat tidak boleh kosong!</p>";
    }
    else if(empty($no_hp)){
        echo "<p style='color:red'>Nomor Telepon tidak boleh kosong!</p>";
    }
    else if(empty($email)){
        echo "<p style='color:red'>Email tidak boleh kosong!</p>";
    }
    else if(empty($pangkat)){
        echo "<p style='color:red'>Pangkat tidak boleh kosong!</p>";
    }
    else if(empty($golongan)){
        echo "<p style='color:red'>Golongan tidak boleh kosong!</p>";
    }
    else if(empty($no_req)){
        echo "<p style='color:red'>Nomor Rekening tidak boleh kosong!</p>";
    }
    else if(empty($bank)){
        echo "<p style='color:red'>Bank tidak boleh kosong!</p>";
    }
    else if(empty($gaji)){
        echo "<p style='color:red'>Gaji tidak boleh kosong!</p>";
    }
    else {
    // menginput data ke database
    mysqli_query($koneksi,"insert into data (`nip`, `nama`, `jk`, `alamat`, `no_hp`, `email`, `pangkat`, `golongan`, `no_req`, `bank`, `gaji`) 
    values('$nip','$nama','$jk','$alamat','$no_hp','$email','$pangkat','$golongan','$no_req','$bank','$gaji')");
    // mengalihkan halaman kembali ke index.php
    header("location:index.php");
    }
}
?>