<?php
include "../koneksi.php";
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];

$tmp_lahir = $_POST['tmp_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];;
$agama = $_POST['agama'];
$tinggi = $_POST['tinggi'];
$pekerjaan = $_POST['pekerjaan'];
$ket = $_POST['ket'];
$noHp = $_POST['no_telp'];
$no_sim= $_POST['no_sim'];



mysqli_query($conn, "
	INSERT INTO tbl_sim 
	SET 
		nama = '$nama',
		tgl_lahir = '$tgl_lahir',
		tmp_lahir = '$tmp_lahir',
		jenis_kelamin = '$jenis_kelamin',
		alamat = '$alamat',
		agama = '$agama',
		tinggi = '$tinggi',
		pekerjaan = '$pekerjaan',
		keterangan = '$ket',
		STATUS = 'Belum Terverifikasi',
		created_date = NOW(),
		no_telp = '$noHp',
		no_sim = '$no_sim'
");

echo "<script>alert('Data Sukses Tersimpan');
				window.location='index.php?module=sim';
			</script>";
