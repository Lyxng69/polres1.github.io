        <div id="page-wrapper">
        	<div class="row">
        		<div class="col-lg-12">
        			<h1 class="page-header">LAPORAN DIRI</h1>
        		</div>
        		<!-- /.col-lg-12 -->
        	</div>
        	<!-- /.row -->
        	<div class="row">
        		<div class="col-lg-12">

        			<!-- /.panel-heading -->
        			<div class="panel-body">

        				<?php
						include "koneksi.php";
						$e = $_GET['id'];
						$edit = mysqli_query($conn, "SELECT * FROM tbl_lapor WHERE id_laporan='$e'");
						$book = mysqli_fetch_array($edit);
						?>
        				<div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;margin-bottom:20px;">
        					Edit Laporan
        				</div>
        				<form action="?module=e_laporan_diri" method="post" enctype="multipart/form-data">
        					<input type="hidden" name="id_laporan" class="form-control" value=" <?php echo $book['id_laporan']; ?>">

        					<b>Nama :</b> <input type="text" name="nama" class="form-control" value=" <?php echo $book['nama']; ?>"><br>
        					<b>Tempat Lahir : </b><input type="text" name="tmp_lahir" class="form-control" value=" <?php echo $book['tmp_lahir']; ?>"><br>
        					<b>Tanggal Lahir : </b><input type="text" name="tgl_lahir" class="form-control" value=" <?php echo $book['tgl_lahir']; ?>"><br>
        					<b>Jenis Kelamin : </b>
        					<td><select name="jenis_kelamin" class="form-control">
        							<?php
									if ($book['jenis_kelamin'] == 'Laki-laki') {
									?>
        								<option value="Laki-laki" selected>Laki-laki</option>
        								<option value="Perempuan">Perempuan</option>
        							<?php } else { ?>
        								<option value="Laki-laki">Laki-laki</option>
        								<option value="Perempuan" selected>Perempuan</option>
        							<?php } ?>
        						</select></td>
        					</tr><br>
        					<b>Agama : </b>
        					<td><select name="agama" class="form-control">
        							<?php
									if ($book['agama'] == 'Islam') {
									?>
        								<option value="Islam" selected>Islam</option>
        								<option value="kristen">Kristen</option>
        								<option value="Hindu">Hindu</option>
        								<option value="buddha">Buddha</option>
        							<?php
									} elseif ($book['agama'] == 'Kristen') {
									?>
        								<option value="Islam">Islam</option>
        								<option value="kristen" selected>Kristen</option>
        								<option value="Hindu">Hindu</option>
        								<option value="buddha">Buddha</option>
        							<?php
									} elseif ($book['agama'] == 'Hindu') {
									?>
        								<option value="Islam">Islam</option>
        								<option value="kristen">Kristen</option>
        								<option value="Hindu" selected>Hindu</option>
        								<option value="buddha">Buddha</option>
        							<?php
									} else { ?>
        								<option value="Islam">Islam</option>
        								<option value="kristen">Kristen</option>
        								<option value="Hindu">Hindu</option>
        								<option value="buddha" selected>Buddha</option>
        							<?php } ?>
        						</select></td>
        					</tr><br>
        					<b>Alamat : </b><input type="text" name="alamat" class="form-control" value=" <?php echo $book['alamat']; ?>"><br>
        					<b>Pekerjaan : </b><input type="text" name="pekerjaan" class="form-control" value=" <?php echo $book['pekerjaan']; ?>"><br>
        					<b>Judul Laporan : </b><input type="text" name="judul_laporan" class="form-control" value=" <?php echo $book['judul_laporan']; ?>"><br>
							<b>No HP(WA) : </b><input type="text" name="no_telp" class="form-control" value=" <?php echo $book['no_telp']; ?>"><br>
        					<b>Isi Laporan : </b><input type="text" name="isi_laporan" class="form-control" value=" <?php echo $book['isi_laporan']; ?>"><br>
        					<select name="status" class="form-control">
        						<?php if ($book['status'] === "Terverifikasi") { ?>
        							<option value="<?php echo $book['status'] ?>"><?php echo $book['status'] ?></option>
        							<option value="Belum Terverifikasi">Belum Terverifikasi</option>
        						<?php } else { ?>
        							<option value="<?php echo $book['status'] ?>"><?php echo $book['status'] ?></option>
        							<option value="Terverifikasi">Terverifikasi</option>
        						<?php } ?>
        					</select>
        					<td><br>
        						<input type="submit" class="btn btn-success" value="simpan">
        				</form>

        			</div>
        			<!-- /.panel-body -->
        		</div>
        		<!-- /.panel -->
        	</div>
        	<!-- /.col-lg-12 -->

        	<!-- /.col-lg-6 -->

        	<!-- /.col-lg-6 -->

        	<!-- /.col-lg-6 -->

        	<!-- /.col-lg-6 -->

        	<!-- /.col-lg-6 -->
        </div>
        <!-- /.row -->