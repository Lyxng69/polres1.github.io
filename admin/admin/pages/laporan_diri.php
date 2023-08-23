<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">LAPORAN DIRI </h1>
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
                $no = 1;
                $title = "Belum Terverifikasi";
                $qry_skck = mysqli_query($conn, "SELECT * from tbl_lapor where status='Belum Terverifikasi'");
                if (isset($_POST['sudah'])) {

                    $title = 'Terverifikasi';
                    $qry_skck = mysqli_query($conn, "SELECT * from tbl_lapor where status='Terverifikasi'");
                } else if (isset($_POST['belum'])) {
                    $qry_skck = mysqli_query($conn, "SELECT * from tbl_lapor where status='Belum Terverifikasi'");

                    $title = 'Belum Terverifikasi';
                }
                ?>
                <div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
                    <b>Data Lapor <?php echo $title ?></b>
                </div>
                <form method="POST">
                    <input type="submit" name="sudah" id="" class="btn btn-warning" style="margin-top:20px;" value="Terverifkasi">
                    <input type="submit" name="belum" id="" class="btn btn-info" style="margin-top:20px;" value="Belum Verifikasi">
                </form>

                <a href="?module=input_laporan_diri" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH LAPOR</span></a>
                <?php
                @$aksi = $_GET['aksi'];
                if ($aksi == "input") {
                    include("?module=input_laporan_diri");
                }
                ?>
                <div class="th">
                    <table class="table table-bordered" style="margin-top:20px;">

                        <th style=" background: #E6E6FA;">
                            <center>No</center>
                        </th>
                        <th style=" background: #E6E6FA;">Nama</th>
                        <th style=" background: #E6E6FA;">Tanggal Lahir</th>
                        <th style=" background: #E6E6FA;">Jenis Kelamin</th>
                        <th style=" background: #E6E6FA;">Agama</th>
                        <th style=" background: #E6E6FA;">Alamat</th>
                        <th style=" background: #E6E6FA;">Pekerjaan</th>
                        <th style=" background: #E6E6FA;">
                            <center>Judul Laporan</center>
                        </th>
                        <th style=" background: #E6E6FA;">Isi Laporan</th>
                        <th style=" background: #E6E6FA;">
                            <center>aksi</center>
                        </th>
                        <?php while ($data = mysqli_fetch_array($qry_skck)) { ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama'] ?></td>
                                <td><?php echo $data['tgl_lahir'] ?></td>
                                <td><?php echo $data['jenis_kelamin'] ?></td>
                                <td><?php echo $data['agama'] ?></td>
                                <td><?php echo $data['alamat'] ?></td>
                                <td><?php echo $data['pekerjaan'] ?></td>
                                <td><?php echo $data['judul_laporan'] ?></td>
                                <td><?php echo $data['isi_laporan'] ?></td>
                                <td><a href="?module=edit_laporan_diri&id=<?php echo $data['id_laporan']; ?>"><span class="glyphicon glyphicon-pencil"></span>
                                    </a> <a href="?module=hapus_laporan_diri&id=<?php echo $data['id_laporan']; ?>"><span class="glyphicon glyphicon-trash"></span></a>
                                    <a href="print_laporan.php?id=<?php echo $data['id_laporan']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a>

                                    <?php if ($title === "Sudah Terverifikasi") {
												$pesan = "Halo Laporan Yang Anda Ajukan Sudah Diterima Mohon Untuk Menunggu Informasi Lebih Lanjut" ;
												$url = 'https://wa.me/62' . $data['no_telp'] . '?text=' . $pesan; ?>
												<a href="<?php echo $url; ?>" target="_blank"><span class="glyphicon glyphicon-earphone"></span></a>
        									<?php } else {
												$pesan = "Halo Laporan Yang Anda Ajukan Sudah Diterima Mohon Untuk Menunggu Informasi Lebih Lanjut" ;
												$url = 'https://wa.me/62' . $data['no_telp'] . '?text=' . $pesan; ?>
        										<a href="<?php echo $url; ?>" target="_blank"><span class="glyphicon glyphicon-earphone"></span></a>
        									<?php } ?>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
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