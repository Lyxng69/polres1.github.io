<?php
include "koneksi.php";
$nama = $_POST['nama'];
$tgl_lahir = $_POST['tgl_lahir'];
$tmp_lahir = $_POST['tmp_lahir'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$pekerjaan = $_POST['pekerjaan'];
$judul_laporan = $_POST['judul_laporan'];
$isi_laporan = $_POST['isi_laporan'];
$telp = $_POST['no_telp'];

$sql = "INSERT INTO `tbl_lapor`( `nama`, `tgl_lahir`, `tmp_lahir`, `jenis_kelamin`, `agama`, `no_telp`, `alamat`, `pekerjaan`, `judul_laporan`, `isi_laporan`, `status`, created_date) VALUES 
('$nama','$tgl_lahir','$tmp_lahir','$jenis_kelamin','$agama','$telp','$alamat','$pekerjaan','$judul_laporan','$isi_laporan','Belum Terverifikasi', NOW())";

mysqli_query($conn, $sql);
echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=laporan_diri';
				</script>";
