<?php
include "koneksi.php";
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kebangsaan = $_POST['kebangsaan'];
$agama = $_POST['agama'];
$tgl_lahir = $_POST['tgl_lahir'];
$masa = $_POST['masa'];
$tmp_lahir = $_POST['tmp_lahir'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$no_ktp = $_POST['no_ktp'];
$keperluan = $_POST['keperluan'];
$riwayat_sekolah = $_POST['riwayat_sekolah'];
$ket = $_POST['ket'];
$telp = $_POST['no_telp']; {

	$sql = "INSERT INTO `tbl_skck`( `nama`, `jenis_kelamin`, `kebangsaan`, `agama`, `tgl_lahir`, `tmp_lahir`, `alamat`, `pekerjaan`, `no_telp`, `no_ktp`, `keperluan`, `riwayat_sekolah`, `keterangan`, `masa`, `status`, created_date, modified_date) VALUES
	 ('$nama','$jenis_kelamin','$kebangsaan','$agama','$tgl_lahir','$tmp_lahir','$alamat','$pekerjaan','$telp','$no_ktp','$keperluan','$riwayat_sekolah','$ket','$masa','Belum Terverifikasi', NOW(), NOW())";
	mysqli_query($conn, $sql);
	echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=skck';
				</script>";
}
