<?php
include "../koneksi.php";
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$tmp_lahir = $_POST['tmp_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$agama = $_POST['agama'];
$no_telp = $_POST['no_telp'];
$tujuan_pengawalan = $_POST['tujuan_pengawalan'];
$route = $_POST['route'];


mysqli_query($conn, "INSERT INTO tbl_sabhara 
SET nama = '$nama',
tgl_lahir = '$tgl_lahir',
tmp_lahir = '$tmp_lahir',
jenis_kelamin = '$jenis_kelamin',
alamat = '$alamat',
agama = '$agama',
no_telp = '$no_telp',
tujuan_pengawalan = '$tujuan_pengawalan',
route = '$route',
STATUS = 'Belum Terverifikasi',
created_date = NOW()");

echo "<script>alert('Data Sukses Tersimpan');
				window.location='index.php?module=sabhara';
			</script>";
