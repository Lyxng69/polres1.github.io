        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">SIM</h1>
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
                        $qry_sim = mysqli_query($conn, "SELECT * from tbl_sim where status='Belum Terverifikasi'");
                        if (isset($_POST['sudah'])) {
                            $title = "Sudah Terverifikasi";
                            $qry_sim = mysqli_query($conn, "SELECT * from tbl_sim where status='Terverifikasi'");
                        } else if (isset($_POST['belum'])) {
                            $title = "Belum Terverifikasi";
                            $qry_sim = mysqli_query($conn, "SELECT * from tbl_sim where status='Belum Terverifikasi'");
                        }
                        ?>
                        <div style="margin-top:30px;width:100%,height:50px;text-align:center;background:#0000ff;color:#fff;line-height:60px;font-size:20px;">
                            <b>Data SIM <?php echo $title ?></b>
                        </div>
                        <form method="POST">
                            <input type="submit" name="sudah" id="" class="btn btn-warning" style="margin-top:20px;" value="Terverifkasi">
                            <input type="submit" name="belum" id="" class="btn btn-info" style="margin-top:20px;" value="Belum Verifikasi">
                        </form>
                        <a href="?module=input_sim" class="btn btn-success" style="margin-top:20px;"><span class="glyphicon glyphicon-plus"> TAMBAH SIM</span></a>
                        <?php
                        @$aksi = $_GET['aksi'];
                        if ($aksi == "input") {
                            include("?module=input_sim");
                        }
                        ?>
                        <div class="th">
                            <table class="table table-bordered" style="margin-top:20px;">

                                <th style=" background: #E6E6FA;">
                                    <center>No</center>
                                </th>
                                <th style=" background: #E6E6FA;">Nama</th>
                                <th style=" background: #E6E6FA;">
                                    <center>Tanggal Lahir</center>
                                </th>
                                <th style=" background: #E6E6FA;">Jenis Kelamin</th>
                                <th style=" background: #E6E6FA;">Alamat</th>
                                <th style=" background: #E6E6FA;">Agama</th>
                                <th style=" background: #E6E6FA;">Tinggi</th>
                                <th style=" background: #E6E6FA;">
                                    <center>Pekerjaan</center>
                                </th>
                                <th style=" background: #E6E6FA;">
                                    <center>aksi</center>
                                </th>
                                <?php while ($data = mysqli_fetch_array($qry_sim)) { ?>
                                    <tr>
                                        <td><?php echo $no++ ?></td>
                                        <td><?php echo $data['nama'] ?></td>
                                        <td><?php echo $data['tgl_lahir'] ?></td>
                                        <td><?php echo $data['jenis_kelamin'] ?></td>
                                        <td><?php echo $data['alamat'] ?></td>
                                        <td><?php echo $data['agama'] ?></td>
                                        <td><?php echo $data['tinggi'] ?></td>
                                        <td><?php echo $data['pekerjaan'] ?></td>
                                        <td><a href="?module=edit_sim&id=<?php echo $data['id_sim']; ?>"><span class="glyphicon glyphicon-pencil"></span></a> <a href="?module=hapus_sim&id=<?php echo $data['id_sim']; ?>"><span class="glyphicon glyphicon-trash"></span></a> <a href="print_sim.php?id=<?php echo $data['id_sim']; ?>" target="_blank"><span class="glyphicon glyphicon-print"></span></a>
                                            <?php if ($title === "Sudah Terverifikasi") {
                                                $pesan = "Halo " . $data['nama'] . "%0APembuatan SIM Dengan Permintaan%0AJenis : " . $data['keterangan'] . "%0ANo. SIM : " . $data['no_sim'] . "%0ABERHASIL DIVERIFIKASI%0A%0ASilahkan Datang Ke SPKT Kepolisian Resor Pati Untuk Mencetak SIM https://goo.gl/maps/QUGbbhVXAKvcFmPRA" ;
                                                $url = 'https://wa.me/62' . $data['no_telp'] . '?text=' . $pesan; ?>
                                            
                                                <a href="<?php echo $url; ?>" target="_blank"><span class="glyphicon glyphicon-earphone"></span></a>
                                            <?php } else {
                                                $pesan = "Halo " . $data['nama'] . "%0APembuatan SIM Dengan Permintaan%0AJenis : " . $data['keterangan'] . "%0ANo. SIM : " . $data['no_sim'] . "%0ABELUM DIVERIFIKASI%0A%0ASilahkan Lengkapi Berkas Anda";
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