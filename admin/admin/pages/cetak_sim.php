<div id="page-wrapper">
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">

            <!-- /.panel-heading -->
            <div class="panel-body">

                <tr>
                    <td colspan=8 color="#FFF000">
                        <center class="text-bold">POLRES PATI</center>
                    </td>
                </tr>
                <tr>
                    <td colspan=8>
                        <center class="text-bold">LAPORAN DATA SIM POLRES PATI</center>
                    </td>
                </tr>
                <tr>
                    <td colspan=8>
                        <center class="text-bold">Jl. A. Yani No.50, Winong, Kec. Pati Kabupaten Pati Jawa Tengah</center>
                    </td>
                </tr>

                <tr>
                    <td colspan=8>
                        <center class="text-bold">=======================================================</center>
                    </td>
                </tr>

                <hr>

                <?php include('_filter_laporan.php') ?>

                <hr class="hidden-print">

                <table class="table table-striped table-bordered table-hover order-column" cellpadding="8" cellspacing="0">
                    <tr style="background-color: #f2a91c; text-align: center; vertical-align: middle !important;" class="text-bold">
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tempat/ Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Agama</th>
                        <th>Tinggi</th>
                        <th>Pekerjaan</th>
                        <th>Masa Berlaku</th>
                    </tr>

                    <?php
                    include "koneksi.php";
                    include "tglindo.php";

                    $sqlQuery = "SELECT * FROM tbl_sim WHERE 1 = 1 ";

                    //reset variable ketika tombol reset di klik
                    //var post dari form yg di submit (onchange)
                    //session var untuk menyimpan session filter yg berfungsi untuk set value ke form filter
                    if (!empty($_POST['reset'])) {
                        $_SESSION['filter_tanggal_pembuatan_sim'] = '';
                        $_SESSION['filter_bulan_sim'] = '';
                        $_SESSION['filter_tahun_sim'] = '';

                        $_POST['filter_tanggal_pembuatan'] = '';
                        $_POST['filter_bulan'] = '';
                        $_POST['filter_tahun'] = '';
                    }

                    if (!empty($_POST['filter_tanggal_pembuatan'])) {
                        $_SESSION['filter_tanggal_pembuatan_sim'] = $_POST['filter_tanggal_pembuatan'];
                        $sqlQuery .= "AND DATE(created_date) = '" . $_POST['filter_tanggal_pembuatan'] . "' ";
                    }
                    if (!empty($_POST['filter_bulan'])) {
                        $_SESSION['filter_bulan_sim'] = $_POST['filter_bulan'];
                        $sqlQuery .= "AND MONTHNAME(created_date) = '" . $_POST['filter_bulan'] . "' ";
                    }
                    if (!empty($_POST['filter_tahun'])) {
                        $_SESSION['filter_tahun_sim'] = $_POST['filter_tahun'];
                        $sqlQuery .= "AND YEAR(created_date) = '" . $_POST['filter_tahun'] . "' ";
                    }

                    if (!empty($_SESSION['filter_tanggal_pembuatan_sim'])) {
                        echo '<script>document.getElementById("filter_tanggal_pembuatan").value="' . $_SESSION['filter_tanggal_pembuatan_sim'] . '"</script>';
                    } else {
                        echo '<script>document.getElementById("filter_tanggal_pembuatan").value=""</script>';
                    }

                    if (!empty($_SESSION['filter_bulan_sim'])) {
                        echo '<script>document.getElementById("filter_bulan").value="' . $_SESSION['filter_bulan_sim'] . '"</script>';
                    } else {
                        echo '<script>document.getElementById("filter_bulan").value=""</script>';
                    }

                    if (!empty($_SESSION['filter_tahun_sim'])) {
                        echo '<script>document.getElementById("filter_tahun").value="' . $_SESSION['filter_tahun_sim'] . '"</script>';
                    } else {
                        echo '<script>document.getElementById("filter_tahun").value=""</script>';
                    }

                    $sqlQuery .= 'ORDER BY created_date DESC';

                    $sql = mysqli_query($conn, $sqlQuery);
                    $no = 1;
                    if (mysqli_num_rows($sql) == 0) {
                        echo '<tr>
                            <td colspan="12" class="text-center">Data Tidak di Temukan</td>
                        </tr>';
                    } else {
                        while ($row = mysqli_fetch_array($sql)) {
                    ?>
                            <tr bgcolor='#FFF'>
                                <td align='center'> <?php echo $no; ?> </td>
                                <td align='left'> <?php echo $row['nama']; ?></td>
                                <td align='left'> <?php echo $row['tmp_lahir']; ?>/ <?php echo TanggalIndo($row['tgl_lahir']); ?> </td>
                                <td align='left'> <?php echo $row['jenis_kelamin']; ?> </td>
                                <td align='left'> <?php echo $row['alamat']; ?> </td>
                                <td align='left'> <?php echo $row['agama']; ?> </td>
                                <td align='left'> <?php echo $row['tinggi']; ?> </td>
                                <td align='left'> <?php echo $row['pekerjaan']; ?> </td>

                                <td align='left'> <?php echo TanggalIndo($row['masa']); ?> </td>
                            </tr>
                    <?php
                            $no++;
                        }
                    }
                    ?>
                </table>
                <hr>
                <br>
                <table>
                    <td>
                        <tr>Pati, <?php echo date('d  M  Y'); ?></tr><br>
                        <tr> Ttd </tr><br>
                        <tr> </tr><br>
                        <tr> </tr><br>
                        <tr> </tr><br>
                        <tr> Eren Yeager, M.Si </tr>
                    </td>
                </table>

            </div>
        </div>
    </div>
</div>