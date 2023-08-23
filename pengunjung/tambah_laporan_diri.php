<?php
include "../koneksi.php";
	$nama = $_POST['nama'];
	$tgl_lahir = $_POST['tgl_lahir'];
	
	$tmp_lahir = $_POST['tmp_lahir'];
	$jenis_kelamin = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$alamat = $_POST['alamat'];
	$pekerjaan = $_POST['pekerjaan'];
	$judul_laporan = $_POST['judul_laporan'];
	$isi_laporan = $_POST['isi_laporan'];
	$no_telp = $_POST['no_telp'];
		
		
			
			mysqli_query($conn,"INSERT into tbl_lapor set nama='$nama',tgl_lahir='$tgl_lahir',tmp_lahir='$tmp_lahir',jenis_kelamin='$jenis_kelamin',agama='$agama',alamat='$alamat',pekerjaan='$pekerjaan',judul_laporan='$judul_laporan',isi_laporan='$isi_laporan',status='Belum Terverifikasi', created_date = NOW(), no_telp = '$no_telp'");
			
		echo "<script>alert('Data Sukses Tersimpan');
					window.location='index.php?module=laporan_diri';
				</script>";
